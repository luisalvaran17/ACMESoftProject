<?php

namespace DSII;

use Illuminate\Database\Eloquent\Model;

class Facturas extends Model
{
    //Nombre de la tabla
    protected $table = 'facturas';
    //nombre de la llave primaria
    protected $primaryKey = 'id_factura';

    protected $fillable = [
        'subtotal', 'descuento', 'valor_neto', 'id_cliente', 'id_user',
    ];

    public function cliente(){
        return $this->belongsTo('DSII\Clientes','id_cliente','id_cliente');
    }
}
