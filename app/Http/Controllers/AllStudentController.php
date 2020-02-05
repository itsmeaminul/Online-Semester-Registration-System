<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AllStudentController extends Controller
{
    public function all_student(){
        $all_student = DB::table('student_tbl')
                    ->get();

        $manage_student=view('admin.all_student')
                         ->with('student_info',$all_student);

        return view('layouts.admin_layout')
                 ->with('layouts.admin_layout',$manage_student);

        //return view('admin.all_student');
    }



}



