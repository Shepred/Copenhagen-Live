<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeleteBooking extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $booking;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $booking)
    {
        $this->user = $user;
        $this->booking = $booking;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Deletion Confirmation: {$this->booking->callsign}")
                    ->markdown('emails.delete');
    }
}

