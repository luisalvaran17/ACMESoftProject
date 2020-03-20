<?php

namespace DSII\Http\Controllers;

use Illuminate\Http\Request;
use DSII\Facturas;
use Illuminate\Support\Facades\Validator;
use JWTAuth;

class facturaController extends Controller
{
    //
    public function index()
    {   
        $checkedAll = true;
        $factura = Facturas::all();
        return view('pages.consultar.ventas')->with('factura', $factura);
        //return response()->json($clientes,201);
    }
}
