<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;

    //RELACION UNO A MUCHOS CON DOCUMENTOS (INVERSA)
    public function user(){
        return $this->belongsTo('App\Models\documentos');
    }

    //RELACION UNO A MUCHOS CON USERS (INVERSA)
    public function inscripciones(){
        return $this->belongsTo('App\Models\inscripciones');
    }
}
