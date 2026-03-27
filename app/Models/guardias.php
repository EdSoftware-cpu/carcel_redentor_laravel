<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class guardias extends Model
{
    function visitas(){
        return $this->belongsToMany(visitas::class);
    }
}
