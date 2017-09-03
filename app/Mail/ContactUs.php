<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $messageData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($messageData)
    {
        //
        $this->messageData = $messageData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->messageData);
        return $this->from($this->messageData->email)
                    ->to("chris@planetcurran.com")
                    // ->cc("jack.fritz99@gmail.com")
                    ->subject("[SPAC]Contact Request")
                    ->view('emails.contactUs');
    }
}
