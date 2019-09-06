<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'avatar','title','slug','content'
     ];

     public function getAvatarAttribute($avatar)
     {
         return asset($avatar);
     }  
}
