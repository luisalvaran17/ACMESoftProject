<?php

namespace DSII\Http\Controllers;

use Illuminate\Http\Request;
use DSII\Tipos_Documetos;

class TiposDocumetosController extends Controller
{
    //
    public function getTiposDocumentos(){
        $tipos_documentos = Tipos_Documetos::select('id_tipo_documento', 'descripcion')->get();
        //$tipos_documentos = Tipos_Documetos::findOrFail(6);
        return response()->json($tipos_documentos,201);
    }
}
