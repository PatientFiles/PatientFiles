<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Http\Requests;
use Guzzle\Http\Client;
use Illuminate\Http\Request;

class userController extends Controller
{
    protected $medix;

    public function __construct()
    {
        $this->middleware('nocache');
        $this->medix = new \App\Medix\Client();
    }
    
    public function accounts()
    {
        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login to access User Accounts!']);
        }

        $users = $this->medix->get('management/accounts?limit=200');
        //dd($users);
        return view('pages.pediatricians')
        		->with('users', $users->data->accounts)
        		->with('user_types', $users->data->user_types);

    }
}
