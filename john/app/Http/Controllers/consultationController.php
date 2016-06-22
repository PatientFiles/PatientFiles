<?php

namespace App\Http\Controllers;

use App;
use PDF;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Models\Diagnosis;
use App\Http\Models\Labrequest;
use App\Http\Models\Vaccination;
use App\Http\Models\Prescription;
use App\Http\Models\Lab;
use App\Http\Models\Vaccine;
use App\Http\Models\Medicine;


class consultationController extends Controller
{
	protected $medix;

	public function __construct()
    {
        $this->middleware('nocache');
        $this->medix = new \App\Medix\Client();
    }

	/*---------------------------------------------------------------------------------------------------------------------------------------------
	| CREATE AN APPOINTMENT FOR NEW PATIENT
	|----------------------------------------------------------------------------------------------------------------------------------------------
	|
	*/
	public function appointmentForNewPatient(Request $req)
	{
		if (! \Session::has('fname')) {
            return redirect('/#about')->with('success',['type'=> 'danger','text' => 'Access denied, Please Login to view a patient profile!']);
        }

        $req->only('chief_complaints', 'patient_id');
        $id 				= $req->input('patient_id');
        $chief_complaints 	= $req->input('chief_complaints');

        $data =
        [
            'practitioner_id'   => \Session::get('user_id'),
        	'patient_id' 		=> $id,
        	'appointment_date'	=> date('Y-m-d', strtotime(Carbon::now()->setTimezone('GMT+8'))),
        	'appointment_time'	=> date('H:i:s', strtotime(Carbon::now()->setTimezone('GMT+8'))),
        	'purpose_id'		=> 1,
        	'chief_complaints'	=> $chief_complaints,
            'status'            => 'active',
        ];
		$appointment = $this->medix->post('appointment', $data);

		return redirect('consultation/'.$id)
                ->with('prof', $profile->data)
                ->with('appoint', $appointment->data);

        return redirect('/home')->with('message',['type'=> 'success','text' => 'Patient successfully queued to doctor!']);

	}


    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | CREATE AN APPOINTMENT FOR OLD PATIENT
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function appointmentForOldPatient(Request $req)
    {
        if (! \Session::has('fname')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login to view a patient profile!']);
        }

        $req->only('chief_complaints', 'patient_id','purpose_id');
        $id                 = $req->input('patient_id');
        $purpose_id         = $req->input('purpose_id');
        $chief_complaints   = $req->input('chief_complaints');

        $data =
        [
            'practitioner_id'   => \Session::get('user_id'),
            'patient_id'        => $id,
            'appointment_date'  => date('Y-m-d', strtotime(Carbon::now()->setTimezone('GMT+8'))),
            'appointment_time'  => date('H:i:s', strtotime(Carbon::now()->setTimezone('GMT+8'))),
            'purpose_id'        => $purpose_id,
            'chief_complaints'  => $chief_complaints,
            'status'            => 'active',
        ];

        $appointment    = $this->medix->post('appointment', $data);

        return redirect('/home')->with('message',['type'=> 'success','text' => 'Patient successfully queued to doctor!']);

    }


