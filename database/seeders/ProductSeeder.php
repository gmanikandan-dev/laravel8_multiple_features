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
        DB::table('producties')->insert([
        [
            'name' => 'Watch',
            'price' => 200,
            'description' => 'Apple watch',
            'image' => 'https://images.unsplash.com/photo-1542496658-e33a6d0d50f6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80'
        ],
        [
            'name' => 'Bag',
            'price' => 100,
            'description' => 'Apple Bag',
            'image' => 'https://images.unsplash.com/photo-1554342872-034a06541bad?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80'
        ],
       [
            'name' => 'perfume',
            'price' => 150,
            'description' => 'Apple Perfume',
            'image' => 'https://images.unsplash.com/photo-1523293182086-7651a899d37f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80'
       ],
        [
            'name' => 'coffee',
            'price' => 100,
            'description' => 'Cold Coffee',
            'image' => 'https://images.unsplash.com/photo-1568649929103-28ffbefaca1e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80'
        ]
        ]);
    }
}
