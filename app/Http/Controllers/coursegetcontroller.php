<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class coursegetcontroller extends Controller
{
    public function index()
    {
        return Courses::all();//
    }//
}
