<?php

namespace DSII\Http\Controllers;

use Illuminate\Http\Request;
use DSII\Productos;
use Illuminate\Support\Facades\Validator;
use JWTAuth;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Productos::where('estado', true)->with('proveedor:id_proveedor,nombre_proveedor')->get();
        return response()->json($productos,201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nombre_producto' => 'required|string',
            'descripcion' => 'required|string',
            'precio_compra' => 'required|numeric',
            'precio_venta' => 'required|numeric',
            'cantidad_existencia' => 'required|numeric|min:0',
            'id_proveedor' => 'required|numeric|exists:proveedores,id_proveedor',
        ]);
        if($validator->passes()){
                //Instanciamos la clase
            $producto = new Productos;
            //Declaramos el nombre con el nombre enviado en el request
            $producto->nombre_producto = $request->nombre_producto;
            $producto->descripcion = $request->descripcion;
            $producto->precio_compra = $request->precio_compra;
            $producto->precio_venta = $request->precio_venta;
            $producto->cantidad_existencia = $request->cantidad_existencia;
            $producto->id_proveedor = $request->id_proveedor;
            $producto->estado = true;
            $producto->id_user = JWTAuth::user()->id_user;
            //Guardamos el cambio en nuestro modelo
            $producto->save();
            //$producto->setHidden(['created_at', 'updated_at']);
            return response()->json($producto,201);
        }if($validator->fails()){
            return response()->json($validator->errors()->all(), 422);
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
        $producto = Productos::with('proveedor:id_proveedor,nombre_proveedor')->findOrFail($id);
        return response()->json($producto,201);
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
        $validator = Validator::make($request->all(),[
            'nombre_producto' => 'required|string',
            'descripcion' => 'required|string',
            'precio_compra' => 'required|numeric',
            'precio_venta' => 'required|numeric',
            'cantidad_existencia' => 'required|numeric|min:0',
            'id_proveedor' => 'required|numeric|exists:proveedores,id_proveedor',
        ]);
        if($validator->passes()){
                //Instanciamos la clase
            $producto = Productos::findOrFail($id);
            //Declaramos el nombre con el nombre enviado en el request
            $producto->nombre_producto = $request->nombre_producto;
            $producto->descripcion = $request->descripcion;
            $producto->precio_compra = $request->precio_compra;
            $producto->precio_venta = $request->precio_venta;
            $producto->cantidad_existencia = $request->cantidad_existencia;
            $producto->id_proveedor = $request->id_proveedor;
            $producto->estado = true;
            $producto->id_user = JWTAuth::user()->id_user;
            //Guardamos el cambio en nuestro modelo
            $producto->save();
            //$producto->setHidden(['created_at', 'updated_at']);
            return response()->json($producto,201);
        }if($validator->fails()){
            return response()->json($validator->errors()->all(), 422);
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
        $producto = Productos::findOrFail($id);
        if($producto->estado == true){
            $producto->estado = false;
        }else if($producto->estado == false){
            $producto->estado = true;
        }else{
            return response()->json("Ha ocurrido un error", 422);
        }
        //Guardamos el cambio en nuestro modelo
        $producto->save();
        return response()->json($producto,201);
    }
}
