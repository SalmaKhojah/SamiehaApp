<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facads\DB;


class subcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('subcategories')->insert([
        [
         'subcategory'=>'أثاث',
         'category_id' =>'1'  
        ],
        [
            'subcategory'=>'فواكه',
            'category_id' =>'1'  
           
        ],

        [
            'subcategory'=>'ملابس',
            'category_id' =>'1'  
        ],

        [
            'subcategory'=>'حركة',
            'category_id' =>'2'  
        ],

        [
            'subcategory'=>'زراعة',
            'category_id' =>'2'  
        ],

        [
            'subcategory'=>'رياضة',
            'category_id' =>'2'  
        ],

        [
            'subcategory'=>'مشاعر',
            'category_id' =>'3'  
        ],

        [
            'subcategory'=>'أحجام',
            'category_id' =>'3'  
        ],

        [
            'subcategory'=>'ملمس',
            'category_id' =>'3'  
        ],


       ]);



    }
}
