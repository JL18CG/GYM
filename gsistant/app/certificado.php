<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificado extends Model
{
    
    protected $fillable = [
        'id_user', 'nombre','archivo'
   ];

}
