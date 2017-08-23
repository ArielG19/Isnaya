<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Proforma;
use App\Cliente;
class ReporteController extends Controller
{
    public function index(){
         $pVendidos = DB::table('proformas')->join('productos','proformas.id_producto','=','productos.id')->select('id_producto','descripcion','proformas.created_at as fecha',DB::raw('count(tipo) as total'),DB::raw('count(fecha) as fechat'))->groupBY('descripcion')->orderBy('total','fechat','desc')->get();
         //dd($pVendidos);
        return view('isnaya.reportes.reportes')->with('pVendidos',$pVendidos);
    }
    public function listarCliente(){            
        $count = DB::table('proformas')->join('clientes','proformas.id_cliente','=','clientes.id')->select('id_cliente','nombre','proformas.created_at',DB::raw('count(tipo) as tipo'))->groupBY('id_cliente')->orderBy('tipo','desc')->get();

        //dd($count);
        return view('isnaya.reportes.listar')->with('count',$count);  
    }

    public function listarFecha()
    {            
        $count = DB::table('proformas')->join('clientes','proformas.id_cliente','=','clientes.id')->select('id_cliente','nombre','proformas.created_at as fecha',DB::raw('count(fecha) as fecha_total'))->groupBY('fecha','id_cliente')->orderBy('fecha','desc')->get();

        //dd($count);
        return view('isnaya.reportes.listarFecha')->with('count',$count);  
    }
}
