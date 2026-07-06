<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    //Relacion 1:M
    public function categorias(){
        return $this->hasMany(Categoria::class);
    }
}
