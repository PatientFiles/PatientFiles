<?php

namespace App\Http\Controllers;

use Validator;
use Carbon\Carbon;
use App\Http\Models\Lab;
use App\Http\Requests;
use App\Http\Models\Vaccine;
use App\Http\Models\Vaccination;
use App\Http\Models\Labrequest;
use App\Http\Models\Diagnosis;
use App\Http\Models\Prescription;
use Guzzle\Http\Client;
use App\Http\Models\Medicine;
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


    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | DISPLAYs THE PATIENT'S PROFILE
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function patientProfile($id)
    {
        if (! \Session::has('fname')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login to view a patient profile!']);
        }

        try {
            /***RETRIVES PAST CONSULTATIONS***/
            $cons        = $this->medix->get('patient/' . $id .'/consultations/past');
            $pastCons    = $cons->data->patient_appointments;

            /***RETRIVES PAST VITALS***/
            $past         = $this->medix->get('vitals/patient/' . $id . '/past');
            $vitals_date  = current((array)$past->data);
            $rVitals      = $this->medix->get('patient/' . $id . '/vitals/' . $vitals_date->general->created_at);
            $height       = $rVitals->data->vitals->general_survey->height * 0.01;

            if ($height == 0) {
                $bmi = 'N/A';
            } else {
                $bmi = round(($rVitals->data->vitals->general_survey->weight) / pow($height,2),2);
            }

            $vitals      = $rVitals->data->vitals->general_survey;
            $pastVitals  = $past->data;

        } catch (\Exception $e) {

            try {

            $pastCons    = null;

            $past         = $this->medix->get('vitals/patient/' . $id . '/past');
            $vitals_date  = current((array)$past->data);
            $rVitals      = $this->medix->get('patient/' . $id . '/vitals/' . $vitals_date->general->created_at);
            $height       = $rVitals->data->vitals->general_survey->height * 0.01;

                if ($height == 0) {
                    $bmi = 'N/A';
                } else {
                    $bmi = round(($rVitals->data->vitals->general_survey->weight) / pow($height,2),2);
                }

            $vitals      = $rVitals->data->vitals->general_survey;
            $pastVitals  = $past->data;

            } catch (\Exception $e) {

                try{
                    $cons        = $this->medix->get('patient/' . $id .'/consultations/past');
                    $pastCons    = $cons->data->patient_appointments;

                    $pastVitals = null;
                    $bmi        = 'N/A';
                    $vitals     = null;

                } catch (\Exception $e) {
                    //dd($e);
                    $pastCons   = null;
                    $pastVitals = null;
                    $bmi        = 'N/A';
                    $vitals     = null;
                }
            }
           
        }

        $profile = $this->medix->get('patient/'.$id);
        // dd($profile);
        return view('pages.patientProfile')
            ->with('prof', $profile->data)
            ->with('consult', $pastCons)
            ->with('vitals', $pastVitals)
            ->with('bmi', $bmi)
            ->with('recentVitals', $vitals);

    }


    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | FUNCTION FOR ADDING VITALS OF A PATIENT WITH CONSULTATION AND VITALS HISTORY
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function saveVitals($id, Request $request)
    {

        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login!']);
        }

        $request->all();
        $validator = Validator::make($request->all(), [
            'height'        => 'max:3|min:1',
            'weight'        => 'max:3|min:1',
            'pulse'         => 'max:3|min:1',
            'respiratory'   => 'max:3|min:1',
            'temp'          => 'max:2|min:1',
            'sys'           => 'max:3|min:1',
            'dia'           => 'max:3|min:1',
            'mens'          => 'date|before:tomorrow|date_format:Y-m-d',
        ]);
        if($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput($request->all());
        }

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

        return redirect('consultation/'. $id .'#vitals')->with('success',['type'=> 'success','text' => 'Vitals successfully added']);

    }


    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | FUNCTION FOR ADDING OF NEW PATIENT
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function addPatient(Request $request)
    {   
        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login!']);
        }

        $validator = Validator::make($request->all(), [
            'fname'         => 'required|min:1',
            'lname'         => 'required|min:1',
            'mname'         => 'min:1',
            'nickname'      => 'min:1',
            'bdate'         => 'required|date|before:tomorrow|date_format:Y-m-d',
            'gender'        => 'required',
            'email'         => 'email|min:1',
            'efname'        => 'min:1',
            'emname'        => 'min:1',
            'elname'        => 'min:1',
            'zip_code'      => 'digits:4',
        ]);

        //dd($validator->fails());
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

        return redirect()->to('/patientRecords')
            ->with('message',['type'=> 'success','text' => 'Patient successfully added!']);

    }

        /*---------------------------------------------------------------------------------------------------------------------------------------------
    | FUNCTION FOR ADDING OF NEW PATIENT
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function editPatient(Request $request)
    {   
        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login!']);
        }

        $validator = Validator::make($request->all(), [
            'fname'         => 'required|min:1',
            'lname'         => 'required|min:1',
            'mname'         => 'min:1',
            'nickname'      => 'min:1',
            'bdate'         => 'required|date|before:tomorrow|date_format:m/d/Y',
            'gender'        => 'required',
            'email'         => 'email|min:1',
            'efname'        => 'min:1',
            'emname'        => 'min:1',
            'elname'        => 'min:1',
            'zip_code'      => 'digits:4',
        ]);

        //dd($request->all());
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->all());
        }
        $id           = $request->input('patient_id');
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
        $addPatient = $this->medix->put('patient/'.$id , $data);
        //dd($addPatient);

        return redirect()->back()
            ->with('message',['type'=> 'success','text' => 'Patient successfully edited!']);

    }


    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | DISPLAYS THE PAGE FOR THE MAIN CONSULTATION PROCESS
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function newConsult($id)
    {
        if (! \Session::get('consult') == $id) {
            return redirect('/home')->with('message',['type'=> 'danger','text' => 'Consultation not yet Started! Please select a patient to be consulted!']);
        }
         if (! \Session::has('token')) {
            return redirect('/home')->with('message',['type'=> 'danger','text' => 'Consultation not yet Started! Please select a patient to be consulted!']);
        } 

        $profile        = $this->medix->get('patient/'.$id);
        $address        = $profile->data->user->user_addresses;
        $medicine       = Medicine::all()->sortBy('medicine_name');
        $vaccine        = Vaccine::all()->sortBy('vaccine_name');
        $lab            = Lab::all()->sortBy('lab_name');
        $vaccination    = Vaccination::with('vaccine')
                            ->where('appointment_id', \Session::get('appoint'));

        return  view('pages.consultation')
                ->with('prof', $profile->data)
                ->with('medicine', $medicine)
                ->with('address', $address)
                ->with('vaccine', $vaccine)
                ->with('lab', $lab);
    }

}
