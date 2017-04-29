<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rubro;
use Session;

class RubrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('isnaya.rubro.index');
    }


    public function listar()
    {
         $rubros = Rubro::Orderby('descripcion','ASC')->paginate(3);
        return view('isnaya.rubro.listar')->with('rubros',$rubros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('isnaya/rubro/rubro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $rubro= new Rubro($request->all());

        $rubro->descripcion=$request->descripcion;
        $rubro->cantidad=$request->cantidad;
        $rubro->costo=$request->costo;
        $rubro->tipo=$request->tipo;
        $rubro->estado='Activo';
        $rubro->id_usuario='1';
        $rubro->save();

        return redirect('/rubros');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rubro=Rubro::FindOrFail($id);
            //devolvemos una respuesta atravez de json
            return response()->json($rubro);
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
         //usamos ajax y json para actulizar
        if($request->ajax()){

            $rubro=Rubro::FindOrFail($id);
            $input = $request->all();
            $resultado = $rubro->fill($input)->save();

            if($resultado){
                return response()->json(['success'=>'true']);
            }else{
                return response()->json(['success'=>'false']);
            }
        }
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
