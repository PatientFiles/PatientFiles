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
        $address = $profile->data->user->user_addresses;

		return redirect('consultation/'.$id)
                ->with('prof', $profile->data)
                ->with('address', $address);

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
        ];
        //dd($data);
        $consult = \Session::put('consult', $id);
        $appointment = $this->medix->post('appointment', $data);
        $profile = $this->medix->get('patient/'.$id);
        //dd($appointment);

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

       return redirect('/home')->with('visit',['type'=> 'success','text' => 'Visit successfully ended!']);

    }

    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | END A VISIT SESSION
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function vaccination()
    {
       
        if (! \Session::has('consult')) {
           return redirect('/home')->with('message',['type'=> 'danger','text' => 'Consultation not yet Started! Please select a patient to be consulted!']);
        }
        
    }
}