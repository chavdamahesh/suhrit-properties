<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class sendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var \App\Http\Models\Registration
     */

    public $propertyDetails;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($propertyDetails)
    {
        $this->propertyDetails = $propertyDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Registration Successfull')
                    ->view('mails.register_quote')
                    ->with([
                        'propertyDetails' => $this->propertyDetails
                    ]);
    }
}
