<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            categoriesTableSeeder::class,
            subcategoriesTableSeeder::class,
            wordsTableSeeder::class,
            userTableSeeder::class,
            SLPTableSeeder::class,
            patientTableSeeder::class,
            sessionTableSeeder::class,
            sessionMaterialTableSeeder::class,
            slp_patients::class,


        ]);
    }
}
