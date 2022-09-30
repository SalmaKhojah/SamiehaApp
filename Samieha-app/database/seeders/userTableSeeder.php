<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facads\DB;



class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(
            [
                [
                    'role'=>'0',
                    'name'=> 'Admin',
                    'email'=>'Admin@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'1',
                    'name'=> 'أحمد الثنيان',
                    'email'=>'Ahmadd@gmail.com',
                    'password'=>'$1$F7gWFFzd$Cl0.i7xtj.n4jw93UCVQp.'
                ],

                [
                    'role'=>'1',
                    'name'=> 'نورة الأحمري',
                    'email'=>'Nouraah@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'1',
                    'name'=> 'فيصل الغامدي',
                    'email'=>'faisall@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'1',
                    'name'=> 'محمد الزهراني',
                    'email'=>'muhammed@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'1',
                    'name'=> 'زهرا أبونجا',
                    'email'=>'zahraa@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'1',
                    'name'=> 'ماجد النوح',
                    'email'=>'majed@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'1',
                    'name'=> 'هيفا الابراهيم',
                    'email'=>'hayfaa@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'1',
                    'name'=> 'محمد زهير',
                    'email'=>'muhammedZa@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'1',
                    'name'=> 'جود العتيبي',
                    'email'=>'joud@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'2',
                    'name'=> 'الهنوف المعمر',
                    'email'=>'alhunof@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'2',
                    'name'=> 'نورة الخوالد',
                    'email'=>'nourahkh@gmail.com',
                    'password'=>'$1$yr.sT9D8$6t4LF9YKk7XnDHdjKif8g1'
                ],

                [
                    'role'=>'2',
                    'name'=> 'عبير الحمدي',
                    'email'=>'Abeer@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'2',
                    'name'=> 'خالد الأحمد',
                    'email'=>'khaled@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'2',
                    'name'=> 'حمزة اليوسف',
                    'email'=>'hamza@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'2',
                    'name'=> 'هلا السيد',
                    'email'=>'hala@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'2',
                    'name'=> 'يزيد القحطاني',
                    'email'=>'yazeed@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'2',
                    'name'=> 'عبد الإله الثنيان',
                    'email'=>'Abdullelah@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],
            ]
        );

        
    }
}
