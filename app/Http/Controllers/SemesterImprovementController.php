<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class SemesterImprovementController extends Controller
{

     //semester Registration improvement
    public function semester_registration_improve(){
        return view('registration_improvement');
    }


    public function improve($std_id){
        $student_info_view = DB::table('users')
                            ->join('improve_reg', 'users.std_id', '=', 'improve_reg.std_imp_id')
                            ->select('*')
                            ->where('improve_reg.std_imp_id',$std_id)
                            ->get();

        return view('improvement', compact('student_info_view'));
    }

    public function view_improve($std_id){
        $student_info_view = DB::table('users')
                            ->join('improve_reg', 'users.std_id', '=', 'improve_reg.std_imp_id')
                            ->select('*')
                            ->where('improve_reg.std_imp_id',$std_id)
                            ->get();

        // return view('view_improvement', compact('student_info_view'));
        return view('view_improvement', compact('student_info_view'));
    }


    public function save_improve(Request $request){
        

        $data=array();
        $data['std_imp_id'] = $request->std_imp_id;
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
        $data['imp_course_code1'] = $request->imp_course_code1;
        $data['imp_course_code2'] = $request->imp_course_code2;
        $data['imp_course_code3'] = $request->imp_course_code3;
        $data['imp_course_code4'] = $request->imp_course_code4;
        $data['imp_course_code5'] = $request->imp_course_code5;
        $data['imp_course_title1'] = $request->imp_course_title1;
        $data['imp_course_title2'] = $request->imp_course_title2;
        $data['imp_course_title3'] = $request->imp_course_title3;
        $data['imp_course_title4'] = $request->imp_course_title4;
        $data['imp_course_title5'] = $request->imp_course_title5;


        DB::table('improve_reg')->insert($data);
        Session::put('exception','Registration Completed Successfully!!');
        return Redirect::to('/');

    }

}


