<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Guzzle\Http\Client;
use Illuminate\Http\Request;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * HOME PAGE
     */
    public function index()
    {
        if (\Session::has('user')) {
            return view('pages.homePage');
        }
        
        return redirect('');
    }

    /**
     * redirect to dashboard
     */
    public function dashboard()
    {
        return redirect('home');
    }

    /**
     * Patient Records PAGE
     */
    public function patientRecords()
    {
        return view('pages.patientRecordsPage');
    }

    /**
     * SEARCH RESULT
     */
    public function searchResult()
    {
        return view('pages.searchResult');
    }

    /**
     * patientProfile
     */
    public function patientProfile()
    {
        return view('pages.patientProfile');
    }



    /**
     * Fetch patient date
     */
    public function fetchPatientData()
    {
        $http = new Client('https://api.dev.medix.ph/v1/', 
            array(
                'request.options' => array(
                    'exceptions' => false,
            )
        ));

        $request = $http->post('auth', null, array(
            'X-Tenant'      => 'dev',
            'client_id'     => 'pedix',
            'client_secret' => 'dOpOogNqpYkCbOybsflA',
            'grant_type'    => 'client_credentials',
        ));

        // make a request to the token url
        $request->addHeader('X-Tenant', 'dev');
        $response = $request->send();
        $responseBody = $response->getBody(true);
        //dd($responseBody);
        $responseArr = json_decode($responseBody, true);
        $accessToken = $responseArr['access_token'];

        // step2: use the token to make an API request
        $request = $http->get('patient');

        $request->addHeader(array(
                            'X-Tenant'      => 'dev',
                            'Authorization' =>'Bearer '.$accessToken
                        ));
        
        $response1 = $request->send();
        // $response->getBody();
        $responseBody1 = $response1->getBody(true);
        $responseArr1 = json_decode($responseBody1, true);
        $accessToken1 = $responseArr1['patient_id'];
    }

    /**
     * Logout user
     */
    public function logout()
    {
        \Session::forget('user');
        return redirect('/');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
