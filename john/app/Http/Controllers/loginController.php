<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Guzzle\Http\Client;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }



    /**
     * Login using Medix API
     *
     * 
     */
    public function medixAPI(Request $req)
    {
        $req -> all();

        $email = $req -> input('email');
        $pass  = $req -> input('password');

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
