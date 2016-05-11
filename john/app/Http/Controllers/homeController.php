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
   
    /*
    * HOME PAGE
    */
    public function index()
    {
        return view('pages.homePage');
    }



    /*
    * Patient Records PAGE
    */
    public function patientRecords()
    {
        return view('pages.patientRecordsPage');
    }


    /*
    * SEARCH RESULT
    */
    public function searchResult()
    {
        return view('pages.searchResult');
    }

    /*
    * Add NEW PATIENT PAGE
    */
    public function addPatient()
    {
        return view('pages.addPatient');
    }

    /*
    *   patientProfile
    */
    public function patientProfile()
    {
        return view('pages.patientProfile');
    }


    /*
    * DASHBOARD
    */
    public function dashboard(Request $request)
    {
        $request -> all();

        $email = $request -> input('email');
        $pass  = $request -> input('password');

        $http = new Client ('https://api.dev.medix.ph/v1/', 
            array(
                'request.options' => array (
                'exceptions' => false,
            )
        ));

        $request = $http->post ('auth', null, array (
            'X-Tenant'      => 'dev',
            'client_id'     => 'pedix',
            'client_secret' => 'dOpOogNqpYkCbOybsflA',
            'grant_type'    => 'password',
            'username'      =>  $email,
            'password'      =>  $pass,

        ));

        // make a request to the token url
        $request->addHeader('X-Tenant', 'dev');
        $response = $request->send();
        $responseBody = $response->getBody(true);
        //dd($responseBody);
        

        if ($response->getStatusCode() == 200) {
            $responseArr = json_decode($responseBody, true);
            $accessToken = $responseArr['access_token'];
            return redirect('home');
        }

        return redirect('');
    }

    public function logout()
    {
        return redirect('/');
    }

    public function viewProfile()
    {
        return view('pages.patientProfile');
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
