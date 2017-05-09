<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proforma;
use App\User;
use App\Cliente;
use App\Formato;
use App\Producto;

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
        $proformas = Proforma::Orderby('id','ASC')->paginate(1);
            return view('isnaya.proformas.listar')->with('proformas',$proformas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $user = User::pluck('name','id')->prepend('Seleccione el usuario');
        $clientes = Cliente::pluck('nombre','id')->prepend('Seleccione el cliente');
        $formato = Formato::pluck('formato','id')->prepend('Seleccione el formato');
        $producto = Producto::pluck('descripcion','id')->prepend('Seleccione el producto');

        return view('isnaya.proformas.create')->with('user',$user)->with('clientes',$clientes)->with('formato',$formato)->with('producto',$producto);
        //->with('proforma',$proforma);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
          if($request->ajax()){
            $proformas = Proforma::create($request->all());
            //si no hay error entonces
            if($proformas){
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
