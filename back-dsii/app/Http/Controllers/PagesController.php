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
        return view('pages.consultar.clientes');
    }
    public function proveedores(){
        return view('pages.registrar.proveedores');
    }
    public function venta(){
        return view('pages.registrar.ventas');
    }
    public function productos(){
        return view('pages.registrar.productos');
    }
    public function login(){
        return view('pages.login');
    }
    public function registrarClientes(){
        return view('pages.registrar.registrarClientes');
    }
    public function consultarProveedores(){
        return view('pages.consultar.proveedores');
    }
    public function consultarVentas(){
        return view('pages.consultar.ventas');
    }
    public function consultarProductos(){
        return view('pages.consultar.productos');
    }
}
