<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facads\DB;
use Carbon\Carbon;

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
            'session_id'=>'3',
            'trial_id'=>'2',
            'word_id'=>'1',
            'patient_record'=>'patient_record',
            'check_answer'=>'خاطئة',
            'included_cues'=>'1,2,3,4,5',
            'used_cues'=>'الكلمة مكتوبة',
                   'created_at' => Carbon::now(),
           ],
            
            [
            'session_id'=>'2',
            'trial_id'=>'3',
            'word_id'=>'2',
            'patient_record'=>'patient_record',
            'check_answer'=>'خاطئة',
            'included_cues'=>'1,2,3,4,5',
            'used_cues'=>'صوت الحرف الأول',
                    'created_at' => Carbon::now(),

            ],

            [
            'session_id'=>'3',
            'trial_id'=>'4',
            'word_id'=>'3',
            'patient_record'=>'audio/AudioChair.MP3',
            'check_answer'=>'صحيحة',
            'included_cues'=>'1,2,7',
            'used_cues'=>'إتمام الجملة',
                    'created_at' => Carbon::now(),
              ],
        
                [
                    'session_id'=>'4',
                    'trial_id'=>'7',
                    'word_id'=>'3',
                    'patient_record'=>'patient_record',
                    'check_answer'=>'check_answer',
                    'included_cues'=>'1,2,3,7',
                    'used_cues'=>'الكلمة نطقا',
           'created_at' => Carbon::now(),
             ],
                    [
                      'session_id'=>'5',
                      'trial_id'=>'7',
                      'word_id'=>'10',
                      'patient_record'=>'patient_record',
                      'check_answer'=>'check_answer',
                      'included_cues'=>'1,6,7',
                      'used_cues'=>'الكلمة نطقا',
           'created_at' => Carbon::now(),
                 ],
                    [
                      'session_id'=>'1',
                      'trial_id'=>'7',
                      'word_id'=>'3',
                      'patient_record'=>'patient_record',
                      'check_answer'=>'check_answer',
                      'included_cues'=>'1,2,3,4,5',
                      'used_cues'=>'الكلمة نطقا',
           'created_at' => Carbon::now(),
                   ],
                      [
                        'session_id'=>'1',
                        'trial_id'=>'7',
                        'word_id'=>'1',
                        'patient_record'=>'patient_record',
                        'check_answer'=>'check_answer',
                        'included_cues'=>'1,3,4,5',
                        'used_cues'=>'الكلمة نطقا',
          'created_at' => Carbon::now(),
                     ]
        ]
    
      );    
    


    }
}
