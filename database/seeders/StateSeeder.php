<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            ['name'=>'Tamil Nadu','country_id'=>'1','created_at'=>Carbon::now()],
            ['name'=>'Kerala','country_id'=>'1','created_at'=>Carbon::now()],
            ['name'=>'Karnataka','country_id'=>'1','created_at'=>Carbon::now()],
            ['name'=>'Puducherry','country_id'=>'1','created_at'=>Carbon::now()],
            ['name'=>'Telangana','country_id'=>'1','created_at'=>Carbon::now()],
            ['name'=>'Maharashtra','country_id'=>'1','created_at'=>Carbon::now()],
            ['name'=>'Gujarat','country_id'=>'1','created_at'=>Carbon::now()],
            ['name'=>'California','country_id'=>'4','created_at'=>Carbon::now()],
            ['name'=>'New York','country_id'=>'4','created_at'=>Carbon::now()],
            ['name'=>'New Mexico','country_id'=>'4','created_at'=>Carbon::now()],
            ['name'=>'Beijing','country_id'=>'5','created_at'=>Carbon::now()],  

        ]);
    }
}
