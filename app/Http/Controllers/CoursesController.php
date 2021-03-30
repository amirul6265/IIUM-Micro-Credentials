<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use Illuminate\Support\Facades\DB;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = DB::table('mdl_course')
        ->select('id', 'category','summary','fullname','shortname')
        ->get();
        
        return response()->json($course);
    }

    function view()
    {    $course = DB::table('mdl_course')
            ->select('id', 'category','summary','fullname','shortname')
            ->get();        
        return view('bcscourse', ['course' => $course]);
    }

    /* KICT */

    function bcsview()
    {    $course = DB::table('mdl_course')
            ->join('mdl_course_categories', 'mdl_course.category', '=', 'mdl_course_categories.id')
            ->join('course_image', 'mdl_course.id', '=', 'course_image.courseid')
            ->select('mdl_course.id', 'mdl_course.category','mdl_course.summary','mdl_course.fullname','mdl_course.idnumber', 'course_image.imagesrc')
            ->where('category','=','4')
            ->get();
            $programme = DB::table('mdl_course_categories')
            ->select('description')->where('name','=','bcs')
            ->get();         
        return view('course', ['course' => $course])->with('programme', $programme);
    }

    function bitview()
    {    $course = DB::table('mdl_course')
            ->join('mdl_course_categories', 'mdl_course.category', '=', 'mdl_course_categories.id')
            ->join('course_image', 'mdl_course.id', '=', 'course_image.courseid')
            ->select('mdl_course.id', 'mdl_course.category','mdl_course.summary','mdl_course.fullname','mdl_course.idnumber', 'course_image.imagesrc')
            ->where('category','=','5')
            ->get();        
            $programme = DB::table('mdl_course_categories')
            ->select('description')->where('name','=','bit')
            ->get();         
        return view('course', ['course' => $course])->with('programme', $programme);
    }

    /* KOE */

    function btenview()
    {    $course = DB::table('mdl_course')
            ->join('mdl_course_categories', 'mdl_course.category', '=', 'mdl_course_categories.id')
            ->join('course_image', 'mdl_course.id', '=', 'course_image.courseid')
            ->select('mdl_course.id', 'mdl_course.category','mdl_course.summary','mdl_course.fullname','mdl_course.idnumber', 'course_image.imagesrc')
            ->where('category','=','6')
            ->get();        
            $programme = DB::table('mdl_course_categories')
            ->select('description')->where('name','=','bten')
            ->get();         
        return view('course', ['course' => $course])->with('programme', $programme);
    }

    function mechview()
    {    $course = DB::table('mdl_course')
            ->join('mdl_course_categories', 'mdl_course.category', '=', 'mdl_course_categories.id')
            ->join('course_image', 'mdl_course.id', '=', 'course_image.courseid')
            ->select('mdl_course.id', 'mdl_course.category','mdl_course.summary','mdl_course.fullname','mdl_course.idnumber', 'course_image.imagesrc')
            ->where('category','=','7')
            ->get();        
            $programme = DB::table('mdl_course_categories')
            ->select('description')->where('name','=','mech')
            ->get();         
        return view('course', ['course' => $course])->with('programme', $programme);
    }

    function mcteview()
    {    $course = DB::table('mdl_course')
            ->join('mdl_course_categories', 'mdl_course.category', '=', 'mdl_course_categories.id')
            ->join('course_image', 'mdl_course.id', '=', 'course_image.courseid')
            ->select('mdl_course.id', 'mdl_course.category','mdl_course.summary','mdl_course.fullname','mdl_course.idnumber', 'course_image.imagesrc')
            ->where('category','=','8')
            ->get();        
            $programme = DB::table('mdl_course_categories')
            ->select('description')->where('name','=','mcte')
            ->get();         
        return view('course', ['course' => $course])->with('programme', $programme);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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
