<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function city(){
        return $this->hasMany('App\Models\city');
    }
    public function user_profile(){
        return $this->hasMany('App\Models\user_profile');
    }
    use HasFactory;
}
