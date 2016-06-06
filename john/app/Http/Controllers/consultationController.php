<?php

namespace App\Http\Controllers;

use App;
use PDF;
use App\Http\Requests;
use Illuminate\Http\Request;


class consultationController extends Controller
{
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
