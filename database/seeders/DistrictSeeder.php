<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
            ['name'=>'Thoothukudi','state_id'=>1,'created_at'=>Carbon::now()],
            ['name'=>'Tirunelveli','state_id'=>1,'created_at'=>Carbon::now()],
            ['name'=>'Kanyakumari','state_id'=>1,'created_at'=>Carbon::now()],
            ['name'=>'Virudhunagar','state_id'=>1,'created_at'=>Carbon::now()],
            ['name'=>'Cudalore','state_id'=>1,'created_at'=>Carbon::now()],
            ['name'=>'Chennai','state_id'=>1,'created_at'=>Carbon::now()],
            ['name'=>'Sivakasi','state_id'=>1,'created_at'=>Carbon::now()],
            ['name'=>'Tirunelveli','state_id'=>1,'created_at'=>Carbon::now()],
            ['name'=>'Kollam','state_id'=>2,'created_at'=>Carbon::now()],
            ['name'=>'Tiruvananthapuram','state_id'=>2,'created_at'=>Carbon::now()],
            ['name'=>'wayanad','state_id'=>2,'created_at'=>Carbon::now()],
            ['name'=>'Mysore','state_id'=>3,'created_at'=>Carbon::now()],
            ['name'=>'Kolar','state_id'=>3,'created_at'=>Carbon::now()],
            ['name'=>'Uttara Kannada','state_id'=>3,'created_at'=>Carbon::now()],

        ]);
    }
}
