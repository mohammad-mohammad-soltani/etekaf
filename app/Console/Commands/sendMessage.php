<?php

namespace App\Console\Commands;

use App\Models\EtekafUsers;
use App\Services\SMS;
use Illuminate\Console\Command;

class sendMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-message {from} {to} ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $from = $this->argument('from');
        $to = $this->argument('to');
        $user = EtekafUsers::where('id' , '>' , $from)->where('id' , '<=' , $to);
        foreach ($user->get() as $user) {
            $this -> info( SMS::send_success($user -> phone_number , $user -> location , $user -> track_id));
        }
    }
}
