<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\notifications\DonorResetPasswordNotification;

class Donor extends Authenticatable
{
    use Notifiable;
    
    use SoftDeletes;

     /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new DonorResetPasswordNotification($token));
    }

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */   
    protected $fillable = [
        'name','email','password','donor'
        
    ];

    protected $dates = ['deleted_at'];

    public function verifyUser(){
        return $this->hasOne('App\VerifyUser');
    }

    public function profile(){
        return $this->hasOne('App\DonorPro');
    }

    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
