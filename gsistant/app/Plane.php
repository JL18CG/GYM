<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    protected $fillable = [
        'id_user','nombre','imagen','aprobado'
    ];
}
