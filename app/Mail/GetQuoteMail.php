<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GetQuoteMail extends Mailable
{
    use Queueable, SerializesModels;
    private $ContactDetails;

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
        return $this->subject('Website Property Enquiry')
                    ->view('mails.get_quote')
                    ->with([
                        'ContactDetails' => $this->ContactDetails
                    ]);
    }
}
