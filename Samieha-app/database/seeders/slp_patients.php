<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facads\DB;

class slp_patients extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('slp_patients')->insert([
            [ 
            'patient_id'=>'1',
            'slp_id'=>'1'
            ],
            [ 
            'patient_id'=>'2',
             'slp_id'=>'1'
            ],
            
            [ 
             'patient_id'=>'3',
              'slp_id'=>'2'
            ],
            
            [ 
            'patient_id'=>'4',
            'slp_id'=>'2'
            ],
            [ 
            'patient_id'=>'5',
            'slp_id'=>'3'
            ],

            [ 
            'patient_id'=>'6',
             'slp_id'=>'4'
            ]
            ,
            [ 
            'patient_id'=>'7',
            'slp_id'=>'5'
            ],

            [ 
            'patient_id'=>'8',
             'slp_id'=>'6'
            ] 
            ,

            [ 
            'patient_id'=>'9',
             'slp_id'=>'7'
            ],  
           ]); 
    }
}
