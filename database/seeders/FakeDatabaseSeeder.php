<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProducersSeeder;
use Database\Seeders\ProductSeeder;
use Faker\Factory;

class FakeDatabaseSeeder extends Seeder {
    /**
     * Seed the application's database fake data.
     * Used for the application testing/development
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('pt_BR');
        $producersToCreate = 10;
        for ($i=0; $i<$producersToCreate; $i++) {
            $producerId = (new ProducersSeeder($faker))->run();
            (new ProductSeeder($faker))->run($producerId);
        }
    }
}
