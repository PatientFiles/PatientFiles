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
        if (\Session::has('consult')) {
            return redirect('/patientRecords')->with('message',['type'=> 'danger','text' => 'There is an ongoing visit! Please end the ongoing visit before proceeding. ']);
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
        ];
        //dd($data);
        $consult = \Session::put('consult', $id);
		$appointment = $this->medix->post('appointment', $data);
        $profile = $this->medix->get('patient/'.$id);
        \Session::put('type', 'New Patient Consultation');
        \Session::put('complaint', $chief_complaints);
        \Session::put('url', '/consultation/'.$id);

		return redirect('consultation/'.$id)
                ->with('prof', $profile->data)
                ->with('appoint', $appointment->data);

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
        if (\Session::has('consult')) {
            return redirect('/patientRecords')->with('message',['type'=> 'danger','text' => 'There is an ongoing visit! Please end the ongoing visit before proceeding. ']);
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
        ];

        $consult        = \Session::put('consult', $id);
        $appointment    = $this->medix->post('appointment', $data);
        $profile        = $this->medix->get('patient/'.$id);
        $key            = end($profile->data->patient_appointments);
        \Session::put('appoint', $key->id);
        \Session::put('patient_appoint', $profile->data->id);
        \Session::put('complaint', $chief_complaints);
        \Session::put('url', '/consultation/'.$id);
        \Session::put('visit_patient', $profile->data->user->firstname.' '.$profile->data->user->lastname);
        //dd($profile);
        //dd(\Session::get('appoint'));

        if ($purpose_id = 1) {
            \Session::put('type', 'Old Patient Consultation');
        } if ($purpose_id = 2) {
            \Session::put('type', 'Follow-up Consultation');
        }

        return redirect('consultation/'.$id)
                ->with('prof', $profile->data);

    }


	/*---------------------------------------------------------------------------------------------------------------------------------------------
	| CREATE A PRESCRIPTION IN PDF
	|----------------------------------------------------------------------------------------------------------------------------------------------
	|
	*/
   	public function createPrescription()
   	{
        if (! \Session::has('fname')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login!']);
        }

   		//$pdf = \PDF::loadView('forms.patientRegister');
		//return $pdf->stream();
		$pdf = App::make('dompdf.wrapper');
		$pdf->loadView('pdf.prescription');
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
}