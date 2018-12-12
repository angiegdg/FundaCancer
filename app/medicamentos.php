<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicamentos extends Model
{
    

	protected $table ="medicamentoinsumo";
     protected $fillable = [
       'nombre' , 'descripcion'
    ];

     //Desactivar created_at y updated_at 
    public $timestamps = false;




}
