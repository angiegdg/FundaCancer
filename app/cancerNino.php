<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cancerNino extends Model
{

 protected $table ="cancernino";
     protected $fillable = [
       
       'nino_id' , 'cancer_id' 
    ];

     //Desactivar created_at y updated_at 
    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


}
