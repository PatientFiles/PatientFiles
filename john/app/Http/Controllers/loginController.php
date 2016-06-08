<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Guzzle\Http\Client;
use Illuminate\Http\Request;

class loginController extends Controller
{

    protected $medix;

    public function __construct()
    {
        $this->middleware('nocache');
        $this->medix = new \App\Medix\Client();
    }
    
    
    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | DISPLAYS THE LOGIN PAGE
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function index()
    {
        if (! \Session::has('token')) {
            return view('login');
        }
        return redirect('home');

    }//--------------------------------------------------------------------------------------------------------------------------------------------


    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | LOGIN FUNCTIONS USING THE DEV.MEDIX.PH API USING OAUTH2 PASSWORD CREDENTIALS
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function medixAPI(Request $req)
    {
        $req -> all();

        $email = $req->input('email');
        $pass  = $req->input('password');

        $data = [
            'username'  => $email,
            'password'  => $pass
        ];

        $auth = $this->medix->auth($data);

        if (! $auth->access_token) {
             return redirect('login')->with('message',['type'=> 'danger','text' => 'Incorrect Email or Password']);
        }

        //dd($auth);

        // Store Token to Session
        \Session::put('token', $auth->access_token);

        // GET User Information
        $user = $this->medix->post('auth/info');
        //dd($user);
        \Session::put('user_id', $user->data->user_info->id);
        \Session::put('fname', $user->data->user_info->firstname);
        \Session::put('mname', $user->data->user_info->middlename);
        \Session::put('lname', $user->data->user_info->lastname);
        \Session::put('bday', $user->data->user_info->birthdate);
        \Session::put('gender', $user->data->user_info->gender);
        \Session::put('role', $user->data->user_info->role);
        \Session::put('prc', $user->data->role_info->prc);
        \Session::put('ptr', $user->data->role_info->ptr);
        \Session::put('license', $user->data->role_info->s2_license);

        return redirect('home');

    }//--------------------------------------------------------------------------------------------------------------------------------------------

}
