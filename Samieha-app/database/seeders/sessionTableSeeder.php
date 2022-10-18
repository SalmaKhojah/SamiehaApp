<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facads\DB;

class sessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

     \DB::table('session')->insert([
        [
          'patient_id'=>'2',
          'slp_id'=>'11',
          'time_limit' =>'10'
        ],

        [
            'patient_id'=>'3',
            'slp_id'=>'12',
            'time_limit' =>'20'
          ],

          [
            'patient_id'=>'3',
            'slp_id'=>'13',
            'time_limit' =>'50'
          ],

          [
            'patient_id'=>'4',
            'slp_id'=>'14',
            'time_limit' =>'40'
          ],

          [
            'patient_id'=>'5',
            'slp_id'=>'11',
            'time_limit' =>'20'
          ],


      
     ]);

        
    }
}
