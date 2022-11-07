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
                    'cue3'=>'audio/bedfirstsound.MP3',
                    //first syllable 
                    'cue4'=>'audio/bedfirstsound.MP3',
                    //first letter (written only)
                    'cue5'=>'س',
                    // written word (written only) 
                    'cue6'=>'سرير',
                    //spoken word(modeling) 
                    'cue7'=>'audio/bedspokenword.MP3',

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
                    'cue6'=>'طاولة',
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
                    'cue6'=>'كرسي',
                    'cue7'=>'audio/AudioChair.MP3',

                ],


                [
                    'subcategory_id'=>'2',
                    'word'=>'برتقال',
                    'image'=> 'img/nouns/fruits/orange.jpg',
                    'cue1'=>'طعمه حامض ولونه برتقالي',
                    'cue2'=>'أنت تشرب عصير ',
                    'cue3'=>'audio/B_sound.MP3',
                    'cue4'=>'audio/Br_sound.MP3',
                    'cue5'=>'ب',
                    'cue6'=>'برتقال',
                    'cue7'=>'audio/Bortoqal_sound.MP3',

                ],


                [
                    'subcategory_id'=>'2',
                    'word'=>'تفاح',
                    'image'=> 'img/nouns/fruits/apple.jpg',
                    'cue1'=>'طعمه حلو وله عدة ألوان ',
                    'cue2'=>'أنت تأكل',
                    'cue3'=>'audio/T_SOUND.MP3',
                    'cue4'=>'audio/TOF_SOUND.MP3',
                    'cue5'=>'ت',
                    'cue6'=>'تفاح',
                    'cue7'=>'audio/Tofah_sound.MP3',

                ],


                [
                    'subcategory_id'=>'2',
                    'word'=>'موز',
                    'image'=> 'img/nouns/fruits/banana.jpg',
                    'cue1'=>'لونه أصفر على شكل هلال',
                    'cue2'=>'أنت تأكل',
                    'cue3'=>'audio/Ma_sound.MP3',
                    'cue4'=>'audio/Mao_sound.MP3',
                    'cue5'=>'م',
                    'cue6'=>'موز',
                    'cue7'=>'audio/Maouz_sound.MP3',

                ],

                [
                    'subcategory_id'=>'3',
                    'word'=>'فستان',
                    'image'=> 'img/nouns/Clothes/dress.jpg',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/Fa_sound.MP3',
                    'cue4'=>'audio/Fos_sound.MP3',
                    'cue5'=>'ف',
                    'cue6'=>'فستان',
                    'cue7'=>'audio/Fostan_sound.MP3',

                ],

                [
                    'subcategory_id'=>'3',
                    'word'=>'بنطال',
                    'image'=> 'img/nouns/Clothes/pants.jpg',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/B_sound.MP3',
                    'cue4'=>'audio/Ben_sound.MP3',
                    'cue5'=>'ب',
                    'cue6'=>'بنطال',
                    'cue7'=>'audio/Bental_sound.MP3',

                ],

                [
                    'subcategory_id'=>'3',
                    'word'=>'معطف',
                    'image'=> 'img/nouns/Clothes/coat.jpg',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/Ma_sound.MP3',
                    'cue4'=>'audio/Mea_sound.MP3',
                    'cue5'=>'م',
                    'cue6'=>'معطف',
                    'cue7'=>'audio/Meatf_sound.MP3',

                ],
                [
                    'subcategory_id'=>'4',
                    'word'=>'يركض',
                    'image'=> 'img/verbs/movement/run.png',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/Ya_sound.MP3',
                    'cue4'=>'audio/Yar_sound.MP3',
                    'cue5'=>'ي',
                    'cue6'=>'يركض',
                    'cue7'=>'audio/Yarkod_sound.MP3',

                ],
                [
                    'subcategory_id'=>'4',
                    'word'=>'يمشي',
                    'image'=> 'img/verbs/movement/walk.jpg',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/Ya_sound.MP3',
                    'cue4'=>'audio/Yam_sound.MP3',
                    'cue5'=>'ي',
                    'cue6'=>'يمشي',
                    'cue7'=>'audio/Yamshi_sound.MP3',

                ],
                [
                    'subcategory_id'=>'4',
                    'word'=>'يحبو',
                    'image'=> 'img/verbs/movement/crawling.jpg',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/Ya_sound.MP3',
                    'cue4'=>'audio/Yah_sound.MP3',
                    'cue5'=>'ي',
                    'cue6'=>'يحبو',
                    'cue7'=>'audio/Yahbo_sound.MP3',

                ],
                [
                    'subcategory_id'=>'5',
                    'word'=>'يزرع',
                    'image'=> 'img/verbs/Farming/Planting.jpeg',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/Ya_sound.MP3',
                    'cue4'=>'audio/Yaz_sound.MP3',
                    'cue5'=>'ي',
                    'cue6'=>'يزرع',
                    'cue7'=>'audio/Yazrah_sound.MP3',

                ],
                [
                    'subcategory_id'=>'5',
                    'word'=>'يحرث',
                    'image'=> 'img/verbs/Farming/plough.jpg',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/Ya_sound.MP3',
                    'cue4'=>'audio/Yah_sound.MP3',
                    'cue5'=>'ي',
                    'cue6'=>'يحرث',
                    'cue7'=>'audio/Yahroth_sound.MP3',

                ],
                [
                    'subcategory_id'=>'5',
                    'word'=>'يحصد',
                    'image'=> 'img/verbs/Farming/reaped.png',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/Ya_sound.MP3',
                    'cue4'=>'audio/Yah_sound.MP3',
                    'cue5'=>'ي',
                    'cue6'=>'يحصد',
                    'cue7'=>'audio/Yahsed_sound.MP3',

                ],

                [
                    'subcategory_id'=>'6',
                    'word'=>'يركل',
                    'image'=> 'img/verbs/sports/kicks.jpeg',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/Ya_sound.MP3',
                    'cue4'=>'audio/Yar_sound.MP3',
                    'cue5'=>'ي',
                    'cue6'=>'يركل',
                    'cue7'=>'audio/Yarkol_sound.MP3',

                ],
                [
                    'subcategory_id'=>'6',
                    'word'=>'يرمي',
                    'image'=> 'img/verbs/sports/throws.jpg',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/Ya_sound.MP3',
                    'cue4'=>'audio/Yar_sound.MP3',
                    'cue5'=>'ي',
                    'cue6'=>'يرمي',
                    'cue7'=>'audio/Yarmi_sound.MP3',

                ],
                [
                    'subcategory_id'=>'6',
                    'word'=>'يسدد',
                    'image'=> 'img/verbs/sports/shoot the goal.jpg',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/Ya_sound.MP3',
                    'cue4'=>'audio/Yo_sound.MP3',
                    'cue5'=>'ي',
                    'cue6'=>'يسدد',
                    'cue7'=>'audio/Yousadedd_sound.MP3',

                ],

                [
                    'subcategory_id'=>'7',
                    'word'=>'حزين',
                    'image'=> 'img/adjectives/feelings/happy.jpg',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/',
                    'cue4'=>'audio/',
                    'cue5'=>'ح',
                    'cue6'=>'حزين',
                    'cue7'=>'audio/',

                ],
                [
                    'subcategory_id'=>'7',
                    'word'=>'سعيد',
                    'image'=> 'img/adjectives/feelings/happy.jpg',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/',
                    'cue4'=>'audio/',
                    'cue5'=>'س',
                    'cue6'=>'سعيد',
                    'cue7'=>'audio/',

                ],
                [
                    'subcategory_id'=>'7',
                    'word'=>'قلق',
                    'image'=> 'img/adjectives/feelings/Worry.jpg',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/',
                    'cue4'=>'audio/',
                    'cue5'=>'ق',
                    'cue6'=>'قلق',
                    'cue7'=>'audio/',

                ],

                [
                    'subcategory_id'=>'8',
                    'word'=>'كبير',
                    'image'=> 'img/adjectives/Sizes/big.jpg',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/',
                    'cue4'=>'audio/',
                    'cue5'=>'ك',
                    'cue6'=>'كبير',
                    'cue7'=>'audio/',

                ],
                [
                    'subcategory_id'=>'8',
                    'word'=>'طويل',
                    'image'=> 'img/adjectives/Sizes/tall.jpg',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/',
                    'cue4'=>'audio/',
                    'cue5'=>'ط',
                    'cue6'=>'طويل',
                    'cue7'=>'audio/',

                ],
                [
                    'subcategory_id'=>'8',
                    'word'=>'قصير',
                    'image'=> 'img/adjectives/Sizes/tall.jpg',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/',
                    'cue4'=>'audio/',
                    'cue5'=>'ق',
                    'cue6'=>'قصير',
                    'cue7'=>'audio/',

                ],
                [
                    'subcategory_id'=>'9',
                    'word'=>'خشن',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/',
                    'cue4'=>'audio/',
                    'cue5'=>'خ',
                    'cue6'=>'خشن',
                    'cue7'=>'audio/',

                ],
                [
                    'subcategory_id'=>'9',
                    'word'=>'ناعم',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/',
                    'cue4'=>'audio/',
                    'cue5'=>'ن',
                    'cue6'=>'ناعم',
                    'cue7'=>'audio/',

                ],
                [
                    'subcategory_id'=>'9',
                    'word'=>'منتظم',
                    'image'=> '',
                    'cue1'=>'',
                    'cue2'=>'',
                    'cue3'=>'audio/',
                    'cue4'=>'audio/',
                    'cue5'=>'م',
                    'cue6'=>'منتظم',
                    'cue7'=>'audio/',

                ],
            ]
        );
    }

}
