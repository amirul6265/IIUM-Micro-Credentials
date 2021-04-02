<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EnrolledCoursesController extends Controller
{
    protected function showCourseEnrolled(Request $request)
    {  
        $getmatricnumber = Auth::user()->username; 
        $coursesenrolled = DB::table('mdl_user')
            ->join('mdl_user_enrolments', 'mdl_user.id', '=', 'mdl_user_enrolments.userid')
            ->join('mdl_enrol', 'mdl_user_enrolments.enrolid', '=', 'mdl_enrol.id')
            ->join('mdl_course', 'mdl_enrol.courseid', '=', 'mdl_course.id')
            ->select('mdl_course.fullname', 'mdl_course.idnumber')
            ->where('mdl_user.username','=', $getmatricnumber)
            ->get();
        return view('enrolledcourses') //blade_name
        ->with('coursesenrolled', $coursesenrolled);
    }
}
