<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JoinTableController extends Controller
{
    function index()
    {
     $data = DB::table('Users')
       ->join('regular_reg', 'regular_reg.std_reg_id', '=', 'Users.std_id')
       // ->join('country', 'country.country_id', '=', 'state.country_id')
       ->select('regular_reg.exam_year','Users.*')
       ->get();
     return view('join_table', compact('data'));
    }
}
?>