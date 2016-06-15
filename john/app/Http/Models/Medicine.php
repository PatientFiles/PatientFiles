<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medicine extends Model
{
	use SoftDeletes;
    //
    protected $guarded = ['id'];
    protected $table   = 'medicine';
    protected $dates   = ['deleted_at'];
}
