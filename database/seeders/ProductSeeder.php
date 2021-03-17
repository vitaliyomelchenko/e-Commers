<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
        [
            [
            'name'=>'Xiaomi Redmi Note 9 Pro 6',
            'price'=> 7799,
            'category'=>'Phones',
            'description'=>'Tropical Green',
            'gallery'=>'60652652d8a6ee7756a72569a8a553c5.jpg',
            ],
            [
                'name'=>'Електросамокат KingSong KS-N10',
                'price'=> 18999,
                'category'=>'Електросамокати',
                'description'=>'Електросамокат KingSong KS-N10',
                'gallery'=>'827c97e82e6138699250d8a1824861e4.jpg',
                ],
                [
                    'name'=>'Робот-пилосос XIAOMI VIOMI S9',
                    'price'=> 19999,
                    'category'=>'Роботи-пилососи',
                    'description'=>'XIAOMI VIOMI S9 Vacuum Cleaner (White)',
                    'gallery'=>'jnjdfjdfgkfndg.jpg',
                    ],
                    [
                        'name'=>'Apple Watch SE',
                        'price'=> 10299,
                        'category'=>'Смарт-годинники',
                        'description'=>'Apple Watch SE 40mm Space Gray Aluminum Case with Black Sand Sport Band (MYDP2UL/A)',
                        'gallery'=>'watch.jpg',
                        ],
        ]);
    }
}
