<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Notifications\emailResult;
use Illuminate\Support\Facades\Notification;
use App\Models\session_material;
use Carbon\Carbon;

class emailResultcommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'results:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send wekly session results to slp';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()

    {
         //get the date befor 7 days
    $date = Carbon::now()->subDays(7); 

    // get the sessions that were made in the past 7 days
    $session_materia = session_material::select('session_id','trial_id')->where('created_at', '>=', $date)->distinct()->get();

   // get info for each session and send to slp by email
    foreach ($session_materia as $material) {
        $slp= $material->session->slp;

        $wordsTotal=session_material::where('session_id', '=', $material->session_id)->where('trial_id', '=', $material->trial_id)->count();
        $correct=session_material::where('session_id', '=', $material->session_id)->where('trial_id', '=', $material->trial_id)->where('check_answer', '=', 'صحيحة')->count();
        $incorrect=  $wordsTotal- $correct;
        $data=[
            'slp_name'=> $material->session->slp->name,
            'p_name'=> $material->session->patient->name,
            'session_id'=> $material->session_id,
            'trial_id'=> $material->trial_id,
            'wordsTotal'=>$wordsTotal,
            'correct'=>$correct,
            'incorrect'=>$incorrect,

        ];

        //send by email
        $slp->notify(new emailResult($data));

    }


        return 0;
    }
}
