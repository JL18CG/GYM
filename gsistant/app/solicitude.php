<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitude extends Model
{
    protected $fillable = [
        'id_user','titulo','descripcion','id_rutina'
    ];

}
