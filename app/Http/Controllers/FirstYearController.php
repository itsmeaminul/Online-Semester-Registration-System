<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FirstYearController extends Controller
{
    public function year1(){
    	$year1s1_course = DB::table('course_tbl')
    				->where(['course_year'=>1])
    				->where(['course_semester'=>1])
                    ->get();


        $year1s2_course = DB::table('course_tbl')
    				->where(['course_year'=>1])
    				->where(['course_semester'=>2])
                    ->get();



        $manage_course=view('year1')
                         ->with('year1s1_course_info',$year1s1_course)->with('year1s2_course_info',$year1s2_course);


        return view('layouts.app')
                 ->with('layouts.app',$manage_course);

    }


}
