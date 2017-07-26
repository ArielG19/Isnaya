<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Cliente;
use \App\Color;
use \App\Producto;
use \App\Rubro;
use \App\Formato;
use \App\Proforma;
use \App\Proforma_Color;
use \App\Proforma_Rubro;
use Illuminate\Support\Facades\Auth;
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
        /* $colores = DB::table('colores')->OrderBy('color','ASC');/*->pluck('color', 'id')->prepend('Seleccione el color');*/
        $colores = DB::table('colores')->orderBy('color', 'asc')->get();
        $producto = Producto::pluck('descripcion','id')->prepend('Seleccione el producto');
        $lamina= DB::table('rubros')->where('descripcion','Lámina')->get();
        // $material=Rubro::where('tipo', $tip)->get();
        $MOFot= DB::table('rubros')->where('descripcion','M. O. Fotomecánica')->get();
        $MOImpOff= DB::table('rubros')->where('descripcion','M. O. Impresión Offset')->get();
        $rubros= DB::table('rubros')->where('tipo','Papel')->get();/*->pluck('descripcion','id')->prepend('Materiales');*/

        //echo($MOFot);
        //return $rubros; //response()->json($rubros);
        //return $MOImpOff;
        return view('isnaya.costos.proforma')->with('clientes',$clientes)->with('formato',$formato)->with('producto',$producto)->with('rubros',$rubros)->with('colores',$colores)->with('lamina',$lamina)->with('MOFot',$MOFot)->with('MOImpOff',$MOImpOff);
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
        //$name = $request->solicitante;
       /*$valores = $request->all(); 

        echo $id_formato;  
        $valores = $request->all();
        return $valores; 
        $valores = $request->all();
        $proforma->id_usuario= Auth::User()->id;
       
        */       
          
        $valores = $request->all(); 
        return $valores;

/*

        $proforma= new Proforma($request->all());
        $proforma->id_usuario=Auth::User()->id;
        $proforma->save();
        $idproforma=$proforma->id;
  
        $proformaRubro= new Proforma_Rubro();
        
        if ($request ['Mat1']) {
            $proformaRubro->costo=$request['costot1'];
            $proformaRubro->volumen=$request['vol1'];
            $proformaRubro->numero=$request['numero'];
            $proformaRubro->pag_unit=$request['pag_unit1'];
            $proformaRubro->id_rubro=$request['idMat1'];
            $proformaRubro->id_proforma=$idproforma;

            $proformaRubro->save();
        }
        if ($request ['Mat2']) {
            $proformaRubro->costo=$request['costot2'];
            $proformaRubro->volumen=$request['vol2'];
            $proformaRubro->numero=$request['numero2'];
            $proformaRubro->pag_unit=$request['pag_unit2'];
            $proformaRubro->id_rubro=$request['idMat2'];
            $proformaRubro->id_proforma=$idproforma;

            $proformaRubro->save();
        }
        if ($request ['Mat3']) {
            $proformaRubro->costo=$request['costot3'];
            $proformaRubro->volumen=$request['vol3'];
            $proformaRubro->numero=$request['numero3'];
            $proformaRubro->pag_unit=$request['pag_unit3'];
            $proformaRubro->id_rubro=$request['idMat3'];
            $proformaRubro->id_proforma=$idproforma;
            
            $proformaRubro->save();
        }
        
        return "listo!!";*/
    
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
