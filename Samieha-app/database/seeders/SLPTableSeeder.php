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
        DB::table('speech_and_language_pathologist')->insert([
            ['work_place'=>'مدينة الأمير سلطان الطبية العسكرية'],
            ['work_place'=>' مستشفى مجمع الدمام الطبي'],
            ['work_place'=>'مدينة الملك فهد الطبية'],
            ['work_place'=>'مستشفى قوى الأمن'],
            ['work_place'=>'مستشفى الملك فهد التخصصي بالدمام'],
            ['work_place'=>'مستشفى الملك خالد الجامعي'],
            ['work_place'=>'مستشفى نجران العام'],
            ['work_place'=>'ستشفى طريف العام'],
        ]);
        
    }
}
