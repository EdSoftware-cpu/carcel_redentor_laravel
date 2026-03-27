<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vistantes extends Model
{
    function visitas(){
        return $this->belongsToMany(visitas::class);
    }
}
