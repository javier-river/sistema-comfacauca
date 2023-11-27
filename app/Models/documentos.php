<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documentos extends Model
{
    use HasFactory;

    //RELACION UNO A MUCHOS CON USERS (INVERSA)
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    
     //RELACION UNO A MUCHOS CON PERSONA
     public function persona() {
        return $this->hasMany('App\Models\persona');
    }
}
