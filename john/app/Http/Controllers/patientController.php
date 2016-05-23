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
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login to view a patient profile!']);
        }

        $recentCons = $this->medix->get('patient/' . $id .'/consultations/recent');
        $pastCons = $this->medix->get('patient/' . $id .'/consultations/past');
        $pastVitals = $this->medix->get('vitals/patient/' . $id . '/past');
        //dd($pastVitals);
        $profile = $this->medix->get('patient/'.$id);
        $address = current((array)$profile->data->user->user_addresses);
        //dd($profile);
        $vitals_date = current((array)$pastVitals->data);
        //dd($vitals_date);
        $vitals = $this->medix->get('patient/' . $id . '/vitals/' . $vitals_date->general->created_at);
        $height =$vitals->data->vitals->general_survey->height * 0.01;

        if ($height == 0) {
            $bmi = 'N/A';
        }else {$bmi = round(($vitals->data->vitals->general_survey->weight) / pow($height,2),2);}
        
        //dd($bmi);
        //dd($vitals);

        return view('pages.patientProfile')
            ->with('prof', $profile->data)
            ->with('recentCons', $recentCons->data)
            ->with('address', $address)
            ->with('pastCons', $recentCons->data)
            ->with('vitals', $pastVitals->data)
            ->with('bmi', $bmi)
            ->with('recentVitals', $vitals->data->vitals->general_survey);
    }
}
