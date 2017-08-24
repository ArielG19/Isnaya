<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rubro;
use \App\Bitacora;
use Session;
use Illuminate\Support\Facades\Auth;

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
        $rubros = Rubro::Orderby('descripcion','ASC')->paginate(10);
        return view('isnaya.rubro.listar')->with('rubros',$rubros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('isnaya/rubro/rubro');
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
            $rubros = Rubro::create($request->all());
                $bitacora= new Bitacora();
                $idtabla=$rubros->id;
                $bitacora->tabla="Rubro";
                $bitacora->id_tabla=$idtabla;
                $bitacora->operacion="Agregó";
                $bitacora->id_usuario=Auth::User()->id;

                $bitacora->save();
            //si no hay error entonces
            if($rubros){
                Session::flash('save','Se ha creado correctamente');
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
        $rubro = Rubro::FindOrFail($id);
        return $rubro;
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
            
            $bitacora= new Bitacora();
            $idtabla=$rubros->id;
            $bitacora->tabla="Rubro";
            $bitacora->id_tabla=$idtabla;
            $bitacora->operacion="Actualizó";
            $bitacora->id_usuario=Auth::User()->id;

            $bitacora->save();

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
}
