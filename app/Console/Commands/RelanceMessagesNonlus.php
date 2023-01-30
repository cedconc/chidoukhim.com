<?php

namespace App\Console\Commands;

use App\Http\Controllers\vendor\Chatify\MessagesController;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class RelanceMessagesNonlus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'relance:messagesnonlus';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $message_controller = new MessagesController();
        $message_controller->cron_relance_messages_non_lus();
        Log::info("Comande de relance");

    }
}
