<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_profile extends Model
{
    public  function State(){
        return $this->belongsTo('App\Models\State');
    }
    public  function country(){
        return $this->belongsTo('App\Models\country');
    }
    public  function user(){
        return $this->belongsTo('App\Models\User');
    }
    use HasFactory;
}
