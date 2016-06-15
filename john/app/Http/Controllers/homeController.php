<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Http\Requests;
use Guzzle\Http\Client;
use Illuminate\Http\Request;
use App\Http\Models\Vaccine;
use App\Http\Models\Medicine;
use App\Http\Models\Lab;

class homeController extends Controller
{

    protected $medix;
    protected $takes = 10;
    protected $offsets = 0;

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
   
    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | DISPLAY THE HOMPAGE (DASHBOARD)
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function index()
    {

        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login!']);
        }
        
        return $this->recent();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function next()
    {
        $this->takes   += 10;
        $this->offsets += 10;
        return $this->patientRecords();
    }

    public function prev()
    {
        $this->takes -= 10;
        $this->offsets -= 10;
        return $this->patientRecords();
    }

    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | DISPLAY THIS LIST OF PATIENTS
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function patientRecords(Request $req)
    {
        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please login to access Patient Records!']);
        }

        $patients = $this->medix->get('patient?take=1000');
        //dd(date('H:i:s', strtotime(Carbon::now())));
        //dd($patients);
        $mytime = Carbon::now();

        return view('pages.patientRecordsPage')
            ->with('time', $mytime)
            ->with('patients', $patients->data);
    }

    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | CREATE A SEARCH QUERY (ALLOWED TERMS: FIRSTNAME, LASTNAME)
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function searchResult(Request $request)
    {
        $request -> all();
        $search = $request->input('q');

        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login!']);
        }

        $lastname = $this->medix->get('patient?lastname='. $search);
        $firstname = $this->medix->get('patient?firstname='. $search);

        //dd($firstname);

        if ($firstname->data) {
            foreach ($firstname->data as $f) { 
                $fname1 = $f->user->firstname;
                $lname1 = $f->user->lastname;
            } if (strcasecmp($search, $fname1)==0) {
            return view('pages.searchResult')
                ->with('result', $firstname->data)
                ->with('total', count((array)$firstname->data))
                ->with('search', $search);
            }
        } if (empty((array)$firstname->data)) {
            if ($lastname->data){
                foreach ($lastname->data as $l) { 
                    $fname2 = $l->user->firstname;
                    $lname2 = $l->user->lastname;
                } if (strcasecmp($search, $lname2)==0) {
                return view('pages.searchResult')
                    ->with('result', $lastname->data)
                    ->with('total', count((array)$lastname->data))
                    ->with('search', $search);
                }
            } if (empty((array)$lastname->data)){
                return view('pages.searchResult')
                ->with('result', $lastname->data)
                ->with('total', 0 . ' Records')
                ->with('search', $search);
            }
        }

        

        //dd($lastname);

        
    }

    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | DISPLAYS THE INFO OF PATIENT TO EDIT PATIENT FORM
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function editPatient($id)
    {
        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login to view a patient profile!']);
        }

        $profile = $this->medix->get('patient/'.$id);
        //dd($profile);
        return view('forms.editPatient')
            ->with('prof', $profile->data);
    }
    
    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | DISPLAYS THE PAGE FOR SCHEDULER
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function scheduler()
    {
        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login to access scheduler!']);
        }
        return view('pages.schedulerPage');
    }



    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | CREATES THE INFORMATION TO BE DISPLAYED TO THE HOMEPAGE (DASHBOARD)
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function recent()
    {
        $patients = $this->medix->get('patient?take=1000');
        $reports  = $this->medix->get('management/reports');
        //dd($patients);
        $mytime = Carbon::now();

        //dd($count);
        return view('pages.homePage')
            ->with('time', $mytime)
            ->with('counts', $reports->data)
            ->with('consults', $patients->data);
       //return dd($result);
    }

    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | FUNCTIONS FOR LOGGING OUT THE USER
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
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

    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | DISPLAYS THE FORM FOR ADDING NEW PATIENT
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function register()
    {
        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login!']);
        }
        return view('forms.patientRegister');
    }

    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | DISPLAYS AN ERROR 404 PAGE IF AN UNEXPECTED EXCEPTIONS OCCUR
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function error()
    {
        return view('pages.errorPage');
    }
}
