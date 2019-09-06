<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodGroup extends Model
{
    protected $fillable = [
       'blood_group','price'
    ];

    public function stock(){
        return $this->belongsToMany('App\BloodStock');
    }

    public function order(){
        return $this->belongsToMany('App\Order');
    }

    public function record(){
        return $this->belongsToMany('App\DonationRecord');
    }

    public function donorpro(){
        return $this->belongsToMany('App\DonorPro');
    }
}
