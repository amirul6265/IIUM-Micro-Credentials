<?php

namespace App\Http\Controllers;
use App\Models\AddModel;
use Illuminate\Http\Request;

class AddController extends Controller
{   

    function add(Request $request)
    {
        $addmodel = new AddModel;
        $addmodel->userid=$request->input('userid');
        $addmodel->enrolid=$request->input('enrolid');
        $result=$addmodel->save();
        if($result)
        {
            echo '<script>alert("Successfully enroll")</script>';
            return View("bcscourse");
        }
        else{
            return ["Failed Enrolled"];
        }
        
    }
    
}
