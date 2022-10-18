<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facads\DB;

class SLPTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('slps')->insert([
            [
            'F_slp_name'=>'الهنوف',
            'L_slp_name'=>'المعمر',
            'users_id'=> '11',
            'work_place'=>'مدينة الأمير سلطان الطبية العسكرية'
            ],

            [                 
            'F_slp_name'=>'نورة',
            'L_slp_name'=>'الخوالد',
            'users_id'=> '12',
            'work_place'=>' مستشفى مجمع الدمام الطبي'
            ],

            [
            'F_slp_name'=>'عبير',
            'L_slp_name'=>'الحمدي',
            'users_id'=> '13',
            'work_place'=>'مدينة الملك فهد الطبية'
            ],

            [
            'F_slp_name'=>'خالد',
            'L_slp_name'=>'الأحمد',
            'users_id'=> '14',
            'work_place'=>'مستشفى قوى الأمن'
            ],

            [ 
            'F_slp_name'=>'حمزة',
            'L_slp_name'=>'اليوسف',
            'users_id'=> '15',   
            'work_place'=>'مستشفى الملك فهد التخصصي بالدمام'
            ],

            [
            'F_slp_name'=>'هلا',
            'L_slp_name'=>'السيد',
            'users_id'=> '16',
            'work_place'=>'مستشفى الملك خالد الجامعي'
            ],

            [
            'F_slp_name'=>'يزيد',
            'L_slp_name'=>'القحطاني',
            'users_id'=> '17',
            'work_place'=>'مستشفى نجران العام'
            ],
            
            [
            'F_slp_name'=>'عبدالإله',
            'L_slp_name'=>'الثنيان',
            'users_id'=> '18',  
            'work_place'=>'مستشفى طريف العام'
        ],

        ]);
        
    }
}

