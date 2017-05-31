<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Cliente;
use \App\Color;
use \App\Producto;
use \App\Rubro;
use \App\Formato;
use \App\Proforma;
use DB;
use Sesion;

class CalculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
        $clientes= DB::table('clientes')->get();
        $formato = Formato::pluck('formato','id')->prepend('Seleccione el formato');
        $colores = Color::Orderby('color','ASC')->pluck('color', 'id')->prepend('Seleccione el color');
        $producto = Producto::pluck('descripcion','id')->prepend('Seleccione el producto');
        //$rubros= Rubro::pluck('descripcion', 'id')->prepend('Seleccione el Rubro');
        //$tip="Papel";
       // $material=Rubro::where('tipo', $tip)->get();
        $rubros= DB::table('rubros')->where('tipo','Papel')->get();/*->pluck('descripcion','id')->prepend('Materiales');*/

        //return $rubros; //response()->json($rubros);
        return view('isnaya.costos.datos')->with('clientes',$clientes)->with('formato',$formato)->with('producto',$producto)->with('rubros',$rubros)->with('colores',$colores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){
            $clientes = Cliente::create($request->all());
            //si no hay error entonces
            if($clientes){
                //Session::flash('save','Se ha creado correctamente');
                return response()->json(['success'=>'true']);
            }else{
                return response()->json(['success'=>'false']);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
