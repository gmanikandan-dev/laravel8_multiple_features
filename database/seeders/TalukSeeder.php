<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class TalukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('taluks')->insert([
            ['name'=>'Tiruchendur','district_id'=>1,'created_at'=>Carbon::now()],
            ['name'=>'Kovilpatti','district_id'=>1,'created_at'=>Carbon::now()],
            ['name'=>'Srivaikundam','district_id'=>1,'created_at'=>Carbon::now()],
            ['name'=>'Sattankulam','district_id'=>1,'created_at'=>Carbon::now()],
            ['name'=>'Nanguneri','district_id'=>2,'created_at'=>Carbon::now()],
            ['name'=>'Palayamkottai','district_id'=>2,'created_at'=>Carbon::now()],
            ['name'=>'Radhapuram','district_id'=>2,'created_at'=>Carbon::now()],
            ['name'=>'Aruppukottai','district_id'=>4,'created_at'=>Carbon::now()],
            ['name'=>'Rajapalayam','district_id'=>4,'created_at'=>Carbon::now()],
            ['name'=>'Sathur','district_id'=>4,'created_at'=>Carbon::now()],
            ['name'=>'Srivilliputhur','district_id'=>4,'created_at'=>Carbon::now()],
            ['name'=>'Alandur','district_id'=>6,'created_at'=>Carbon::now()],
            ['name'=>'Ambattur','district_id'=>6,'created_at'=>Carbon::now()],
            ['name'=>'Egmore','district_id'=>6,'created_at'=>Carbon::now()],
            ['name'=>'Guindy','district_id'=>6,'created_at'=>Carbon::now()],
            ['name'=>'Madhavaram','district_id'=>6,'created_at'=>Carbon::now()],
            ['name'=>'Mambalam','district_id'=>6,'created_at'=>Carbon::now()],
      ]);
    }
}
