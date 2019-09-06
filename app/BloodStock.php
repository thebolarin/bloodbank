<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodStock extends Model
{
    protected $fillable = [
        'donor_name','blood_id'
    ];

    public function blood(){ 

        return $this->belongsTo('App\BloodGroup');
    }
}
