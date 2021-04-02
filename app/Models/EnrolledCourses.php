<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mdl_user_enrolments extends Model
{
    protected $primaryKey = 'userid';
    public $table = "mdl_user_enrolments";
    public $timestamps = false;
    public $fillable = [
		'userid','enrolid',
	];
}

