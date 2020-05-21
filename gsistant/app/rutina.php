<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rutina extends Model
{
    protected $fillable = [
        'id_user','nombre','imagen','aprobado'
        
        ];
}
