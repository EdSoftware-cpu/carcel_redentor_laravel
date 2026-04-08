<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prisionero extends Model
{
    protected $table ='prisioneros';
    protected $fillable = [
        'nombre_prisionero', 
        'fecha_nacimiento', 
        'fecha_ingreso', 
        'delito_cometido', 
        'celda_asignada'];
    function visitas(){
        return $this->belongsToMany(Visita::class);
    }
}
