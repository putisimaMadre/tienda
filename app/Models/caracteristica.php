<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    //
    public function opcion(){
        return $this->belongsTo(Opcion::class);
    }

    public function variantes(){
        return $this->belongsToMany(Variante::class)
        ->withTimestamps();
    }
}
