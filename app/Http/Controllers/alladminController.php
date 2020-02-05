<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class alladminController extends Controller
{
    public function all_student(){
        $all_student = DB::table('users')
                    ->get();

        $manage_student=view('admin.all_student')
                         ->with('student_info',$all_student);

        return view('layouts.admin_layout')
                 ->with('layouts.admin_layout',$manage_student);
    }


    //student delete method
    public function student_delete($std_id){
        DB::table('users')
            ->where('std_id',$std_id)
            ->delete();

            return Redirect::to('/all_student');
        
    }

    //student view method
    public function student_view($std_id){
        $student_info_view = DB::table('users')
                                ->select('*')
                                ->where('std_id',$std_id)
                                ->first();

        // echo "</pre>";
        // print_r($student_info_view);

        $manage_student_info=view('admin.student_view')
                         ->with('view_student_info',$student_info_view);

        return view('layouts.admin_layout')
                 ->with('admin.student_view',$manage_student_info);
        
    }


    //admin view method
    public function admin_view($admin_email){
        $admin_info_view = DB::table('admin_tbl')
                                ->select('*')
                                ->where('admin_email',$admin_email)
                                ->first();

        $manage_admin_info=view('admin.dashboard')
                         ->with('view_admin_info',$admin_info_view);

        return view('layouts.admin_layout')
                 ->with('admin.dashboard',$manage_admin_info);
        
    }



    public function add_student(){
    	return view('admin.add_student');
    }

    public function edit_student(){
    	return view('admin.edit_student');
    }

    // regular student registration
    public function regular(){
        $y1s1_student = DB::table('users')
                        ->join('regular_reg', 'users.std_id', '=', 'regular_reg.std_reg_id')
                        ->select('*')
                        ->where(['regular_reg.std_year'=>1])
                        ->where(['regular_reg.std_semester'=>1])
                        ->get();

        $y1s2_student = DB::table('users')
                        ->join('regular_reg', 'users.std_id', '=', 'regular_reg.std_reg_id')
                        ->select('*')
                        ->where(['regular_reg.std_year'=>1])
                        ->where(['regular_reg.std_semester'=>2])
                        ->get();

        $y2s1_student = DB::table('users')
                        ->join('regular_reg', 'users.std_id', '=', 'regular_reg.std_reg_id')
                        ->select('*')
                        ->where(['regular_reg.std_year'=>2])
                        ->where(['regular_reg.std_semester'=>1])
                        ->get();

        $y2s2_student = DB::table('users')
                        ->join('regular_reg', 'users.std_id', '=', 'regular_reg.std_reg_id')
                        ->select('*')
                        ->where(['regular_reg.std_year'=>2])
                        ->where(['regular_reg.std_semester'=>2])
                        ->get();

        $y3s1_student = DB::table('users')
                        ->join('regular_reg', 'users.std_id', '=', 'regular_reg.std_reg_id')
                        ->select('*')
                        ->where(['regular_reg.std_year'=>3])
                        ->where(['regular_reg.std_semester'=>1])
                        ->get();

        $y3s2_student = DB::table('users')
                        ->join('regular_reg', 'users.std_id', '=', 'regular_reg.std_reg_id')
                        ->select('*')
                        ->where(['regular_reg.std_year'=>3])
                        ->where(['regular_reg.std_semester'=>2])
                        ->get();

        $y4s1_student = DB::table('users')
                        ->join('regular_reg', 'users.std_id', '=', 'regular_reg.std_reg_id')
                        ->select('*')
                        ->where(['regular_reg.std_year'=>4])
                        ->where(['regular_reg.std_semester'=>1])
                        ->get();

        $y4s2_student = DB::table('users')
                        ->join('regular_reg', 'users.std_id', '=', 'regular_reg.std_reg_id')
                        ->select('*')
                        ->where(['regular_reg.std_year'=>4])
                        ->where(['regular_reg.std_semester'=>2])
                        ->get();


        return view('admin.regular', compact('y1s1_student','y1s2_student','y2s1_student','y2s2_student','y3s1_student','y3s2_student','y4s1_student','y4s2_student'));
    }


    //regular student delete method
    public function regular_delete($std_id){
        DB::table('regular_reg')
            ->where('std_reg_id',$std_id)
            ->delete();

            return Redirect::to('/regular');
        
    }

    //regular student view method
    public function regular_view($std_id){
        $student_info_view = DB::table('regular_reg')
                                ->select('*')
                                ->where('std_reg_id',$std_id)
                                ->first();

        $manage_student_info=view('admin.regular_student_view')
                         ->with('view_student_info',$student_info_view);

        return view('layouts.admin_layout')
                 ->with('admin.student_view',$manage_student_info);
        
    }


    // improvement student registration
    public function improve(){
        $y1s1_student = DB::table('users')
                        ->join('improve_reg', 'users.std_id', '=', 'improve_reg.std_imp_id')
                        ->select('*')
                        ->where(['improve_reg.std_year'=>1])
                        ->where(['improve_reg.std_semester'=>1])
                        ->get();

        $y1s2_student = DB::table('users')
                        ->join('improve_reg', 'users.std_id', '=', 'improve_reg.std_imp_id')
                        ->select('*')
                        ->where(['improve_reg.std_year'=>1])
                        ->where(['improve_reg.std_semester'=>2])
                        ->get();

        $y2s1_student = DB::table('users')
                        ->join('improve_reg', 'users.std_id', '=', 'improve_reg.std_imp_id')
                        ->select('*')
                        ->where(['improve_reg.std_year'=>2])
                        ->where(['improve_reg.std_semester'=>1])
                        ->get();

        $y2s2_student = DB::table('users')
                        ->join('improve_reg', 'users.std_id', '=', 'improve_reg.std_imp_id')
                        ->select('*')
                        ->where(['improve_reg.std_year'=>2])
                        ->where(['improve_reg.std_semester'=>2])
                        ->get();

        $y3s1_student = DB::table('users')
                        ->join('improve_reg', 'users.std_id', '=', 'improve_reg.std_imp_id')
                        ->select('*')
                        ->where(['improve_reg.std_year'=>3])
                        ->where(['improve_reg.std_semester'=>1])
                        ->get();

        $y3s2_student = DB::table('users')
                        ->join('improve_reg', 'users.std_id', '=', 'improve_reg.std_imp_id')
                        ->select('*')
                        ->where(['improve_reg.std_year'=>3])
                        ->where(['improve_reg.std_semester'=>2])
                        ->get();

        $y4s1_student = DB::table('users')
                        ->join('improve_reg', 'users.std_id', '=', 'improve_reg.std_imp_id')
                        ->select('*')
                        ->where(['improve_reg.std_year'=>4])
                        ->where(['improve_reg.std_semester'=>1])
                        ->get();

        $y4s2_student = DB::table('users')
                        ->join('improve_reg', 'users.std_id', '=', 'improve_reg.std_imp_id')
                        ->select('*')
                        ->where(['improve_reg.std_year'=>4])
                        ->where(['improve_reg.std_semester'=>2])
                        ->get();


        return view('admin.improvement', compact('y1s1_student','y1s2_student','y2s1_student','y2s2_student','y3s1_student','y3s2_student','y4s1_student','y4s2_student'));
    }



    //improvement student delete method
    public function improve_delete($std_id){
        DB::table('improve_reg')
            ->where('std_imp_id',$std_id)
            ->delete();

            return Redirect::to('/improve');
        
    }


    //improvement student view method
    public function improve_view($std_id){
        $student_info_view = DB::table('improve_reg')
                                ->select('*')
                                ->where('std_imp_id',$std_id)
                                ->first();

        $manage_student_info=view('admin.regular_student_view')
                         ->with('view_student_info',$student_info_view);

        return view('layouts.admin_layout')
                 ->with('admin.student_view',$manage_student_info);
        
    }


    // regular student Admit Card
    public function regular_admit(){
        $y1s1_student = DB::table('users')
                        ->join('regular_reg', 'users.std_id', '=', 'regular_reg.std_reg_id')
                        ->select('*')
                        ->where(['regular_reg.std_year'=>1])
                        ->where(['regular_reg.std_semester'=>1])
                        ->get();

        $y1s2_student = DB::table('users')
                        ->join('regular_reg', 'users.std_id', '=', 'regular_reg.std_reg_id')
                        ->select('*')
                        ->where(['regular_reg.std_year'=>1])
                        ->where(['regular_reg.std_semester'=>2])
                        ->get();

        $y2s1_student = DB::table('users')
                        ->join('regular_reg', 'users.std_id', '=', 'regular_reg.std_reg_id')
                        ->select('*')
                        ->where(['regular_reg.std_year'=>2])
                        ->where(['regular_reg.std_semester'=>1])
                        ->get();

        $y2s2_student = DB::table('users')
                        ->join('regular_reg', 'users.std_id', '=', 'regular_reg.std_reg_id')
                        ->select('*')
                        ->where(['regular_reg.std_year'=>2])
                        ->where(['regular_reg.std_semester'=>2])
                        ->get();

        $y3s1_student = DB::table('users')
                        ->join('regular_reg', 'users.std_id', '=', 'regular_reg.std_reg_id')
                        ->select('*')
                        ->where(['regular_reg.std_year'=>3])
                        ->where(['regular_reg.std_semester'=>1])
                        ->get();

        $y3s2_student = DB::table('users')
                        ->join('regular_reg', 'users.std_id', '=', 'regular_reg.std_reg_id')
                        ->select('*')
                        ->where(['regular_reg.std_year'=>3])
                        ->where(['regular_reg.std_semester'=>2])
                        ->get();

        $y4s1_student = DB::table('users')
                        ->join('regular_reg', 'users.std_id', '=', 'regular_reg.std_reg_id')
                        ->select('*')
                        ->where(['regular_reg.std_year'=>4])
                        ->where(['regular_reg.std_semester'=>1])
                        ->get();

        $y4s2_student = DB::table('users')
                        ->join('regular_reg', 'users.std_id', '=', 'regular_reg.std_reg_id')
                        ->select('*')
                        ->where(['regular_reg.std_year'=>4])
                        ->where(['regular_reg.std_semester'=>2])
                        ->get();


        return view('admin.regular_admit', compact('y1s1_student','y1s2_student','y2s1_student','y2s2_student','y3s1_student','y3s2_student','y4s1_student','y4s2_student'));
    }


    // improvement student Admit Card
    public function improve_admit(){
        $y1s1_student = DB::table('users')
                        ->join('improve_reg', 'users.std_id', '=', 'improve_reg.std_imp_id')
                        ->select('*')
                        ->where(['improve_reg.std_year'=>1])
                        ->where(['improve_reg.std_semester'=>1])
                        ->get();

        $y1s2_student = DB::table('users')
                        ->join('improve_reg', 'users.std_id', '=', 'improve_reg.std_imp_id')
                        ->select('*')
                        ->where(['improve_reg.std_year'=>1])
                        ->where(['improve_reg.std_semester'=>2])
                        ->get();

        $y2s1_student = DB::table('users')
                        ->join('improve_reg', 'users.std_id', '=', 'improve_reg.std_imp_id')
                        ->select('*')
                        ->where(['improve_reg.std_year'=>2])
                        ->where(['improve_reg.std_semester'=>1])
                        ->get();

        $y2s2_student = DB::table('users')
                        ->join('improve_reg', 'users.std_id', '=', 'improve_reg.std_imp_id')
                        ->select('*')
                        ->where(['improve_reg.std_year'=>2])
                        ->where(['improve_reg.std_semester'=>2])
                        ->get();

        $y3s1_student = DB::table('users')
                        ->join('improve_reg', 'users.std_id', '=', 'improve_reg.std_imp_id')
                        ->select('*')
                        ->where(['improve_reg.std_year'=>3])
                        ->where(['improve_reg.std_semester'=>1])
                        ->get();

        $y3s2_student = DB::table('users')
                        ->join('improve_reg', 'users.std_id', '=', 'improve_reg.std_imp_id')
                        ->select('*')
                        ->where(['improve_reg.std_year'=>3])
                        ->where(['improve_reg.std_semester'=>2])
                        ->get();

        $y4s1_student = DB::table('users')
                        ->join('improve_reg', 'users.std_id', '=', 'improve_reg.std_imp_id')
                        ->select('*')
                        ->where(['improve_reg.std_year'=>4])
                        ->where(['improve_reg.std_semester'=>1])
                        ->get();

        $y4s2_student = DB::table('users')
                        ->join('improve_reg', 'users.std_id', '=', 'improve_reg.std_imp_id')
                        ->select('*')
                        ->where(['improve_reg.std_year'=>4])
                        ->where(['improve_reg.std_semester'=>2])
                        ->get();


        return view('admin.improvement_admit', compact('y1s1_student','y1s2_student','y2s1_student','y2s2_student','y3s1_student','y3s2_student','y4s1_student','y4s2_student'));
    }


    public function add_notice(){
        return view('admin.add_notice');
    }

     //save notice
    public function save_notice(Request $request){
        

        $data=array();
        $data['notice_title'] = $request->notice_title;
        $data['notice_details'] = $request->notice_details;
        $data['notice_date'] =  now();


        DB::table('notice_tbl')->insert($data);
        Session::put('exception','Notice added successfully!!');
        return Redirect::to('/add_notice');
    }


    //show notice
    public function show_notice(){

        $all_notice = DB::table('notice_tbl')
                    ->get();

        $manage_notice=view('admin.show_all_notice')
                         ->with('all_notice_info',$all_notice);

        return view('layouts.admin_layout')
                 ->with('layouts.admin_layout',$manage_notice);
    //return view('admin.show_all_notice');
    }

    //notice delete
    public function notice_delete($notice_id){
        DB::table('notice_tbl')
            ->where('notice_id',$notice_id)
            ->delete();

            return Redirect::to('/show_notice');
        
    }

    //notice edit method
    public function notice_edit($notice_id){
        $edit_notice = DB::table('notice_tbl')
                            ->select('*')
                            ->where('notice_id',$notice_id)
                            ->first();


        $manage_notice=view('admin.edit_notice')
                         ->with('update_notice_info',$edit_notice);

        return view('layouts.admin_layout')
                 ->with('admin.edit_notice',$manage_notice);
        
    }


    //notice update method
    public function notice_update(Request $request,$notice_id)
    {
        $data=array();
        $data['notice_id'] = $request->notice_id;
        $data['notice_title'] = $request->notice_title;
        $data['notice_details'] = $request->notice_details;
        $data['notice_date'] =  now();


        DB::table('notice_tbl')
                    ->where('notice_id',$notice_id)
                    ->update($data);

        Session::put('exception','Notice updated successfully!!');
        return Redirect::to('/show_notice');
    }


    

    //course
    public function add_course(){
        return view('admin.add_course');
    }

    public function show_course(){
        $all_course = DB::table('course_tbl')
                    ->get();

         $manage_course=view('admin.show_course')
                         ->with('all_course_info',$all_course);

         return view('layouts.admin_layout')
                 ->with('layouts.admin_layout',$manage_course);
        //return view('admin.show_course');
    }

    //save_course
    public function save_course(Request $request){
        

        $data=array();
        $data['course_year'] = $request->course_year;
        $data['course_semester'] = $request->course_semester;
        $data['course_code'] = $request->course_code;
        $data['course_title'] = $request->course_title;
        $data['course_credits'] = $request->course_credits;


        DB::table('course_tbl')->insert($data);
        Session::put('exception','Course added successfully!!');
        return Redirect::to('/add_course');
    }

    //course delete method
    public function course_delete($course_code){
        DB::table('course_tbl')
            ->where('course_code',$course_code)
            ->delete();

            return Redirect::to('/show_course');
        
    }

    //course edit method
    public function course_edit($course_code){
        $edit_course = DB::table('course_tbl')
                            ->select('*')
                            ->where('course_code',$course_code)
                            ->first();


        $manage_course=view('admin.edit_course')
                         ->with('update_course_info',$edit_course);

        return view('layouts.admin_layout')
                 ->with('admin.edit_course',$manage_course);
        
    }


    //course update method
    public function course_update(Request $request,$course_code)
    {
        $data=array();
        $data['course_year'] = $request->course_year;
        $data['course_semester'] = $request->course_semester;
        $data['course_code'] = $request->course_code;
        $data['course_title'] = $request->course_title;
        $data['course_credits'] = $request->course_credits;


        DB::table('course_tbl')
                    ->where('course_code',$course_code)
                    ->update($data);

        Session::put('exception','Course updated successfully!!');
        return Redirect::to('/show_course');
    }


}
