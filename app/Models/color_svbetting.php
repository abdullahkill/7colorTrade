<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class color_svbetting extends Model
{
    public  function color(){
        return $this->belongsTo('App\Models\color');
    }
    public  function svbetting(){
        return $this->belongsTo('App\Models\svbetting');
    }
    use HasFactory;
}
