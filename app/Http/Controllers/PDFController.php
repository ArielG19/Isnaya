<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
//use App\PDF;

class PDFController extends Controller
{
    //
    public function index(){
    	 $usuarios = User::all();
            $pdf = PDF::loadview('isnaya.usuarios.listar',['usuarios'=>$usuarios]);
            return $pdf->download('archivo.pdf');

    }
}
