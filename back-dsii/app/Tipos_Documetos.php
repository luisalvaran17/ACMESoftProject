<?php

namespace DSII;

use Illuminate\Database\Eloquent\Model;

class Tipos_Documetos extends Model
{
    //Nombre de la tabla
    protected $table = 'tipos_documetos';
    //nombre de la llave primaria
    protected $primaryKey = 'id_tipo_documento';

    protected $fillable = [
        'descripcion',
    ];

}
