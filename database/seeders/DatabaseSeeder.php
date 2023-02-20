<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CountriesSeeder;
use Database\Seeders\CitiesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * Used for the application setup
     *
     * @return void
     */
    public function run()
    {
        (new CountriesSeeder())->run();
        (new CitiesSeeder())->run();
        (new CategoriesSeeder())->run();
    }
}
