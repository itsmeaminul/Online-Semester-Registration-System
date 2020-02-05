<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class SemesterRegistrationController extends Controller
{

	//semester Registration regular
    public function semester_registration(){
        return view('registration_regular');
    }

    public function registration($std_id){
        $student_info_view = DB::table('users')
                            ->join('regular_reg', 'users.std_id', '=', 'regular_reg.std_reg_id')
                            ->select('*')
                            ->where('regular_reg.std_reg_id',$std_id)
                            ->get();

    	return view('registration', compact('student_info_view'));
    }


    public function view_regular($std_id){
        $student_info_view = DB::table('users')
                            ->join('regular_reg', 'users.std_id', '=', 'regular_reg.std_reg_id')
                            ->select('*')
                            ->where('regular_reg.std_reg_id',$std_id)
                            ->get();


        $year1s1_course = DB::table('course_tbl')
                    ->where(['course_year'=>1])
                    ->where(['course_semester'=>1])
                    ->get();

        $year1s2_course = DB::table('course_tbl')
                    ->where(['course_year'=>1])
                    ->where(['course_semester'=>2])
                    ->get();

        $year2s1_course = DB::table('course_tbl')
                    ->where(['course_year'=>2])
                    ->where(['course_semester'=>1])
                    ->get();

        $year2s2_course = DB::table('course_tbl')
                    ->where(['course_year'=>2])
                    ->where(['course_semester'=>2])
                    ->get();

        $year3s1_course = DB::table('course_tbl')
                    ->where(['course_year'=>3])
                    ->where(['course_semester'=>1])
                    ->get();

        $year3s2_course = DB::table('course_tbl')
                    ->where(['course_year'=>3])
                    ->where(['course_semester'=>2])
                    ->get();

        $year4s1_course = DB::table('course_tbl')
                    ->where(['course_year'=>4])
                    ->where(['course_semester'=>1])
                    ->get();
                    
        $year4s2_course = DB::table('course_tbl')
                    ->where(['course_year'=>4])
                    ->where(['course_semester'=>2])
                    ->get();


        return view('view_regular', compact('student_info_view','year1s1_course','year1s2_course','year2s1_course','year2s2_course','year3s1_course','year3s2_course','year4s1_course','year4s2_course'));


    }


    public function save_regular(Request $request){
        

        $data=array();
        $data['std_reg_id'] = $request->std_reg_id;
        $data['std_name_ban'] = $request->std_name_ban;
        $data['exam_year'] = $request->exam_year;
        $data['std_year'] = $request->std_year;
        $data['std_semester'] = $request->std_semester;
        $data['std_guardian'] = $request->std_guardian;
        $data['std_present_add'] = $request->std_present_add;
        $data['std_permanent_add'] = $request->std_permanent_add;
        $data['pre_exam_year'] = $request->pre_exam_year;
        $data['pre_exam_semester'] = $request->pre_exam_semester;
        $data['pre_passing_year'] = $request->pre_passing_year;
        $data['pre_semester_gpa'] = $request->pre_semester_gpa;
        $data['pre_semester_cgpa'] = $request->pre_semester_cgpa;


        DB::table('regular_reg')->insert($data);
        Session::put('exception','Registration Completed Successfully!!');
        return Redirect::to('/');

    }


}


