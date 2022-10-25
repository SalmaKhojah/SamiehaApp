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
        $resultp =  DB::select('SELECT session_material.*, words.* FROM session_material , words WHERE session_material.word_id = words.id ');

        return $this->view('Email.slpEmail',compact('resultp'));
    }
}
