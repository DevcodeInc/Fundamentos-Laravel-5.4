<?php

namespace App\Http\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post(){
        return $this->hasOne('App\Http\Domain\Entities\Post', 'post_id', 'id');
    }
}
