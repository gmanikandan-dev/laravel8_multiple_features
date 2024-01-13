<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::insert([
            ['name'=>'India','created_at'=>Carbon::now()],
            ['name'=>'Bahrain','created_at'=>Carbon::now()],
            ['name'=>'Brazil','created_at'=>Carbon::now()],
            ['name'=>'Armerica','created_at'=>Carbon::now()],
            ['name'=>'China','created_at'=>Carbon::now()],
            ['name'=>'Egypt','created_at'=>Carbon::now()],
            ['name'=>'France','created_at'=>Carbon::now()],
            ['name'=>'Japan','created_at'=>Carbon::now()],
            ['name'=>'Israel','created_at'=>Carbon::now()],
            ['name'=>'Sri Lanka','created_at'=>Carbon::now()],
            ['name'=>'South Africa','created_at'=>Carbon::now()],
            ['name'=>'Switzerland','created_at'=>Carbon::now()],
            ['name'=>'Singapore','created_at'=>Carbon::now()],
            ['name'=>'Saudi Arabia','created_at'=>Carbon::now()],
        ]);
    }
}
