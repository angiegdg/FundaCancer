<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicamentoinsumonino extends Model
{
    

     protected $table ="medicamentoinsumonino";
     protected $fillable = [
       	'fechaSolicitud' ,'estatus', 'nino_id', 'medicamentoInsumo_id' , 'fechaEntrega'
    ];

     //Desactivar created_at y updated_at 
    public $timestamps = false;



}
