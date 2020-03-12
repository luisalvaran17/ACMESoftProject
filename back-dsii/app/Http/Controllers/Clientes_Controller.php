<?php

namespace DSII\Http\Controllers;

use Illuminate\Http\Request;
use DSII\Clientes;
use Illuminate\Support\Facades\Validator;
use JWTAuth;

class Clientes_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::where('estado', true)->with('tipo_documento:id_tipo_documento,descripcion')->get();
        return response()->json($clientes,201);
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
            'nombre_completo' => 'required|string',
            'direccion' => 'required|string',
            'telefono' => 'required|numeric',
            'documento' => 'required|numeric',            
            'id_tipo_documento' => 'required|numeric|exists:tipos_documetos,id_tipo_documento',            
            'sw_descuento' => 'required|boolean',
        ]);
        if($validator->passes()){
                //Instanciamos la clase
            $cliente = new Clientes;
            //Declaramos el nombre con el nombre enviado en el request
            $cliente->nombre_completo = $request->nombre_completo;
            $cliente->direccion = $request->direccion;
            $cliente->telefono = $request->telefono;
            $cliente->documento = $request->documento;
            $cliente->id_tipo_documento = $request->id_tipo_documento;
            $cliente->sw_descuento = $request->sw_descuento;
            $cliente->estado = true;
            $cliente->id_user = JWTAuth::user()->id_user;
            //Guardamos el cambio en nuestro modelo
            $cliente->save();
            //$cliente->setHidden(['created_at', 'updated_at']);
            return response()->json($cliente,201);
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
        $cliente = Clientes::with('tipo_documento:id_tipo_documento,descripcion')->findOrFail($id);
        return response()->json($cliente,201);
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
            'nombre_completo' => 'required|string',
            'direccion' => 'required|string',
            'telefono' => 'required|numeric',
            'documento' => 'required|numeric',            
            'id_tipo_documento' => 'required|numeric|exists:tipos_documetos,id_tipo_documento',            
            'sw_descuento' => 'required|boolean',
        ]);
        if($validator->passes()){
                //Instanciamos la clase
            $cliente = Clientes::findOrFail($id);
            //Declaramos el nombre con el nombre enviado en el request
            $cliente->nombre_completo = $request->nombre_completo;
            $cliente->direccion = $request->direccion;
            $cliente->telefono = $request->telefono;
            $cliente->documento = $request->documento;
            $cliente->id_tipo_documento = $request->id_tipo_documento;
            $cliente->sw_descuento = $request->sw_descuento;
            //Guardamos el cambio en nuestro modelo
            $cliente->save();
            //$cliente->setHidden(['created_at', 'updated_at']);
            return response()->json($cliente,201);
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
        $cliente = Clientes::findOrFail($id);
        if($cliente->estado == true){
            $cliente->estado = false;
        }else if($cliente->estado == false){
            $cliente->estado = true;
        }else{
            return response()->json("Ha ocurrido un error", 422);
        }
        //Guardamos el cambio en nuestro modelo
        $cliente->save();
        return response()->json($cliente,201);
    }
}
