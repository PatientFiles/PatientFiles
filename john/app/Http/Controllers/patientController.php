<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Http\Requests;
use Guzzle\Http\Client;
use Illuminate\Http\Request;

class patientController extends Controller
{
	protected $medix;

	public function __construct()
    {
        $this->middleware('nocache');
        $this->medix = new \App\Medix\Client();
    }

    /**
     * patientProfile
     */
    public function patientProfile($id)
    {
        if (! \Session::has('token')) {
            return redirect('');
        }
        $profile = $this->medix->get('patient/'.$id);

        
        return view('pages.patientProfile')
            ->with('prof', $profile->data);
    }
}
