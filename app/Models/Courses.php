<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    public $course = 'mdl_course'; 

    protected $fillable = [
        'id',
        'fullname',
        'idnumber',
        'summary',
    ];
}
