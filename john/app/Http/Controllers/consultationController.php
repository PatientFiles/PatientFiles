<?php

namespace App\Http\Controllers;

use App;
use App\Http\Requests;
use Illuminate\Http\Request;


class consultationController extends Controller
{
   public function createPrescription()
   {
   		//$pdf = \PDF::loadView('forms.patientRegister');
		//return $pdf->stream();
		$pdf = App::make('dompdf.wrapper');
		$pdf->loadHTML('<h1>Test</h1>');
		return $pdf->stream();
	}
}
