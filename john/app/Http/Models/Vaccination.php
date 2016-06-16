<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    //

    protected $guarded = ['id'];
    protected $table = 'Vaccination';

    public function vaccine()
    {
        return $this->belongsTo('App\Http\Models\Vaccine', 'vaccine_id');
    }
}
