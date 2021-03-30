<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MoodleController extends Controller
{
    function course()
    {
        $course = DB::table('mdl_course')
                    ->select('id', 'category','summary','fullname','shortname')
                    ->get();
        
        return view('course2', ['courses' => $course]);
    }


}
