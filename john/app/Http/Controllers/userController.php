<?php

namespace App\Http\Controllers;

use Validator;
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

    public function editAccount()
    {
        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login!']);
        }
        //$account = $this->medix->get('management/accounts/'.$id);
        return view('forms.editAccount');
            //->with('account', $account);
    }

    public function deleteAccount($user_id)
    {

        $deleteAccount = $this->medix->delete('management/accounts/'.$user_id);
        //dd($deleteAccount);

        return redirect()
            ->back()
            ->with('delete',['type'=> 'danger','text' => 'User '.$user_id.' deleted successfully!']);
    }

    public function addAccount(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_type_id'      => 'required|min:1',
            'firstname'         => 'required|min:1',
            'lastname'          => 'required|min:1',
            'middlename'        => 'alpha|min:1',
            'gender'            => 'required',
            'birthdate'         => 'required|date|before:today|date_format:m/d/Y',
            'gender'            => 'required',
        ]);
        //dd($validator->fails());
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->all());
        }
        $user_type_id      = $request->input('user_type_id');
        $firstname         = $request->input('firstname');
        $middlename        = $request->input('middlename');
        $lastname          = $request->input('lastname');
        $gender            = $request->input('gender');
        $birthdate         = $request->input('birthdate');
        $license_number    = $request->input('license_number');
        $ptr_number        = $request->input('ptr_number');
        $s2_license        = $request->input('s2_license');
        $mobile_number     = $request->input('mobile_number');
        $email             = $request->input('email');
        $password          = $request->input('password');
        $specialties_name  = $request->input('specialties_name');

        $data = 
        [   
            'user_type_id'              => $user_type_id,
            'firstname'                 => $firstname,
            'middlename'                => $middlename,
            'lastname'                  => $lastname,
            'gender'                    => $gender,
            'birthdate'                 => $birthdate,
            'mobile_number'             => $mobile_number,
            'email'                     => $email,
            'password'                  => $password,
            'specialties_name'          => $specialties_name,
        ];

        // /dd($data);
        $addAccount = $this->medix->post('management/accounts/', $data);
        //dd($addAccount);

        return redirect()
            ->back()
            ->with('added',['type'=> 'success','text' => 'User '.$firstname.' '.$lastname.' created successfully!']);
    }
}
