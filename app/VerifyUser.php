<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifyUser extends Model
{
    protected $guarded = [];

    public function donor()
    {
        return $this->belongsTo('App\Donor', 'donor_id');
    }
}
