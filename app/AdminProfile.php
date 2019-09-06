<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminProfile extends Model
{
    protected $fillable = [
        'user_id','avatar'
    ];
    
    public function user(){
        
        return $this->belongsTo('App\User');
    }

    public function getAvatarAttribute($avatar)
    {
        return asset($avatar);
    }  
    

    
}
