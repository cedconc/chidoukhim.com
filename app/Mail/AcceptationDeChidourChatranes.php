<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AcceptationDeChidourChatranes extends Mailable
{
    use Queueable, SerializesModels;

    public $cible;
    public $origine;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $cible, User $origine)
    {
        $this->cible = $cible;
        $this->origine = $origine;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.acceptation_de_chidour_chatranes');
    }
}
