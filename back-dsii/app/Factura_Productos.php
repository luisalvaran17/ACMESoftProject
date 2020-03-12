<?php

namespace DSII;

use Illuminate\Database\Eloquent\Model;

class Factura_Productos extends Model
{
    //Nombre de la tabla
    protected $table = 'factura_productos';
    //nombre de la llave primaria
    protected $primaryKey = 'id_factura_producto';

    protected $fillable = [
        'cantidad', 'precio_venta', 'id_producto', 'id_factura', 'id_user',
    ];

    public function producto(){
        return $this->belongsTo('DSII\Productos','id_producto','id_producto');
    }

    public function factura(){
        return $this->belongsTo('DSII\Facturas','id_factura','id_factura');
    }
}
