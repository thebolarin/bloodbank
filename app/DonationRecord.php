<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonationRecord extends Model
{
    protected $fillable = [
       'name','blood_id','status_id','date','time'
    ];

    

    public function blood(){ 
        return $this->belongsTo('App\BloodGroup');
    }

    public function status(){ 
        return $this->belongsTo('App\DonorStatus');
    }
}
