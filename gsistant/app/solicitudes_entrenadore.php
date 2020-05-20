<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solicitudes_entrenadore extends Model
{
    protected $fillable = [
        'id_user','titulo','descripcion'
    ];


}
