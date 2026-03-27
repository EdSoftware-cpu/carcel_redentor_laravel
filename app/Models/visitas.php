<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class visitas extends Model
{
    function prisionero(){
        return $this->belongsTo(prisioneros::class);
    }
    function guardia(){
        return $this->belongsTo(guardias::class);
    }
    function visitante(){
        return $this->belongsTo(vistantes::class);
    }
}
