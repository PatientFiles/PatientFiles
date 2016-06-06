<?php

namespace App\Http\Controllers;

use Knp\Snappy\Pdf;
use App\Http\Requests;
use Illuminate\Http\Request;


class consultationController extends Controller
{
   public function createPrescription()
   {
   		$snappy = new Pdf(base_path('vendor\h4cc\wkhtmltoimage-i386\bin\wkhtmltopdf-i368'));
   		header('Content-Type: application/pdf');
		header('Content-Disposition: attachment; filename="file.pdf"');
		$snappy->generateFromHtml('<h1>Bill</h1><p>You owe me money, dude.</p>', '/tmp/bill-123.pdf');
	}
}
