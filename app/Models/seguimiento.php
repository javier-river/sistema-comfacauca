<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seguimiento extends Model
{
    use HasFactory;

    //RELACION UNO A MUCHOS CON INSCRIPCIONES (INVERSA)
    public function inscripciones(){
        return $this->belongsTo('App\Models\inscripciones');
    }

    
}
