<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variante extends Model
{
    protected $fillable = [
        'sku',
        'imagen_ruta',
        'producto_id'
    ];
    public function producto(){
        return $this->belongsTo(Producto::class);
    }

    public function caracteristicas(){
        return $this->belongsToMany(Caracteristica::class)
        ->withTimestamps();
    }
}
