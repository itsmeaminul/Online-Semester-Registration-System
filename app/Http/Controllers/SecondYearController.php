<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SecondYearController extends Controller
{
    public function year2(){
    	$year2s1_course = DB::table('course_tbl')
    				->where(['course_year'=>2])
    				->where(['course_semester'=>1])
                    ->get();


        $year2s2_course = DB::table('course_tbl')
    				->where(['course_year'=>2])
    				->where(['course_semester'=>2])
                    ->get();



        $manage_course=view('year2')
                         ->with('year2s1_course_info',$year2s1_course)->with('year2s2_course_info',$year2s2_course);


        return view('layouts.app')
                 ->with('layouts.app',$manage_course);

    }
}
