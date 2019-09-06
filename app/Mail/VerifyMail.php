<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Donor;

class VerifyMail extends Mailable
{
    use Queueable, SerializesModels;
    public $donor;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->donor = $donor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.verifyUser');
    }
}
