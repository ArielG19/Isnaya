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
use \App\Bitacora;
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
        return view('isnaya.costos.proforma')->with('clientes',$clientes)->with('formato',$formato)->with('producto',$producto)
        ->with('rubros',$rubros)->with('colores',$colores)->with('lamina',$lamina)->with('MOFot',$MOFot)->with('MOImpOff',$MOImpOff);
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
      /*  $valores = $request->all(); 
        return $valores;*/
        
        $proforma= new Proforma($request->all());
        $proforma->id_usuario=Auth::User()->id;
        $proforma->save();      
        $idproforma=$proforma->id;

        $bitacora= new Bitacora();

        $bitacora->tabla="Proforma";
        $bitacora->id_tabla=$idproforma;
        $bitacora->operacion="Agregó";
        $bitacora->id_usuario=Auth::User()->id;
        $bitacora->save();
  
        $proformaRubro= new Proforma_Rubro();
        $proformaRubro0= new Proforma_Rubro();
        $proformaRubro1= new Proforma_Rubro();
        $proformaRubro2= new Proforma_Rubro();
        if ($request ['Mat0']) {
            $proformaRubro0->costo=$request['costot0'];
            $proformaRubro0->volumen=$request['vol0'];
            $proformaRubro0->cantRubro=$request['numero1'];
            $proformaRubro0->numpapel=0;
            $proformaRubro0->pag_unit=$request['pag_unit'];
            $proformaRubro0->id_rubro=$request['idMat0'];
            $proformaRubro0->id_proforma=$idproforma;

            $proformaRubro0->save();

            if($request['Mat1']){
                $proformaRubro->costo=$request['costot1'];
                $proformaRubro->volumen=$request['vol1'];
                $proformaRubro->cantRubro=$request['numero'];
                $proformaRubro->numpapel=1;
                $proformaRubro->pag_unit=$request['pag_unit1'];
                $proformaRubro->id_rubro=$request['idMat1'];
                $proformaRubro->id_proforma=$idproforma;

                $proformaRubro->save();
            }
            if ($request ['Mat2']) {
                $proformaRubro1->costo=$request['costot2'];
                $proformaRubro1->volumen=$request['vol2'];
                $proformaRubro1->cantRubro=$request['numero2'];
                $proformaRubro1->numpapel=2;
                $proformaRubro1->pag_unit=$request['pag_unit2'];
                $proformaRubro1->id_rubro=$request['idMat2'];
                $proformaRubro1->id_proforma=$idproforma;
               
                $proformaRubro1->save();
       
                if ($request ['Mat3']) {
                    $proformaRubro2->costo=$request['costot3'];
                    $proformaRubro2->volumen=$request['vol3'];
                    $proformaRubro2->cantRubro=$request['numero3'];
                    $proformaRubro2->numpapel=3;
                    $proformaRubro2->pag_unit=$request['pag_unit3'];
                    $proformaRubro2->id_rubro=$request['idMat3'];
                    $proformaRubro2->id_proforma=$idproforma;
 
                    $proformaRubro2->save();
                }
            }
        }
        $proformaColorp = new Proforma_Color();
        if($request['idcolor0']){
            $proformaColorp->cantidad = $request['color0'];
            $proformaColorp->numero = $request['num0'];
            $proformaColorp->id_proforma = $idproforma;
            $proformaColorp->id_color = $request['idcolor0'];
 
            $proformaColorp->save();
        }
        $proformaColor = new Proforma_Color();
        if($request['num1']){
            $proformaColor->cantidad = $request['color1'];
            $proformaColor->numero = $request['num1'];
            $proformaColor->id_proforma = $idproforma;
            $proformaColor->id_color = $request['idcolor1'];
 
            $proformaColor->save();
        }
        $proformaColor2 = new Proforma_Color();
        if(empty($request['num2'])){ 
        }else{
            $proformaColor2->cantidad = $request['color2'];
            $proformaColor2->numero = $request['num2'];
            $proformaColor2->id_proforma = $idproforma;
            $proformaColor2->id_color = $request['idcolor2'];
            
            $proformaColor2->save();
        }
        $proformaColor3 = new Proforma_Color();
        if(empty($request['num3'])){
        }else{
            $proformaColor3->cantidad = $request['color3'];
            $proformaColor3->numero = $request['num3'];
            $proformaColor3->id_proforma = $idproforma;
            $proformaColor3->id_color = $request['idcolor3'];

            $proformaColor3->save();
        }
        $proformaColor4 = new Proforma_Color();
        if(empty($request['num4'])){
        }else{
            $proformaColor4->cantidad = $request['color4'];
            $proformaColor4->numero = $request['num4'];
            $proformaColor4->id_proforma = $idproforma;
            $proformaColor4->id_color = $request['idcolor4'];

            $proformaColor4->save();
        }
        $proformaColor5 = new Proforma_Color();
        if(empty($request['num5'])){
        }else{
            $proformaColor5->cantidad = $request['color5'];
            $proformaColor5->numero = $request['num5'];
            $proformaColor5->id_proforma = $idproforma;
            $proformaColor5->id_color = $request['idcolor5'];

            $proformaColor5->save();
        }
        $proformaColor6 = new Proforma_Color();
        if(empty($request['num6'])){
        }else{
            $proformaColor6->cantidad = $request['color6'];
            $proformaColor6->numero = $request['num6'];
            $proformaColor6->id_proforma = $idproforma;
            $proformaColor6->id_color = $request['idcolor6'];

            $proformaColor6->save();
        }

        /*$valores = $request->all(); 
        return $valores;*/
        
        return redirect()->route('proformas.index');
        
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
        $proformas = Proforma::FindOrFail($id);
        $proformas->each(function($proformas){
            $proformas->cliente;
            $proformas->producto;
            $proformas->formato;
            $proformas->rubro;
            //dd($proformas->cliente);
        });

        $clientes= DB::table('clientes')->get();
        $productos = DB::table('productos')->get();
        $formato = DB::table('formatos')->get();
        $colores = DB::table('colores')->orderBy('color', 'asc')->get();
        $rubros= DB::table('rubros')->where('tipo','Papel')->get();
        $lamina= DB::table('rubros')->where('descripcion','Lámina')->get();
        //return response()->json($proformas);
        //consultas para enviar los diferentes rubros de la app para editar
        $rub0 = DB::table('rubros')
            ->join('proforma__rubros', 'rubros.id', '=', 'proforma__rubros.id_rubro')
            ->join('proformas', 'proforma__rubros.id_proforma', '=', 'proformas.id')
            ->where('numpapel','0')
            ->select('rubros.*','proforma__rubros.cantRubro')
            ->get();
            
        $rub1= DB::table('rubros')
            ->join('proforma__rubros', 'rubros.id', '=', 'proforma__rubros.id_rubro')
            ->join('proformas', 'proforma__rubros.id_proforma', '=', 'proformas.id')
            ->where('numpapel','1')
            ->select('rubros.*','proforma__rubros.cantRubro')
            ->get();

        $rub2= DB::table('rubros')
            ->join('proforma__rubros', 'rubros.id', '=', 'proforma__rubros.id_rubro')
            ->join('proformas', 'proforma__rubros.id_proforma', '=', 'proformas.id')
            ->where('numpapel','2')
            ->select('rubros.*','proforma__rubros.cantRubro')
            ->get();

        $rub3= DB::table('rubros')
            ->join('proforma__rubros', 'rubros.id', '=', 'proforma__rubros.id_rubro')
            ->join('proformas', 'proforma__rubros.id_proforma', '=', 'proformas.id')
            ->where('numpapel','3')
            ->select('rubros.*','proforma__rubros.cantRubro')
            ->get();
            //dd($rub0);
        //Fín de consultas consultas
        $col0 = DB::table('colores')
            ->join('proforma__colores', 'colores.id', '=', 'proforma__colores.id_color')
            ->join('proformas', 'proforma__colores.id_proforma', '=', 'proformas.id')
            ->where('numero','0')
            ->select('colores.*','proforma__colores.cantidad')
            ->get();
    
        $col1 = DB::table('colores')
            ->join('proforma__colores', 'colores.id', '=', 'proforma__colores.id_color')
            ->join('proformas', 'proforma__colores.id_proforma', '=', 'proformas.id')
            ->where('numero','1')
            ->select('colores.*','proforma__colores.cantidad')
            ->get();
        $col2 = DB::table('colores')
            ->join('proforma__colores', 'colores.id', '=', 'proforma__colores.id_color')
            ->join('proformas', 'proforma__colores.id_proforma', '=', 'proformas.id')
            ->where('numero','2')
            ->select('colores.*','proforma__colores.cantidad')
            ->get();
         $col3 = DB::table('colores')
            ->join('proforma__colores', 'colores.id', '=', 'proforma__colores.id_color')
            ->join('proformas', 'proforma__colores.id_proforma', '=', 'proformas.id')
            ->where('numero','3')
            ->select('colores.*','proforma__colores.cantidad')
            ->get();
        $col4 = DB::table('colores')
            ->join('proforma__colores', 'colores.id', '=', 'proforma__colores.id_color')
            ->join('proformas', 'proforma__colores.id_proforma', '=', 'proformas.id')
            ->where('numero','4')
            ->select('colores.*','proforma__colores.cantidad')
            ->get();
        $col5 = DB::table('colores')
            ->join('proforma__colores', 'colores.id', '=', 'proforma__colores.id_color')
            ->join('proformas', 'proforma__colores.id_proforma', '=', 'proformas.id')
            ->where('numero','5')
            ->select('colores.*','proforma__colores.cantidad')
            ->get();
        
        $col6 = DB::table('colores')
            ->join('proforma__colores', 'colores.id', '=', 'proforma__colores.id_color')
            ->join('proformas', 'proforma__colores.id_proforma', '=', 'proformas.id')
            ->where('numero','6')
            ->select('colores.*','proforma__colores.cantidad')
            ->get();
        // $material=Rubro::where('tipo', $tip)->get();
        $MOFot= DB::table('rubros')->where('descripcion','M. O. Fotomecánica')->get();
        $MOImpOff= DB::table('rubros')->where('descripcion','M. O. Impresión Offset')->get();

        return view('isnaya.costos.profedit')->with('proformas',$proformas)->with('clientes',$clientes)->with('productos',$productos)
            ->with('formato',$formato)->with('rubros',$rubros)->with('colores',$colores)->with('rub0',$rub0)->with('rub1',$rub1)
            ->with('rub2',$rub2)->with('rub3',$rub3)->with('col0',$col0)->with('col1',$col1)->with('col2',$col2)->with('col3',$col3)
            ->with('col4',$col4)->with('col5',$col5)->with('col6',$col6)->with('lamina',$lamina)->with('MOFot', $MOFot)->with('MOImpOff',$MOImpOff);        
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
        $proforma=Proforma::find($id);

        dd($request);

       /* $proforma->id_usuario=Auth::User()->id;
        $proforma->save();      
        $idproforma=$proforma->id;

        $bitacora= new Bitacora();

        $bitacora->tabla="Proforma";
        $bitacora->id_tabla=$idproforma;
        $bitacora->operacion="Agregó";
        $bitacora->id_usuario=Auth::User()->id;
        $bitacora->save();
  
        $proformaRubro= new Proforma_Rubro();
        $proformaRubro0= new Proforma_Rubro();
        $proformaRubro1= new Proforma_Rubro();
        $proformaRubro2= new Proforma_Rubro();
        if ($request ['Mat0']) {
            $proformaRubro0->costo=$request['costot0'];
            $proformaRubro0->volumen=$request['vol0'];
            $proformaRubro0->cantRubro=$request['numero1'];
            $proformaRubro0->numpapel=0;
            $proformaRubro0->pag_unit=$request['pag_unit'];
            $proformaRubro0->id_rubro=$request['idMat0'];
            $proformaRubro0->id_proforma=$idproforma;

            $proformaRubro0->save();

            if($request['Mat1']){
                $proformaRubro->costo=$request['costot1'];
                $proformaRubro->volumen=$request['vol1'];
                $proformaRubro->cantRubro=$request['numero'];
                $proformaRubro->numpapel=1;
                $proformaRubro->pag_unit=$request['pag_unit1'];
                $proformaRubro->id_rubro=$request['idMat1'];
                $proformaRubro->id_proforma=$idproforma;

                $proformaRubro->save();
            }
            if ($request ['Mat2']) {
                $proformaRubro1->costo=$request['costot2'];
                $proformaRubro1->volumen=$request['vol2'];
                $proformaRubro1->cantRubro=$request['numero2'];
                $proformaRubro1->numpapel=2;
                $proformaRubro1->pag_unit=$request['pag_unit2'];
                $proformaRubro1->id_rubro=$request['idMat2'];
                $proformaRubro1->id_proforma=$idproforma;
               
                $proformaRubro1->save();
       
                if ($request ['Mat3']) {
                    $proformaRubro2->costo=$request['costot3'];
                    $proformaRubro2->volumen=$request['vol3'];
                    $proformaRubro2->cantRubro=$request['numero3'];
                    $proformaRubro2->numpapel=3;
                    $proformaRubro2->pag_unit=$request['pag_unit3'];
                    $proformaRubro2->id_rubro=$request['idMat3'];
                    $proformaRubro2->id_proforma=$idproforma;
 
                    $proformaRubro2->save();
                }
            }
        }
        $proformaColorp = new Proforma_Color();
        if($request['idcolor0']){
            $proformaColorp->cantidad = $request['color0'];
            $proformaColorp->numero = $request['num0'];
            $proformaColorp->id_proforma = $idproforma;
            $proformaColorp->id_color = $request['idcolor0'];
 
            $proformaColorp->save();
        }
        $proformaColor = new Proforma_Color();
        if($request['num1']){
            $proformaColor->cantidad = $request['color1'];
            $proformaColor->numero = $request['num1'];
            $proformaColor->id_proforma = $idproforma;
            $proformaColor->id_color = $request['idcolor1'];
 
            $proformaColor->save();
        }
        $proformaColor2 = new Proforma_Color();
        if(empty($request['num2'])){ 
        }else{
            $proformaColor2->cantidad = $request['color2'];
            $proformaColor2->numero = $request['num2'];
            $proformaColor2->id_proforma = $idproforma;
            $proformaColor2->id_color = $request['idcolor2'];
            
            $proformaColor2->save();
        }
        $proformaColor3 = new Proforma_Color();
        if(empty($request['num3'])){
        }else{
            $proformaColor3->cantidad = $request['color3'];
            $proformaColor3->numero = $request['num3'];
            $proformaColor3->id_proforma = $idproforma;
            $proformaColor3->id_color = $request['idcolor3'];

            $proformaColor3->save();
        }
        $proformaColor4 = new Proforma_Color();
        if(empty($request['num4'])){
        }else{
            $proformaColor4->cantidad = $request['color4'];
            $proformaColor4->numero = $request['num4'];
            $proformaColor4->id_proforma = $idproforma;
            $proformaColor4->id_color = $request['idcolor4'];

            $proformaColor4->save();
        }
        $proformaColor5 = new Proforma_Color();
        if(empty($request['num5'])){
        }else{
            $proformaColor5->cantidad = $request['color5'];
            $proformaColor5->numero = $request['num5'];
            $proformaColor5->id_proforma = $idproforma;
            $proformaColor5->id_color = $request['idcolor5'];

            $proformaColor5->save();
        }
        $proformaColor6 = new Proforma_Color();
        if(empty($request['num6'])){
        }else{
            $proformaColor6->cantidad = $request['color6'];
            $proformaColor6->numero = $request['num6'];
            $proformaColor6->id_proforma = $idproforma;
            $proformaColor6->id_color = $request['idcolor6'];

            $proformaColor6->save();
        }

        $valores = $request->all(); 
        return $valores;
        
        return redirect()->route('proformas.index');*/
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
