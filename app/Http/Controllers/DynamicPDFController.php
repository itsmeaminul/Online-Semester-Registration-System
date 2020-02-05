<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use DB;
use PDF;

class DynamicPDFController extends Controller
{
    function downloadPdf()
    {

	    $pdf = PDF::loadView('help');
		return $pdf->download('help.pdf');
    }


}