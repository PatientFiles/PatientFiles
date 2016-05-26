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
            'fname'         => 'required|min:1',
            'lname'         => 'required|min:1',
            'mname'         => 'alpha|min:1',
            'nickname'      => 'alpha|min:1',
            'bdate'         => 'required|date|before:today|date_format:m/d/Y',
            'civil_status'  => 'required',
            'gender'        => 'required',
            'email'         => 'email|min:1',
            'efname'        => 'alpha|min:1',
            'emname'        => 'alpha|min:1',
            'elname'        => 'alpha|min:1',
            'zip_code'      => 'digits:4',
        ];
    }
}
