<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    //
    protected $guarded = ['id'];
    protected $table   = 'prescription';


    public function prescription()
    {
        return $this->belongsTo('App\Http\Models\Medicine', 'medicine_id');
    }

}
