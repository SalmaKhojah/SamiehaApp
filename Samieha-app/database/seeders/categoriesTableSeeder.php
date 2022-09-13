<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facads\DB;

class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('categories')->insert([
        [ 'category'=>'الأسماء'],
        [ 'category'=>'الأفعال'],
        [ 'category'=>'الصفات'],
       ]);
    }
}
