<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class NotifyEmail extends Mailable
{
    use Queueable, SerializesModels;


    public $details;
    public function __construct($data)
    {
        $this -> details= $data;
    }



    public function build()
    {
        $resultp =  DB::select('SELECT session_materials.*, words.* FROM session_materials , words WHERE session_materials.word_id = words.id AND session_id= 2');
        //$paitentName= DB::select('SELECT first_name , last_name FROM patients , session WHERE  id='.$id.' AND patient_id = users_id ');
        return $this->view('Email.slpEmail',compact('resultp'));
    }
}
