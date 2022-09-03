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
        DB::table('users')->insert(
            [
                [
                    'role'=>'0',
                    'name'=> 'Admin',
                    'email'=>'Admin@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'1',
                    'name'=> 'قاسم',
                    'email'=>'qasim@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'1',
                    'name'=> 'مها',
                    'email'=>'maha@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'1',
                    'name'=> 'هلا',
                    'email'=>'hala@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'1',
                    'name'=> 'مروى',
                    'email'=>'marwa@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'1',
                    'name'=> 'ياسر',
                    'email'=>'yaser@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'1',
                    'name'=> 'موسى',
                    'email'=>'mosua@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'1',
                    'name'=> 'صالح',
                    'email'=>'saleh@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'1',
                    'name'=> 'وليد',
                    'email'=>'waleed@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'2',
                    'name'=> 'احمد',
                    'email'=>'ahmadalthnian@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'2',
                    'name'=> 'نورة',
                    'email'=>'Nourahalahmari@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'2',
                    'name'=> 'فيصل',
                    'email'=>'faisalalghamdi@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'2',
                    'name'=> 'محمد',
                    'email'=>'muhammedalzahrani@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'2',
                    'name'=> 'زهرا',
                    'email'=>'zahraAbounaja@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'2',
                    'name'=> 'ماجد',
                    'email'=>'majedalnuah@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'2',
                    'name'=> 'هيفا',
                    'email'=>'hayfaalebrahim@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'2',
                    'name'=> 'محمد',
                    'email'=>'mohammedzuhair@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],

                [
                    'role'=>'2',
                    'name'=> 'جود',
                    'email'=>'joudalotaibi@gmail.com',
                    'password'=>'$1$8vfLTxby$AfIiPny3aWim.vJrh10oN1'
                ],
            ]
        );

        
    }
}
