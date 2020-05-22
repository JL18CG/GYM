<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class planes_alimenticio extends Model
{
    protected $fillable = [
        'id_user','nombre','imagen','aprobado'
    ];

}
