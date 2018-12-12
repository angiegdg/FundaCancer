<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ciudad extends Model
{
   
   //
     protected $table ="ciudad";
     protected $fillable = [
        'nombre'
    ];

     //Desactivar created_at y updated_at 
    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */






}
