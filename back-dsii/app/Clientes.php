<?php

namespace DSII;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //Nombre de la tabla
    protected $table = 'clientes';
    //nombre de la llave primaria
    protected $primaryKey = 'id_cliente';

    protected $fillable = [
        'nombre_completo', 'direccion', 'telefono', 'documento', 'sw_descuento', 'estado', 'id_tipo_documento'
    ];

    public function tipo_documento(){
        return $this->belongsTo('DSII\Tipos_Documetos','id_tipo_documento','id_tipo_documento');
    }

}
