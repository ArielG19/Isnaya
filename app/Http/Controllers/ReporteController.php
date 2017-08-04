<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Proforma;
use App\Cliente;
class ReporteController extends Controller
{
    //
    public function mes(){
    	//$count = DB::table('proformas')->where('solicitante',1)->count();
    	//$max = DB::table('proformas')->max('volumen');
    	/*$mes = DB::table('clientes')
                ->whereYear('created_at', '2017')
                ->get();*/
         //dd($max);
        $mes = Cliente::all();
        return view('isnaya.reportes.reportes')->with('mes',$mes);  
    }
}
