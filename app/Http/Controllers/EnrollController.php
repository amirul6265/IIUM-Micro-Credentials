<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Courses;

class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = DB::table('mdl_course')
        ->join('course_image', 'mdl_course.id', '=', 'course_image.courseid')
        ->select('mdl_course.id','mdl_course.fullname','mdl_course.idnumber','mdl_course.summary','mdl_course.startdate','mdl_course.enddate', 'course_image.imagesrc')
        ->where('mdl_course.id','=','3')
        ->get();
        return response()->json($course);
    }

    function view()
    {    $course = DB::table('mdl_course')
        ->join('course_image', 'mdl_course.id', '=', 'course_image.courseid')
        ->select('mdl_course.id','mdl_course.fullname','mdl_course.idnumber','mdl_course.summary','mdl_course.startdate','mdl_course.enddate', 'course_image.imagesrc')
        ->where('mdl_course.id','=', Courses::course()->id)
        ->get();
        return view('enroll', ['course' => $course]);
    }

    function osview()
    {    $course = DB::table('mdl_course')
        ->join('course_image', 'mdl_course.id', '=', 'course_image.courseid')
        ->select('mdl_course.id','mdl_course.fullname','mdl_course.idnumber','mdl_course.summary','mdl_course.startdate','mdl_course.enddate', 'course_image.imagesrc')
        ->where('mdl_course.id','=','3')
        ->get();
        return view('enroll', ['course' => $course]);
    }

    function dsview()
    {    $course = DB::table('mdl_course')
        ->join('course_image', 'mdl_course.id', '=', 'course_image.courseid')
        ->select('mdl_course.id','mdl_course.fullname','mdl_course.idnumber','mdl_course.summary','mdl_course.startdate','mdl_course.enddate', 'course_image.imagesrc')
        ->where('mdl_course.id','=','4')
        ->get();
        return view('enroll', ['course' => $course]);
    }

    function mlview()
    {    $course = DB::table('mdl_course')
        ->join('course_image', 'mdl_course.id', '=', 'course_image.courseid')
        ->select('mdl_course.id','mdl_course.fullname','mdl_course.idnumber','mdl_course.summary','mdl_course.startdate','mdl_course.enddate', 'course_image.imagesrc')
        ->where('mdl_course.id','=','5')
        ->get();
        return view('enroll', ['course' => $course]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
