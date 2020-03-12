<?php

namespace DSII\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Bienvenido a ACMESoft';
        return view('pages.index', compact('title'));
    }
    public function clientes(){
        return view('pages.clientes');
    }
    public function proveedores(){
        return view('pages.proveedores');
    }
    public function venta(){
        return view('pages.venta');
    }
    public function productos(){
        return view('pages.productos');
    }
    public function login(){
        return view('pages.login');
    }
}
