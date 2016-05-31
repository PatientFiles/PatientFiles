<?php

namespace App\Http\Controllers;

use Validator;
use Carbon\Carbon;
use App\Http\Requests;
use Guzzle\Http\Client;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePatientRequest;

class patientController extends Controller
{
	protected $medix;
    protected $addError;

	public function __construct()
    {
        $this->middleware('nocache');
        $this->medix = new \App\Medix\Client();
        $this->addError = new CreatePatientRequest();
    }

    /**
     * patientProfile
     */
    public function patientProfile($id)
    {
        if (! \Session::has('fname')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login to view a patient profile!']);
        }

        //$recentCons = $this->medix->get('patient/' . $id .'/consultations/recent');
        $pastCons = $this->medix->get('patient/' . $id .'/consultations/past');
        $pastVitals = $this->medix->get('vitals/patient/' . $id . '/past');
        
        $profile = $this->medix->get('patient/'.$id);
        $address = current((array)$profile->data->user->user_addresses);
        //dd($profile);
        $vitals_date = current((array)$pastVitals->data);
        //dd($vitals_date);
        $vitals = $this->medix->get('patient/' . $id . '/vitals/' . $vitals_date->general->created_at);
        $height =$vitals->data->vitals->general_survey->height * 0.01;

        if ($height == 0) {
            $bmi = 'N/A';
        } else {
            $bmi = round(($vitals->data->vitals->general_survey->weight) / pow($height,2),2);
        }
         
        //dd($bmi);
        //dd($vitals);

        return view('pages.patientProfile')
            ->with('prof', $profile->data)
            ->with('address', $address)
            ->with('consult', $pastCons->data->patient_appointments)
            ->with('vitals', $pastVitals->data)
            ->with('bmi', $bmi)
            ->with('recentVitals', $vitals->data->vitals->general_survey);
    }

    public function saveVitals($id, Request $request)
    {

        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login!']);
        }

        $request->all();

        $height = $request->input('height');
        $weight = $request->input('weight');
        $pulse  = $request->input('pulse');
        $resp   = $request->input('respiratory');
        $temp   = $request->input('temp');
        $sys    = $request->input('sys');
        $dia    = $request->input('dia');
        $mens   = $request->input('mens');
        $notes  = $request->input('notes');

        $data = [
            'height'            => $height,
            'weight'            => $weight,
            'pulserate'         => $pulse,
            'respiratoryrate'   => $resp,
            'bodytemperature'   => $temp,
            'bloodpressure_sys' => $sys,
            'bloodpressure_dia' => $dia,
            'last_menstrual'    => $mens,
            'notes'             => $notes
        ];
        $addVitals = $this->medix->post('patient/'. $id .'/vitals/general_survey', $data);
        //dd($addVitals);

        return redirect('patientProfile/'. $id .'#vitals')->with('success',['type'=> 'success','text' => 'Vitals successfully added']);
    }

    public function addPatient(Request $request)
    {   
        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login!']);
        }

        $validator = Validator::make($request->all(), [
            'fname'         => 'required|min:1',
            'lname'         => 'required|min:1',
            'mname'         => 'alpha|min:1',
            'nickname'      => 'alpha|min:1',
            'bdate'         => 'required|date|before:tomorrow|date_format:m/d/Y',
            'gender'        => 'required',
            'email'         => 'email|min:1',
            'efname'        => 'alpha|min:1',
            'emname'        => 'alpha|min:1',
            'elname'        => 'alpha|min:1',
            'zip_code'      => 'digits:4',
        ]);

        //dd($request->all());
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->all());
        }

        $fname        = $request->input('fname');
        $mname        = $request->input('mname');
        $lname        = $request->input('lname');
        $nickname     = $request->input('nickname');
        $bdate        = $request->input('bdate');
        $religion     = $request->input('religion');
        $gender       = $request->input('gender');
        $govt         = $request->input('govt');
        $govtnum      = $request->input('govtnum');
        $email        = $request->input('email');
        $mobile_num   = $request->input('mobile_num');
        $mobile_type  = $request->input('mobile_type');
        $landline     = $request->input('landline');
        $efname       = $request->input('efname');
        $emname       = $request->input('emname');
        $elname       = $request->input('elname');
        $econtact     = $request->input('econtact');
        $erelation    = $request->input('erelation');
        $street       = $request->input('street');
        $brgy         = $request->input('brgy');
        $city         = $request->input('city');
        $province     = $request->input('province');
        $zip_code     = $request->input('zip_code');

        $data = [
            'firstname'                 => $fname,
            'middlename'                => $mname,
            'lastname'                  => $lname,
            'nickname'                  => $nickname,
            'birthdate'                 => $bdate,
            'civil_status'              => 1,
            'gender'                    => $gender,
            'government_id_type'        => $govt,
            'government_id_number'      => $govtnum,
            'email' => 
                    [
                        0 => $email,
                    ],
            'email_type' => 
                    [
                        0 => 1,
                    ],
            'phone_contact' => [
               0 => [
                       1 => $mobile_num,
                    ]

            ],
            'emergency' => 
            [
                0=>[
                    'emergency_firstname'            => $efname,
                    'emergency_lastname'             => $elname,
                    'emergency_middlename'           => $emname,
                    'emergency_contact_no'           => $econtact,
                    'emergency_contact_relationship' => $erelation,
                   ]

            ],
            'address' => 
            [
                0 =>[
                    'street'            => $street,
                    'address_district'  => $brgy,
                    'address_city'      => $city,
                    'province_id'       => $province,
                    'country'           => 1,
                    'zipcode'           => $zip_code,
                    'address_type'      => 1,
                    'primary'           => 1
                    ]

            ]
        ];
        //dd($data);
        $addPatient = $this->medix->post('patient', $data);
        //dd($addPatient);

        return redirect()->to('/home');
    }
}
