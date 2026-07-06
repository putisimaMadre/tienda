<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    public function subcategoria(){
        return $this->belongsTo(Subcategoria::class);
    }

    public function variantes(){
        return $this->hasMany(Variante::class);
    }

    public function opciones(){
        return $this->belongsToMany(Opcion::class)
        ->withPivot('valor')
        ->withTimestamps();
    }
}
