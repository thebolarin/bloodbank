<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonorPro extends Model
{
    protected $fillable = [
        'avatar','donor_id','gender','contact_number','address','blood_id','status_id'
     ];
 
     public function donor(){
         return $this->belongsTo('App\Donor');
     }

     public function blood(){
        return $this->hasOne('App\BloodGroup');
    }

    public function status(){
        return $this->hasOne('App\DonorStatus');
    }

    public function getAvatarAttribute($avatar)
    {
        return asset($avatar);
    }  
}
