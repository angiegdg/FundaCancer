<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class representanteNino extends Model
{
    		//Nombre de la tabla
    protected $table ="representantenino";
    //Campos de la tabla
    protected $fillable = [
        	'nino_id', 'users_id' 
    ];		
    //Desactivar created_at y updated_at 
    public $timestamps = false;
}