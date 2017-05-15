<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;
use App\Http\Requests\updateProductoRequest;
use App\Producto;
use Session;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        return view('isnaya.producto.index');
    }

    //1. creamos un un nuevo metodo para listar todo atravez de ajax.
    public function listarTodo(){
        $productos = Producto::Orderby('descripcion','ASC')->paginate(6);
        return view('isnaya.producto.listar')->with('productos',$productos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('isnaya.producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoRequest $request)
    {

        /*$producto = new Producto($request->all());
        $producto->save();
        //Session::flash('save','Se ha creado correctamente');
        return redirect()->route('productos.index');*/

        //verificamos si viene atravez de ajax
        if($request->ajax()){
            $product = Producto::create($request->all());
            //si no hay error entonces
            if($product){
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
        //
          $productos = Producto::FindOrFail($id);
            //devolvemos una respuesta atravez de json
            return response()->json($productos);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateProductoRequest $request, $id)
    {
        //
         //usamos ajax y json para actulizar
        if($request->ajax()){

            $productos = Producto::FindOrFail($id);
            $input = $request->all();
            $resultado = $productos->fill($input)->save();

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
