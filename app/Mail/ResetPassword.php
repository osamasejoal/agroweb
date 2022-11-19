<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;
    public $pin;




    /*
    |--------------------------------------------------------------------------
    |                             __CONSTRUCT METHOD
    |--------------------------------------------------------------------------
    */
    public function __construct($pin)
    {
        $this->pin = $pin;
    }




    /*
    |--------------------------------------------------------------------------
    |                             BUILD METHOD
    |--------------------------------------------------------------------------
    */
    public function build()
    {
        return $this->subject("Reset Password")->markdown('emails.password');
    }
}
