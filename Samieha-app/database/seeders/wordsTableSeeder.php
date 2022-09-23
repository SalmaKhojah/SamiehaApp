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
        \DB::table('words')->insert(
            [
                [
                    'subcategory_id'=>'1',
                    'word'=>'سرير',
                    'image'=> 'img/nouns/furniture/bed.jpg',
                    //semantic cue
                    'cue1'=>'تستلقي عليه عندما تخلد للنوم',
                    //sentence completion
                    'cue2'=>'أنت تنام على ....',
                    //first sound 
                    'cue3'=>'',
                    //first syllable 
                    'cue4'=>'',
                    //first letter (written only)
                    'cue5'=>'س',
                    // written word (written only) 
                    'cue6'=>'سرير',
                    //spoken word(modeling) 
                    'cue7'=>'',

                ],

                [
                    'subcategory_id'=>'1',
                    'word'=>'طاولة',
                    'image'=> 'img/nouns/furniture/table.jpg',
                    'cue1'=>'توضع عليه الأطباق',
                    'cue2'=>'أنت تأكل على ...',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'ط',
                    'cue6'=>'طا',
                    'cue7'=>'',

                ],

                [
                    'subcategory_id'=>'1',
                    'word'=>'كرسي',
                    'image'=> 'img/nouns/furniture/chair.jpg',
                    'cue1'=>'يصنع من الخشب',
                    'cue2'=>'أنت تجلس على ...',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'ك',
                    'cue6'=>'ك',
                    'cue7'=>'',

                ],


                [
                    'subcategory_id'=>'2',
                    'word'=>'برتقال',
                    'image'=> 'img/nouns/fruits/orange.jpg',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'ب',
                    'cue6'=>'ب',
                    'cue7'=>'',

                ],


                [
                    'subcategory_id'=>'2',
                    'word'=>'تفاح',
                    'image'=> 'img/nouns/fruits/apple.jpg',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'ت',
                    'cue6'=>'ت',
                    'cue7'=>'',

                ],


                [
                    'subcategory_id'=>'2',
                    'word'=>'موز',
                    'image'=> 'img/nouns/fruits/banana.jpg',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'',
                    'cue4'=>'',
                    'cue5'=>'م',
                    'cue6'=>'مو',
                    'cue7'=>'',

                ],

                [
                    'subcategory_id'=>'3',
                    'word'=>'فستان',
                    'image'=> 'img/nouns/Clothes/dress.jpg',
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
                    'image'=> 'img/nouns/Clothes/pants.jpg',
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
                    'image'=> 'img/nouns/Clothes/coat.jpg',
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
                    'image'=> 'img/verbs/movement/run.png',
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
                    'image'=> 'img/verbs/movement/walk.jpg',
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
                    'image'=> 'img/verbs/movement/crawling.jpg',
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
                    'image'=> 'img/verbs/Farming/Planting.jpeg',
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
                    'image'=> 'img/verbs/Farming/plough.jpg',
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
                    'image'=> 'img/verbs/Farming/reaped.png',
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
                    'image'=> 'img/verbs/sports/kicks.jpeg',
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
                    'image'=> 'img/verbs/sports/throws.jpg',
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
                    'image'=> 'img/verbs/sports/shoot the goal.jpg',
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
                    'image'=> 'img/adjectives/feelings/happy.jpg',
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
                    'image'=> 'img/adjectives/feelings/happy.jpg',
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
                    'image'=> 'img/adjectives/feelings/Worry.jpg',
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
                    'image'=> 'img/adjectives/Sizes/big.jpg',
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
                    'image'=> 'img/adjectives/Sizes/tall.jpg',
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
                    'image'=> 'img/adjectives/Sizes/tall.jpg',
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
