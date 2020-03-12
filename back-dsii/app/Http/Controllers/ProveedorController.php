<?php

namespace DSII\Http\Controllers;

use Illuminate\Http\Request;
use DSII\Proveedores;
use Illuminate\Support\Facades\Validator;
use JWTAuth;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedores::where('estado', true)->get();
        return response()->json($proveedores,201);
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
            'nombre_proveedor' => 'required|string',
            'direccion' => 'required|string',
            'telefono' => 'required|numeric',            
        ]);
        if($validator->passes()){
                //Instanciamos la clase
            $proveedor = new Proveedores;
            //Declaramos el nombre con el nombre enviado en el request
            $proveedor->nombre_proveedor = $request->nombre_proveedor;
            $proveedor->direccion = $request->direccion;
            $proveedor->telefono = $request->telefono;
            $proveedor->estado = true;
            $proveedor->id_user = JWTAuth::user()->id_user;
            //Guardamos el cambio en nuestro modelo
            $proveedor->save();
            //$proveedor->setHidden(['created_at', 'updated_at']);
            return response()->json($proveedor,201);
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
        $proveedor = Proveedores::findOrFail($id);
        return response()->json($proveedor,201);
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
            'nombre_proveedor' => 'required|string',
            'direccion' => 'required|string',
            'telefono' => 'required|numeric',            
        ]);
        if($validator->passes()){
                //Instanciamos la clase
            $proveedor = Proveedores::findOrFail($id);
            //Declaramos el nombre con el nombre enviado en el request
            $proveedor->nombre_proveedor = $request->nombre_proveedor;
            $proveedor->direccion = $request->direccion;
            $proveedor->telefono = $request->telefono;
            //Guardamos el cambio en nuestro modelo
            $proveedor->save();
            //$proveedor->setHidden(['created_at', 'updated_at']);
            return response()->json($proveedor,201);
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
        $proveedor =  Proveedores::findOrFail($id);
        if($proveedor->estado == true){
            $proveedor->estado = false;
        }else if($proveedor->estado == false){
            $proveedor->estado = true;
        }else{
            return response()->json("Ha ocurrido un error", 422);
        }
        //Guardamos el cambio en nuestro modelo
        $proveedor->save();
        return response()->json($proveedor,201);
    }
}
