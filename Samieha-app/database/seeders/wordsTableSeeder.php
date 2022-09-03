<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facads\DB;

class wordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('words')->insert(
            [
                [
                    'subcategory_id'=>'1',
                    'word'=>'سرير',
                    'image'=> '',
                    //نطق أول حرف
                    'cue1'=>'',
                    //نطق أول مقطع
                    'cue2'=>'',
                    //كتابة أول حرف
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    //كتابة الكلمة
                    'cue6'=>'',
                    //نطق الكلمة
                    'cue7'=>'',

                ],

                [
                    'subcategory_id'=>'1',
                    'word'=>'طاولة',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],

                [
                    'subcategory_id'=>'1',
                    'word'=>'كرسي',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],


                [
                    'subcategory_id'=>'2',
                    'word'=>'برتقال',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],


                [
                    'subcategory_id'=>'2',
                    'word'=>'تفاح',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],


                [
                    'subcategory_id'=>'2',
                    'word'=>'موز',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],

                [
                    'subcategory_id'=>'3',
                    'word'=>'فستان',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],

                [
                    'subcategory_id'=>'3',
                    'word'=>'بنطال',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],

                [
                    'subcategory_id'=>'3',
                    'word'=>'معطف',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],
                [
                    'subcategory_id'=>'4',
                    'word'=>'يركض',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],
                [
                    'subcategory_id'=>'4',
                    'word'=>'يمشي',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],
                [
                    'subcategory_id'=>'4',
                    'word'=>'يحبو',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],
                [
                    'subcategory_id'=>'5',
                    'word'=>'يزرع',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],
                [
                    'subcategory_id'=>'5',
                    'word'=>'يحرث',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],
                [
                    'subcategory_id'=>'5',
                    'word'=>'يحصد',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],

                [
                    'subcategory_id'=>'6',
                    'word'=>'يركل',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],
                [
                    'subcategory_id'=>'6',
                    'word'=>'يرمي',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],
                [
                    'subcategory_id'=>'6',
                    'word'=>'يسدد',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],

                [
                    'subcategory_id'=>'7',
                    'word'=>'حزين',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],
                [
                    'subcategory_id'=>'7',
                    'word'=>'سعيد',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],
                [
                    'subcategory_id'=>'7',
                    'word'=>'قلق',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],

                [
                    'subcategory_id'=>'8',
                    'word'=>'كبير',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],
                [
                    'subcategory_id'=>'8',
                    'word'=>'طويل',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],
                [
                    'subcategory_id'=>'8',
                    'word'=>'قصير',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],
                [
                    'subcategory_id'=>'9',
                    'word'=>'خشن',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],
                [
                    'subcategory_id'=>'9',
                    'word'=>'ناعم',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],
                [
                    'subcategory_id'=>'9',
                    'word'=>'منتظم',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'',
                    'cue6'=>'',
                    'cue7'=>'',

                ],
            ]
        );
    }

}
