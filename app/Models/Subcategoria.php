<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subcategoria extends Model
{
    //
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function productos(){
        return $this->hasMany(Producto::class);
    }
}
