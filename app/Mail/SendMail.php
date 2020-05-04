<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $email;
    public $phone;
    public $fullname;
    public $message;
    public function __construct($email,$phone,$fullname,$message)
    {
        $this->email = $email;
        $this->phone = $phone;
        $this->fullname = $fullname;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_email = $this->email;
        $e_phone = $this->phone;
        $e_fullname = $this->fullname;
        $e_message = $this->message;
        return $this->view("site.site-email.email",compact("e_email","e_phone","e_fullname","e_message"))->subject($e_email);
    }
}
