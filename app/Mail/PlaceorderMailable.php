<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PlaceorderMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $order_data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order_data)
    {
        //
        $this->$order_data = $order_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


      $from_name = "The Pc Builder";
     $from_email = "youremail@gmail.com";
     $subject = "The Pc Builder: Thank You For Purchasing";
     return $this->from($from_email, $from_name)
         ->view('emails.order')
         ->subject($subject)
     ;
    }
}
