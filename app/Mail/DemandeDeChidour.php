<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemandeDeChidour extends Mailable
{
    use Queueable, SerializesModels;

    public $origine;
    public $cible;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $origine, User $cible)
    {
        $this->origine = $origine;
        $this->cible = $cible;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.demande_de_chidour');
    }
}
