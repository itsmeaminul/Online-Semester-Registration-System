<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ForthYearController extends Controller
{
    public function year4(){
    	$year4s1_course = DB::table('course_tbl')
    				->where(['course_year'=>4])
    				->where(['course_semester'=>1])
                    ->get();


        $year4s2_course = DB::table('course_tbl')
    				->where(['course_year'=>4])
    				->where(['course_semester'=>2])
                    ->get();



        $manage_course=view('year4')
                         ->with('year4s1_course_info',$year4s1_course)->with('year4s2_course_info',$year4s2_course);


        return view('layouts.app')
                 ->with('layouts.app',$manage_course);
    }
}
