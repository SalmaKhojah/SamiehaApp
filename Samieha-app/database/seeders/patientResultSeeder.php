<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facads\DB;

class patientResultSeeder extends Seeder
{
   
    public function run()
    {
        \DB::table('results')->insert(

            [
                [
                    'session_id'=>'1',
                    'patient_id'=> '3',
                'correct_answer'=>'1',
                'incorrect_answer'=>'2',
                'cues_reached'=>'التلميح الثالث',
                'patient_record'=>'patient_record',
                
                ],
                
                [
                    'session_id'=>'2',
                    'patient_id'=> '3',
                    'correct_answer'=>'3',
                    'incorrect_answer'=>'0',
                    'cues_reached'=>'التلميح الاول',
                    'patient_record'=>'patient_record',
                    
                    ],
    
                    [
                        'session_id'=>'3',
                        'patient_id'=> '2',
                        'correct_answer'=>'2',
                        'incorrect_answer'=>'2',
                        'cues_reached'=>'التلميح الثاني',
                        'patient_record'=>'patient_record',
                        
                        ]
            ]
        
          );
    }
}
