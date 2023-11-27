<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inscripciones extends Model
{
    use HasFactory;

     //RELACION UNO A MUCHOS CON PERSONA
     public function persona() {
        return $this->hasMany('App\Models\persona');
    }

    //RELACION UNO A MUCHOS CON ESTADO  
    public function estados() {
        return $this->hasMany('App\Models\estado');
    }

    //RELACION UNO A MUCHOS CON SEGUIMIENTO  
    public function seguimientos() {
        return $this->hasMany('App\Models\seguimiento');
    }

    //RELACION UNO A MUCHOS CON SEDE  
    public function sedes() {
        return $this->hasMany('App\Models\sede');
    }

    //RELACION UNO A MUCHOS CON PROGRAMA  
    public function programa() {
        return $this->hasMany('App\Models\programa');
    }

    
}
