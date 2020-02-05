<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NoticeController extends Controller
{
    public function notice(){

    	$all_notice = DB::table('notice_tbl')
                    ->get();

         $manage_notice=view('notice')
                         ->with('all_notice_info',$all_notice);

         return view('layouts.app')
                 ->with('layouts.app',$manage_notice);
    	//return view('notice');
    }


    public function help(){
    	return view('help');
    }
}



