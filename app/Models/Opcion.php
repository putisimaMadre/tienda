<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opcion extends Model
{
    protected $fillable = [
        'nombre',
        'type'
    ];

    public function caracteristicas(){
        return $this->hasMany(caracteristica::class);
    }

    public function productos(){
        return $this->belongsToMany(Producto::class)
        ->withPivot('valor')
        ->withTimestamps();
    }
}
