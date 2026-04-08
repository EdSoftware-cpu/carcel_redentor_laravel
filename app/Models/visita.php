<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    protected $table = 'visitas';
    protected $fillable = ['fecha_hora_inicio_visita', 'fecha_hora_fin_visita', 'prisionero_id','visitante_id','guardia_id'];
    function prisionero(){
        return $this->belongsTo(Prisionero::class);
    }
    function guardia(){
        return $this->belongsTo(Guardia::class);
    }
    function visitante(){
        return $this->belongsTo(Visitante::class);
    }
}
