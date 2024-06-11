<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DefaultEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $content, $mail_subject, $attachment_path;
    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
       $this->details = $details; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->subject('Contact Message')->view('email.default');
    }
}
