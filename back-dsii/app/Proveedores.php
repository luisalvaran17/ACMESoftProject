<?php

namespace DSII;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    //Nombre de la tabla
    protected $table = 'proveedores';
    //nombre de la llave primaria
    protected $primaryKey = 'id_proveedor';

    protected $fillable = [
        'nombre_proveedor', 'direccion', 'telefono', 'estado', 'id_user',
    ];
}
