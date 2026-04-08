<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guardia extends Model
{
    protected $table = 'guardias';
    protected $fillable = [
        'nombre_guardia',
        'numero_identificacion',
        'fecha_hora_login',
        'fecha_hora_logout'
    ];
    function visitas(){
        return $this->belongsToMany(Visita::class);
    }
}
