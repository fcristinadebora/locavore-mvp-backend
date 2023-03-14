<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\CategoryProducer;
use App\Models\Person;
use App\Models\Producer;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use MatanYadaev\EloquentSpatial\Objects\Point;

class ProducersSeeder extends Seeder
{
    public function __construct(private Faker $faker) {}
    
    /**
     * Run the database seeds.
     *
     * @return int $producerId
     */
    public function run(): int
    {
        $userId = $this->createFakeUser();
        $personId = $this->createFakePerson($userId);
        $producerId = $this->createFakeProducer($personId);
        $addressId = $this->createFakeAddress($producerId);
        $this->createFakeCategoriesProducer($producerId);

        return $producerId;
    }

    public function createFakeUser(): int
    {
        $user = new User([
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail,
            'password' =>  Hash::make('123456')
        ]);
        $user->save();

        return $user->id;
    }

    public function createFakePerson(int $userId): int
    {
        $person = new Person([
            'user_id' => $userId,
            'profile_picture' => $this->faker->imageUrl(640,480,'people')
        ]);
        $person->save();

        return $person->id;
    }

    public function createFakeProducer(int $personId): int
    {
        $person = new Producer([
            'person_id' => $personId,
            'name' => $this->faker->company(),
            'short_description' => $this->faker->sentence(),
            'long_description' => $this->faker->paragraph(),
            'profile_picture' => $this->faker->imageUrl(640,480,'business')
        ]);
        $person->save();

        return $person->id;
    }

    public function createFakeAddress(int $producerId): int
    {
        $address = new Address([
            'address' => $this->faker->address(),
            'city_id' => rand(1, 5570),
            'location' => new Point((-27.2335 + $producerId / 500), (-52.026  - $producerId / 500), config("spatial.default_srid")),
            'producer_id' => $producerId
        ]);
        $address->save();
        return $address->id;
    }

    public function createFakeCategoriesProducer(int $producerId, int $createAmount = 5): void
    {
        for($i = 0; $i < $createAmount; $i++) {
            $categoryId = rand(1,11);
            $categoryProducer = new CategoryProducer([
                'producer_id' => $producerId,
                'category_id' => $categoryId
            ]);
            $categoryProducer->save();
        }
    }
}
