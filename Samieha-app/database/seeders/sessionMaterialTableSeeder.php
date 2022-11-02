<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facads\DB;

class sessionMaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('session_materials')->insert(

        [
            [
            'session_id'=>'1',
            'trial_id'=>'2',
            'word_id'=>'1',
            'patient_record'=>'patient_record',
            'check_answer'=>'check_answer',
            'used_cues'=>'5'
            ],
            
            [
            'session_id'=>'2',
            'trial_id'=>'3',
            'word_id'=>'2',
            'patient_record'=>'patient_record',
            'check_answer'=>'خاطئة',
            'used_cues'=>'5'
            ],

            [
            'session_id'=>'3',
            'trial_id'=>'4',
            'word_id'=>'3',
            'patient_record'=>'audio/AudioChair.MP3',
            'check_answer'=>'صحيحة',
            'used_cues'=>'5'
                ],
        
                [
                    'session_id'=>'4',
                    'trial_id'=>'7',
                    'word_id'=>'3',
                    'patient_record'=>'patient_record',
                    'check_answer'=>'check_answer',
                    'used_cues'=>'5'
                    ]
        ]
    
      );    
    


    }
}
