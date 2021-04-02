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
        $programmetitle = DB::table('mdl_course_categories')
            ->select('description')
            ->where('name','=', $data_categoryname)
            ->get();    
        $course = DB::table('mdl_course')
            ->join('mdl_course_categories', 'mdl_course.category', '=', 'mdl_course_categories.id')
            ->join('course_image', 'mdl_course.id', '=', 'course_image.courseid')
            ->select('mdl_course.id', 'mdl_course.category','mdl_course.summary','mdl_course.fullname','mdl_course.idnumber', 'course_image.imagesrc', 'mdl_course_categories.name')
            ->where('category','=', $data_categorynumber)
            ->get();     
        return view('course', ['course' => $course])
            ->with('programmetitle', $programmetitle);
    }

    function allview()
    {    $course = DB::table('mdl_course')
            ->join('mdl_course_categories', 'mdl_course.category', '=', 'mdl_course_categories.id')
            ->join('course_image', 'mdl_course.id', '=', 'course_image.courseid')
            ->select('mdl_course.id', 'mdl_course.category','mdl_course.summary','mdl_course.fullname','mdl_course.idnumber', 'course_image.imagesrc')
            ->get();       
        return view('allcourses', ['course' => $course]);
    }
    
    function eachcoursesview($data_categoryname, $data_categorynumber)
    {
        $programmetitle = DB::table('mdl_course_categories')
            ->select('description')
            ->where('name','=', $data_categoryname)
            ->get();    
        $course = DB::table('mdl_course')
            ->join('mdl_course_categories', 'mdl_course.category', '=', 'mdl_course_categories.id')
            ->join('course_image', 'mdl_course.id', '=', 'course_image.courseid')
            ->select('mdl_course.id', 'mdl_course.category','mdl_course.summary','mdl_course.fullname','mdl_course.idnumber', 'course_image.imagesrc', 'mdl_course_categories.name')
            ->where('category','=', $data_categorynumber)
            ->get();     
        return view('course', ['course' => $course])
            ->with('programmetitle', $programmetitle);
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
