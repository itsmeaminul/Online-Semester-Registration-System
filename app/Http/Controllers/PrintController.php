<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Users;
use DB;
class PrintController extends Controller
{

      public function prnpriview()
      {
            $student_info_view = DB::table('users')
                            ->join('improve_reg', 'users.std_id', '=', 'improve_reg.std_imp_id')
                            ->select('*')
                            // ->where('improve_reg.std_imp_id',$std_id)
                            ->get();

            // return view('view_improvement2')->with('view_improvement2', compact('student_info_view'));
            // return view('view_improvement2', compact('student_info_view'));


      }
}