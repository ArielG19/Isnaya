<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Color;
use \Session;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('isnaya.colores.index');
    }

    public function listar()
    {
        $colores = Color::Orderby('color','ASC')->paginate(3);
        return view('isnaya.colores.listar')->with('colores',$colores); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('isnaya.colores.create');
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
            $colores = Color::create($request->all());
            //si no hay error entonces
            if($colores){
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
         $colores=Color::FindOrFail($id);
        //devolvemos una respuesta atravez de json
        return response()->json($colores);
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

            $colores=Color::FindOrFail($id);
            $input = $request->all();
            $resultado = $colores->fill($input)->save();

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
