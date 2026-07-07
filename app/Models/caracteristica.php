<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    protected $fillable = [
        'valor',
        'descripcion',
        'opcion_id'
    ];

    public function opcion(){
        return $this->belongsTo(Opcion::class);
    }

    public function variantes(){
        return $this->belongsToMany(Variante::class)
        ->withTimestamps();
    }
}
