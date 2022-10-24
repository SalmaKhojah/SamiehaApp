<?php

namespace App\Console\Commands;
use App\Mail\NotifyEmail;
use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;
class notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email notify for all user every week';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
       // $user = User::select('email')->get();
        $emails = User::pluck('email')->toArray();
        $data=['title'=> 'progrmming' , 'body' => 'php'];

        foreach($emails as $email){
            Mail:: To($email )->send(new NotifyEmail($data));
        }
    }
}
