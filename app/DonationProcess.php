<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonationProcess extends Model
{
    protected $fillable = [
        'avatar','title','slug','content'
     ];


     public function getAvatarAttribute($avatar)
     {
         return asset($avatar);
     }  
}
