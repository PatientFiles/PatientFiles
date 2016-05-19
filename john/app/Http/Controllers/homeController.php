<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Http\Requests;
use Guzzle\Http\Client;
use Illuminate\Http\Request;

class homeController extends Controller
{

    protected $medix;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('nocache');
        $this->medix = new \App\Medix\Client();
    }
   
    /**
     * HOME PAGE
     */
    public function index()
    {

        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login!']);
        }
        
        return view('pages.homePage');
    }


    /**
     * Patient Records PAGE
     */
    public function patientRecords()
    {
        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please login to access Patient Records!']);
        }

        $patients = $this->medix->get('patient');
        $mytime = Carbon::now();
        dd

        return view('pages.patientRecordsPage')
            ->with('time', $mytime)
            ->with('patients', $patients->data);
    }

    /**
     * SEARCH RESULT
     */
    public function searchResult()
    {
        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login!']);
        }
        
        $patients = $this->medix->get('patient');

        return view('pages.searchResult')
            ->with('search', $patients->data);
    }

    /**
     * patientProfile
     */
    public function patientProfile($id)
    {
        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login to view a patient profile!']);
        }
        $profile = $this->medix->get('patient/'.$id);


        return view('pages.patientProfile')
            ->with('prof', $profile->data);
    }

    /**
     * scheduler
     */
    public function scheduler()
    {
        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login to access scheduler!']);
        }
        return view('pages.schedulerPage');
    }



    /**
     * Fetch patient date
     */
    public function recent()
    {
        $patients = $this->medix->get('patient');

        return view('pages.homePage')
            ->with('time', $mytime)
            ->with('consults', $patients->data);
       //return dd($result);
    }

    /**
     * Logout user
     */
    public function logout()
    {
        \Session::forget('user_id');
        \Session::forget('fname');
        \Session::forget('lname');
        \Session::forget('role');
        \Session::forget('prc');
        \Session::forget('ptr');
        \Session::forget('license');
        \Session::forget('token');
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login!']);
        }
        return view('pages.patientRegister');
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
