<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;
    public $ContactDetails;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ContactDetails)
    {
        $this->ContactDetails = $ContactDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Enquiry')
                    ->view('mails.contact_us')
                    ->with([
                        'ContactDetails' => $this->ContactDetails
                    ]);
    }
}
