<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    
    public  function color_svbetting(){
        return $this->hasMany('App\Models\color_svbetting');
    }


    public  function bet_color(){
        return $this->hasMany('App\Models\bet_color');
    }
    use HasFactory;
}
