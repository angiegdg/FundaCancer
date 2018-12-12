<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nino extends Model
{
	//Nombre de la tabla
    protected $table ="nino";
    //Campos de la tabla
    protected $fillable = [
        'nombre', 'apellido','edad','descripcion'
    ];
    //Desactivar created_at y updated_at 
    public $timestamps = false;


}
