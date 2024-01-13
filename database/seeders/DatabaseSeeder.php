<?php

namespace Database\Seeders;

use App\Models\Taluk;
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
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserTableSeeder::class,
            CountrySeeder::class,
            StateSeeder::class,
            DistrictSeeder::class,
            TalukSeeder::class,
            EmployeeSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
