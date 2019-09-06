<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
       'avatar','title','slug','content'
    ];

    public function getAvatarAttribute($avatar)
    {
        return asset($avatar);
    }  
}
