<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $qrCode;
    private $property;
    public function __construct($qrCode,$property)
    {
        $this->qrCode=$qrCode;
        $this->property=$property;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    
        return $this->view('mails.qr')
        ->with(['qrCode' => $this->qrCode,'property'=>$this->property])
            // ->attachData($qrCode, 'qrcode.png', [
                
            //     'mime' => 'image/png',
            // ])
            ;
    }
}
