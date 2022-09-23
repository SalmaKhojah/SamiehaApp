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
            'slp_email'=>'alhunof@gmail.com',
            'slp_password'=>'$1$F7gWFFzd$Cl0.i7xtj.n4jw93UCVQp.',
            'F_slp_name'=>'الهنوف',
            'L_slp_name'=>'المعمر',
            'userslp_id'=> '11',
            'work_place'=>'مدينة الأمير سلطان الطبية العسكرية'
            ],

            [  
            'slp_email'=>'nourahkh@gmail.com',
            'slp_password'=>'$1$F7gWFFzd$Cl0.i7xtj.n4jw93UCVQp.',                
            'F_slp_name'=>'نورة',
            'L_slp_name'=>'الخوالد',
            'userslp_id'=> '12',
            'work_place'=>' مستشفى مجمع الدمام الطبي'
            ],

            [
            'slp_email'=>'Abeer@gmail.com',
            'slp_password'=>'$1$F7gWFFzd$Cl0.i7xtj.n4jw93UCVQp.',
            'F_slp_name'=>'عبير',
            'L_slp_name'=>'الحمدي',
            'userslp_id'=> '13',
            'work_place'=>'مدينة الملك فهد الطبية'
            ],

            [
            'slp_email'=>'khaled@gmail.com',
            'slp_password'=>'$1$F7gWFFzd$Cl0.i7xtj.n4jw93UCVQp.',
            'F_slp_name'=>'خالد',
            'L_slp_name'=>'الأحمد',
            'userslp_id'=> '14',
            'work_place'=>'مستشفى قوى الأمن'
            ],

            [ 
            'slp_email'=>'hamza@gmail.com',
            'slp_password'=>'$1$F7gWFFzd$Cl0.i7xtj.n4jw93UCVQp.',
            'F_slp_name'=>'حمزة',
            'L_slp_name'=>'اليوسف',
            'userslp_id'=> '15',   
            'work_place'=>'مستشفى الملك فهد التخصصي بالدمام'
            ],

            [
            'slp_password'=>'$1$F7gWFFzd$Cl0.i7xtj.n4jw93UCVQp.',
            'slp_email'=>'hala@gmail.com',
            'F_slp_name'=>'هلا',
            'L_slp_name'=>'السيد',
            'userslp_id'=> '16',
            'work_place'=>'مستشفى الملك خالد الجامعي'
            ],

            [
            'slp_email'=>'yazeed@gmail.com',
            'slp_password'=>'$1$F7gWFFzd$Cl0.i7xtj.n4jw93UCVQp.',
            'F_slp_name'=>'يزيد',
            'L_slp_name'=>'القحطاني',
            'userslp_id'=> '17',
            'work_place'=>'مستشفى نجران العام'
            ],
            
            [
            'slp_email'=>'Abdullelah@gmail.com',
            'slp_password'=>'$1$F7gWFFzd$Cl0.i7xtj.n4jw93UCVQp.',
            'F_slp_name'=>'عبدالإله',
            'L_slp_name'=>'الثنيان',
            'userslp_id'=> '18',  
            'work_place'=>'مستشفى طريف العام'
        ],

        ]);
        
    }
}

