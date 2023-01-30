<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailDeRelanceMessageNonLus extends Mailable
{
    use Queueable, SerializesModels;

    public $destinataire;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($destinataire)
    {
        $this->destinataire = $destinataire;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.demande_de_relance_messages_non_lus');
    }
}
