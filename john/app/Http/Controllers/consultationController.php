<?php

namespace App\Http\Controllers;

use App;
use PDF;
use App\Http\Requests;
use Illuminate\Http\Request;


class consultationController extends Controller
{
	protected $medix;

	public function __construct()
    {
        $this->middleware('nocache');
        $this->medix = new \App\Medix\Client();
    }

	/*---------------------------------------------------------------------------------------------------------------------------------------------
	| CREATE AN APPOINTMENT
	|----------------------------------------------------------------------------------------------------------------------------------------------
	|
	*/
	public function appointmentForNewPatient(Request $req)
	{
		if (! \Session::has('fname')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login to view a patient profile!']);
        }

        $request 			= $req->only('chief_complaints', 'patient_id');
        $id 				= $request->input('chief_complaints');
        $chief_complaints 	= $request->input('chief_complaints');

        $data =
        [
        	'patient_id' 		= $id,
        	'appointment_date'	= date('Y-m-d', strtotime(Carbon::now()->setTimezone('GMT+8'))),
        	'appointment_time'	= date('H:i:s', strtotime(Carbon::now()->setTimezone('GMT+8'))),
        	'purpose_id'		= 1,
        	'chief_complaints'	= $chief_complaints,
        ]
		$appointment = $this->medix->get('appointment');

		return reedirect('consultation/{id}');
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
}
