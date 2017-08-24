<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;
use App\Http\Requests\updateProductoRequest;
use Illuminate\Support\Facades\Auth;
use App\Producto;
use \App\Bitacora;
use Session;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //dd($request->get('descripcion'));
        $productos = Producto::Search($request->get('descripcion'))->Orderby('descripcion','ASC')->paginate(10);
        return view('isnaya.producto.index')->with('productos',$productos);
    }

    //1. creamos un un nuevo metodo para listar todo atravez de ajax.
    public function listarTodo(){
        $productos = Producto::Orderby('descripcion','ASC')->paginate(5);
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

            $bitacora= new Bitacora();
            $idtabla=$product->id;
            $bitacora->tabla="Producto";
            $bitacora->id_tabla=$idtabla;
            $bitacora->operacion="Agregó";
            $bitacora->id_usuario=Auth::User()->id;

            $bitacora->save();
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
    {   $producto = Producto::where('descripcion', $id)->get();
        return response()->json($producto);

        //return view('isnaya.producto.modal')->with('producto',$producto);
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

            $bitacora= new Bitacora();
            $idtabla=$productos->id;
            $bitacora->tabla="Productos";
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
