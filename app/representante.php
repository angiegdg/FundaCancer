<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class representante extends Model
{
    

		//Nombre de la tabla
    protected $table ="representante";
    //Campos de la tabla
    protected $fillable = [
        	'name',	'apellido', 'email' , 'telefono' , 'password'
    ];
    //Desactivar created_at y updated_at 
    public $timestamps = false;


}
