<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    public  function State(){
        return $this->belongsTo('App\Models\State');
    }
    use HasFactory;
}
