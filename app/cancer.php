<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cancer extends Model
{
    //
    protected $table ="cancer";
     protected $fillable = [
        'tipo', 'descripcion'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
}
