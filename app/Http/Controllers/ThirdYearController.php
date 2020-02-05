<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ThirdYearController extends Controller
{
    public function year3(){
    	$year3s1_course = DB::table('course_tbl')
    				->where(['course_year'=>3])
    				->where(['course_semester'=>1])
                    ->get();


        $year3s2_course = DB::table('course_tbl')
    				->where(['course_year'=>3])
    				->where(['course_semester'=>2])
                    ->get();



        $manage_course=view('year3')
                         ->with('year3s1_course_info',$year3s1_course)->with('year3s2_course_info',$year3s2_course);


        return view('layouts.app')
                 ->with('layouts.app',$manage_course);
    }
}
