<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class patientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('patients')->insert([
            [  
               'users_id'=>'2',
               'national_id'=>'1111021031',
               'first_name'=>'أحمد',
               'last_name'=>'الثنيان',
               'birth_date'=>'02/01/1965',
               'phone'=>'0500000001',
               'nationality'=>'سعودي',
               'region'=>'الرياض',
               'city'=>'الخرج',
               'diagnosis'=>'الحبسة الكلامية',
               'characteristics'=>'عدم إكمال الجملة أو التحدث بجمل قصيرة',
               'neurological_damage'=>'جزء من الفصّ الجبهي الأيسر',
               'severity'=>'حرج',
               'assesment_method'=>'الأول'
            ],

            [
               'users_id'=>'3',
                'national_id'=>'1141050162',
                'first_name'=>'نورة',
                'last_name'=>'الأحمري',
                'birth_date'=>'22/05/1995',
                'phone'=>'0500000002',
                'nationality'=>'سعودي',
                'region'=>'الرياض',
                'city'=>'ضرما',
                'diagnosis'=>'الحبسة الكلامية',
                'characteristics'=>'صعوبة القراءة',
                'neurological_damage'=>'جزء من الفصّ الصدغي الأيسر',
                'severity'=>'عادي',
                'assesment_method'=>'الأول'
             ],

             [
               'users_id'=>'4',
                'national_id'=>'1171081093',
                'first_name'=>'فيصل',
                'last_name'=>'الغامدي',
                'birth_date'=>'01/10/1986',
                'phone'=>'0500000003',
                'nationality'=>'سعودي',
                'region'=>'عسير',
                'city'=>'أبها',
                'diagnosis'=>'الحبسة الكلامية',
                'characteristics'=>'صعوبة فهم المحادثة',
                'neurological_damage'=>'جزء من الفصّ الجبهي الأيسر',
                'severity'=>'متوسط',
                'assesment_method'=>'الأول'
             ],

             [
               'users_id'=>'5',
                'national_id'=>'1151071094',
                'first_name'=>'محمد',
                'last_name'=>'الزهراني',
                'birth_date'=>'15/08/1977',
                'phone'=>'0500000004',
                'nationality'=>'سعودي',
                'region'=>'الرياض',
                'city'=>'الدوادمي',
                'diagnosis'=>'الحبسة الكلامية',
                'characteristics'=>'التحدث بكلمات لا يمكن فهمها.',
                'neurological_damage'=>'جزء من الفصّ الصدغي الأيسر',
                'severity'=>'حرج',
                'assesment_method'=>'الأول'
             ],

             [
               'users_id'=>'6',
                'national_id'=>'1171081035',
                'first_name'=>'زهرا',
                'last_name'=>'ابو نجا',
                'birth_date'=>'21/12/1980',
                'phone'=>'0500000005',
                'nationality'=>'أردني',
                'region'=>'الحدود الشمالية',
                'city'=>'عرعر',
                'diagnosis'=>'الحبسة الكلامية',
                'characteristics'=>'عدم إكمال الجملة أو التحدث بجمل قصيرة.',
                'neurological_damage'=>'جزء من الفصّ الجبهي الأيسر',
                'severity'=>'عادي',
                'assesment_method'=>'الأول'
             ],

             [
               'users_id'=>'7',
                'national_id'=>'1181101266',
                'first_name'=>'ماجد',
                'last_name'=>'النوح',
                'birth_date'=>'30/11/1960',
                'phone'=>'0500000006',
                'nationality'=>'سعودي',
                'region'=>'الباحة',
                'city'=>'الباحة',
                'diagnosis'=>'الحبسة الكلامية',
                'characteristics'=>'',
                'neurological_damage'=>'الجزء السفلي الخلفي للفص الجداري الأيسر',
                'severity'=>'متوسط',
                'assesment_method'=>'الأول'
             ],


             [
               'users_id'=>'8',
                'national_id'=>'1991199800',
                'first_name'=>'محمد',
                'last_name'=>'زهير',
                'birth_date'=>'02/01/1965',
                'phone'=>'0500000008',
                'nationality'=>'سعودي',
                'region'=>'المنطقة الشرقية',
                'city'=>'الدمام',
                'diagnosis'=>'الحبسة الكلامية',
                'characteristics'=>'عدم استخدام الكلمة الصحيحة واستبدالها بأخرى',
                'neurological_damage'=>'الجزء السفلي الخلفي للفص الجداري الأيسر',
                'severity'=>'متوسط',
                'assesment_method'=>'الأول'
             ],

             [
               'users_id'=>'9',
                'national_id'=>'1176453278',
                'first_name'=>'جود',
                'last_name'=>'العتيبي',
                'birth_date'=>'09/05/1989',
                'phone'=>'0500000009',
                'nationality'=>'سعودي',
                'region'=>'المنطقة الشرقية',
                'city'=>'الخفجي',
                'diagnosis'=>'الحبسة الكلامية',
                'characteristics'=>'ستخدام جمل لا يوجد لها معنى وغير مفهومة.',
                'neurological_damage'=>'جزء من الفصّ الصدغي الأيسر',
                'severity'=>'حرج',
                'assesment_method'=>'الأول'
             ],

        ]);


    }
}
