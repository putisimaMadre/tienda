<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //Relacion 1:M inversa
    public function familia(){
        return $this->belongsTo(Familia::class);
    }

    public function subCategorias(){
        return $this->hasMany(Subcategoria::class);
    }
}
