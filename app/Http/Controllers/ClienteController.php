<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Cliente;
use \App\Bitacora;
use Sesion;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clientes = Cliente::Search($request->nombre)->Orderby('id','ASC')->paginate(10);
        return view('isnaya.clientes.index')->with('clientes',$clientes);
    }
    public function listar()
    {
        $clientes = Cliente::Orderby('nombre','ASC')->paginate(6);
        return view('isnaya.clientes.listar')->with('clientes',$clientes);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('isnaya.clientes.modalcreate');
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
            
            $bitacora= new Bitacora();
            $idtabla=$clientes->id;
            $bitacora->tabla="Cliente";
            $bitacora->id_tabla=$idtabla;
            $bitacora->operacion="Agregó";
            $bitacora->id_usuario=Auth::User()->id;

            $bitacora->save();
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
        $clientes=Cliente::FindOrFail($id);
        //devolvemos una respuesta atravez de json
        return response()->json($clientes);
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
            if($request->ajax()){

            $clientes=Cliente::FindOrFail($id);
            $input = $request->all();
            $resultado = $clientes->fill($input)->save();

            $bitacora= new Bitacora();
            $idtabla=$clientes->id;
            $bitacora->tabla="Cliente";
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
