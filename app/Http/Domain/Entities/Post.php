<?php

namespace App\Http\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments(){
        return $this->hasMany('App\Http\Domain\Entities\Comment');
    }

    public function ratings(){
        return $this->hasMany('App\Http\Domain\Entities\Rating');
    }

    public function user(){
        return $this->hasOne('App\Http\Domain\Entities\User');
    }
}
