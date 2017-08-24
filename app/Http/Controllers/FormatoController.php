<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormatoRequest;
use App\Http\Requests\updateFormatoRequest;
use Illuminate\Support\Facades\Auth;
use App\Formato;
use App\Bitacora;

class FormatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('isnaya.formato.index');
    }

    public function listarFormato(){
         $formatos = Formato::Orderby('formato','ASC')->paginate(6);
            return view('isnaya.formato.listar')->with('formatos',$formatos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('isnaya.formato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormatoRequest $request)
    {
        //
        if($request->ajax()){
            $formato = Formato::create($request->all());

            $bitacora= new Bitacora();
            $idtabla=$formato->id;
            $bitacora->tabla="Formatos";
            $bitacora->id_tabla=$idtabla;
            $bitacora->operacion="Agregó";
            $bitacora->id_usuario=Auth::User()->id;

            $bitacora->save();
            //si no hay error entonces
            if($formato){
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
        $formatos = Formato::FindOrFail($id);
            //devolvemos una respuesta atravez de json
            return response()->json($formatos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateFormatoRequest $request, $id)
    {
        //
        if($request->ajax()){

            $formatos =Formato::FindOrFail($id);
            //en input amacenamos toda la info del request
            $input = $request->all();
            $resultado = $formatos->fill($input)->save();

            $bitacora= new Bitacora();
            $idtabla=$formato->id;
            $bitacora->tabla="Formatos";
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
        //
    }
}
