<?php

namespace DSII;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    //Nombre de la tabla
    protected $table = 'productos';
    //nombre de la llave primaria
    protected $primaryKey = 'id_producto';

    protected $fillable = [
        'nombre_producto', 'descripcion', 'precio_compra', 'precio_venta', 'cantidad_existencia', 'estado', 'id_proveedor', 'id_user',
    ];

    public function proveedor(){
        return $this->belongsTo('DSII\Proveedores','id_proveedor','id_proveedor');
    }
}
