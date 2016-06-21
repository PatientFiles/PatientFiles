<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    //
    protected $guarded = ['id'];
    protected $table = 'vaccine';

    public function vaccination()
    {
        return $this->hasMany('App\Http\Models\Vaccination', 'vaccine_id');
    }
}
