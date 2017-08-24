<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proforma;
use Barryvdh\DomPDF\Facade as PDF;
//use App\PDF;

class PDFController extends Controller
{
    //
    public function index(){
    	 $proformas = Proforma::all();
            $pdf = PDF::loadview('isnaya.proformas.pdf',['proformas'=>$proformas]);
            return $pdf->stream('archivo.pdf');

    }
}
