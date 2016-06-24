<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Labrequest extends Model
{
    //
    protected $guarded = ['id'];
    protected $table = 'lab_request';

    public function lab()
    {
        return $this->belongsTo('App\Http\Models\Lab', 'lab_id');
    }
}
