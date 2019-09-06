<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonorStatus extends Model
{
    protected $fillable = [
       'status'
    ];

    public function donorpro(){
        return $this->belongsToMany('App\DonorPro');
    }

    public function record(){
        return $this->belongsToMany('App\DonationRecord');
    }
}
