<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
      'name','hospital','mobile','email','blood_id','quantity','date','time'
    ];
    public function blood(){ 

      return $this->belongsTo('App\BloodGroup');
  }
}
