<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eligible extends Model
{
    protected $fillable = [
        'title','slug','content'
     ];

     public function getAvatarAttribute($avatar)
     {
         return asset($avatar);
     }  
}
