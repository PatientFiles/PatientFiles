<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePatientRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fname'    => 'required|min:3',
            'lname'     => 'required|min:3',
            'mname'   => 'alpha|min:3',
            'nickname'         => 'alpha|min:3',
            'bdate'      => 'required|date|before:today|date_format:m/d/Y',
            'civil_status'    => 'required',
            'gender'    => 'required',
            'email'    => 'email|min:3',
            'efname'    => 'alpha|min:3',
            'emname'    => 'alpha|min:3',
            'elname'    => 'alpha|min:3',
            'street'    => 'alpha_dash|min:3',
            'brgy'    => 'alpha_dash|min:3',
            'city'    => 'alpha_dash|min:3',
            'province'    => 'alpha_dash|min:3',
            'zip_code'    => 'digits:4',
        ];
    }
}