	/*---------------------------------------------------------------------------------------------------------------------------------------------
	| CREATE A PRESCRIPTION IN PDF
	|----------------------------------------------------------------------------------------------------------------------------------------------
	|
	*/
   	public function createPrescription($id)
   	{
        if (! \Session::has('fname')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login!']);
        }

        $profile     = $this->medix->get('patient/'.$id);
        $prof        = $profile->data;
        $presc       = Prescription::all();
        $presc_table = Prescription::where('appointment_id', \Session::get('appoint'))
                        ->with('prescription')
                        ->get();
        //dd($presc_table);
		$pdf = App::make('dompdf.wrapper');
		$pdf->loadView('pdf.prescription', compact('prof', 'presc_table'));
		$pdf->setPaper('DEFAULT_PDF_PAPER_SIZE', 'portrait');
  		return $pdf->stream();

	}


    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | END A VISIT SESSION
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function endVisit()
    {
        $data =
        [
            'status'   => 'completed',
        ];

        $status = $this->medix->put('appointment/'.\Session::get('appoint'), $data);

       \Session::forget('consult');
       \Session::forget('type');
       \Session::forget('appoint');
       \Session::forget('patient_appoint');
       \Session::forget('complaint');
       \Session::forget('url');

       return redirect('/home')->with('visit',['type'=> 'success','text' => 'Visit successfully ended!']);

    }

    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | ADD VACCINATION
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function vaccination(Request $req)
    {
       
        if (! \Session::has('consult')) {
           return redirect('/home')->with('message',['type'=> 'danger','text' => 'Consultation not yet Started! Please select a patient to be consulted!']);
        }


        if ($req->ajax()) {

            $req->only('select_vaccine','vac_date', 'patient_id', 'appointment_id');

            $select_vaccine  = $req->input('select_vaccine');
            $vac_date        = $req->input('vac_date');
            $patient_id      = $req->input('patient_id');
            $appointment_id  = $req->input('appointment_id');
            $practitioner_id = \Session::get('user_id');

            

            $data = [
                'vaccine_id'        => $select_vaccine,
                'date'              => $vac_date,
                'patient_id'        => \Session::get('patient_appoint'),
                'appointment_id'    => \Session::get('appoint'),
                'practitioner_id'   => $practitioner_id,
            ];

            $vaccine = Vaccination::create($data);
            $vaccine_table = Vaccination::with('vaccine')
                            ->where('vaccine_id', $vaccine->vaccine_id)
                            ->first();
            //dd($user);

           $response = array(
                'status' => 'success',
                'msg'    => 'Vaccination added successfully',
                'data'   => $vaccine_table,
                'date'   => $vaccine->date,
            );
            return \Response::json($response);
        }
        return false;
    }

    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | ADD DIAGNOSIS
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function diagnosis(Request $req)
    {
       
        if (! \Session::has('consult')) {
           return redirect('/home')->with('message',['type'=> 'danger','text' => 'Consultation not yet Started! Please select a patient to be consulted!']);
        }


        if ($req->ajax()) {

            $req->only('remarks','result');

            $remarks         = $req->input('remarks');
            $result          = $req->input('result');
            $patient_id      = $req->input('patient_id');
            $appointment_id  = $req->input('appointment_id');
            $practitioner_id = \Session::get('user_id');

            

            $data = [
                'diagnosis_remarks' => $remarks,
                'diagnosis_result'  => $result,
                'patient_id'        => \Session::get('patient_appoint'),
                'appointment_id'    => \Session::get('appoint'),
                'practitioner_id'   => $practitioner_id,
            ];

            $diagnosis = Diagnosis::create($data);
            //dd($user);

           $response = array(
                'status' => 'success',
                'msg'    => 'Vaccination added successfully',
                'data'   => $diagnosis,
            );
            return \Response::json($response);
        }
        return false;
    }

    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | ADD LAB REQUEST
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function labrequest(Request $req)
    {
       
        if (! \Session::has('consult')) {
           return redirect('/home')->with('message',['type'=> 'danger','text' => 'Consultation not yet Started! Please select a patient to be consulted!']);
        }


        if ($req->ajax()) {

            $req->only('select_lab','remarks');

            $lab_id          = $req->input('select_lab');
            $remarks         = $req->input('remarks');
            $patient_id      = $req->input('patient_id');
            $appointment_id  = $req->input('appointment_id');
            $practitioner_id = \Session::get('user_id');

            

            $data = [
                'lab_id'            => $lab_id,
                'remarks'           => $remarks,
                'patient_id'        => \Session::get('patient_appoint'),
                'appointment_id'    => \Session::get('appoint'),
                'practitioner_id'   => $practitioner_id,
            ];

            $lab           = Labrequest::create($data);
            //dd($user);

           $response = array(
                'status' => 'success',
                'msg'    => 'Lab Request added successfully',
                'data'   => $lab,
            );
            return \Response::json($response);
        }
        return false;
    }

    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | ADD PRESCRIPTION
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function prescription(Request $req)
    {
       
        if (! \Session::has('consult')) {
           return redirect('/home')->with('message',['type'=> 'danger','text' => 'Consultation not yet Started! Please select a patient to be consulted!']);
        }


        if ($req->ajax()) {

            $req->only('select_generic','quantity','sig');

            $select_generic  = $req->input('select_generic');
            $quantity        = $req->input('quantity');
            $sig             = $req->input('sig');
            $patient_id      = $req->input('patient_id');
            $appointment_id  = $req->input('appointment_id');
            $practitioner_id = \Session::get('user_id');

            

            $data = [
                'medicine_id'       => $select_generic,
                'quantity'          => $quantity,
                'sig'               => $sig,
                'patient_id'        => \Session::get('patient_appoint'),
                'appointment_id'    => \Session::get('appoint'),
                'practitioner_id'   => $practitioner_id,
            ];

            $prescription           = Prescription::create($data);
            $presc_table            = Prescription::with('prescription')
                                            ->where('medicine_id', $prescription->medicine_id)
                                            ->first();
            //dd($user);

           $response = array(
                'status' => 'success',
                'msg'    => 'Lab Request added successfully',
                'data'   => $prescription,
                'presc'  => $presc_table,
            );
            return \Response::json($response);
        }
        return false;
    }



    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | ANALYTICS PAGE
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function start_visit($id)
    {
        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login!']);
        }

        if (! \Session::get('consult') == $id ) {
            return redirect('/patientRecords')->with('message',['type'=> 'danger','text' => 'There is an ongoing visit! Please end the ongoing visit before proceeding. ']);
        }
        

        $profile        = $this->medix->get('patient/'.$id);
        $key            = end($profile->data->patient_appointments);

        \Session::put('appoint', $key->id);
        \Session::put('patient_appoint', $profile->data->id);
        \Session::put('complaint', $profile->data->patient_appointments[count($profile->data->patient_appointments) - 1]->chief_complaints);
        \Session::put('url', '/consultation/'.$id);
        \Session::put('visit_patient', $profile->data->user->firstname.' '.$profile->data->user->lastname);
        $consult        = \Session::put('consult', $id);

        $data =
        [
            'status'   => 'ongoing',
        ];

        $status         = $this->medix->put('appointment/'.\Session::get('appoint'), $data);
        $medicine       = Medicine::all()->sortBy('medicine_name');
        $vaccine        = Vaccine::all()->sortBy('vaccine_name');
        $lab            = Lab::all()->sortBy('lab_name');
        $vaccination    = Vaccination::with('vaccine')
                            ->where('appointment_id', \Session::get('appoint'));


        if ($profile->data->patient_appointments[count($profile->data->patient_appointments) - 1]->purpose_id = 1) {
            \Session::put('type', 'New Patient Visit');
        } if ($profile->data->patient_appointments[count($profile->data->patient_appointments) - 1]->purpose_id = 2) {
            \Session::put('type', 'Old Patient Visit');
        } if ($profile->data->patient_appointments[count($profile->data->patient_appointments) - 1]->purpose_id = 3) {
            \Session::put('type', 'Follow-up Visit');
        }

        return  view('pages.consultation')
                ->with('prof', $profile->data)
                ->with('medicine', $medicine)
                ->with('vaccine', $vaccine)
                ->with('lab', $lab);
    }
}