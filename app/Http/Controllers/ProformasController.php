<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proforma;
use App\User;
use App\Cliente;
use App\Formato;
use App\Producto;
use DB;

class ProformasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('isnaya.proformas.index');
    }

    public function listarProforma(){
        $proformas = Proforma::Orderby('id','ASC')->paginate(5);

        $proformas->each(function($proformas){
            $proformas->cliente;
            $proformas->producto;
            //dd($proformas->cliente);
            
        });

        return view('isnaya.proformas.listar')->with('proformas',$proformas);    
    }

    public function listarDetalle($id){
         $proformas = Proforma::FindOrFail($id);
         $proformas->each(function($proformas){
            $proformas->cliente;
            $proformas->producto;
            $proformas->formato;
            //dd($proformas->cliente);
            
        });

        return view('isnaya.proformas.listarDetalle')->with('proformas',$proformas);
       
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
        $detalle = Proforma::where('solicitante', $id)->get();
        return response()->json($detalle);
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
        $proformas = Proforma::FindOrFail($id);
            //devolvemos una respuesta atravez de json
            return response()->json($proformas);
            
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
