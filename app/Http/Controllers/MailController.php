<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use  App\mail\newMail;

class MailController extends Controller
{
    public function send(){
       /* Mail::send(['text' => 'emails.appoint'] , ['name' , 'bola'],function($message){
                $message->to('odutusinmoses@gmail.com' , 'To me')->subject('Test Email');
                $message->from('odutusinmoses@gmail.com' , 'Moses');
        });*/
        Mail::send(new newMail());
        if( count(Mail::failures()) > 0 ) {

            return redirect()->back();

         } 
    }
}
