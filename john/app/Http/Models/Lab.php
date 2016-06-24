<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    //
    protected $guarded = ['id'];
    protected $table = 'lab';


    public function labrequest()
    {
        return $this->hasMany('App\Http\Models\Labrequest', 'lab_id');
    }
}
