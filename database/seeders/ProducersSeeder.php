<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\CategoryProducer;
use App\Models\Person;
use App\Models\Producer;
use App\Models\Product;
use App\Models\User;
use App\Models\City;
use App\Models\ProducerContact;
use App\Enums\ContactType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use MatanYadaev\EloquentSpatial\Objects\Point;

class ProducersSeeder extends Seeder
{
    public function __construct(private Faker $faker,  private int $cityId, private array $producerData = []) {}

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
        $this->createFakeContactsProducer($producerId);

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
            'user_id' => $userId
        ]);
        $person->save();

        return $person->id;
    }

    public function createFakeProducer(int $personId): int
    {
        $img = $this->producerData ? $this->producerData['img'] : $this->faker->imageUrl(640,480,'business');
        $name = $this->producerData ? $this->producerData['name'] : $this->faker->company();
        $person = new Producer([
            'person_id' => $personId,
            'name' => $name,
            'short_description' => $this->faker->sentence(),
            'long_description' => $this->faker->paragraph(),
            'profile_picture' => $img
        ]);
        $person->save();

        return $person->id;
    }

    public function createFakeAddress(int $producerId): int
    {
        $cityId = $this->cityId ?? rand(1, 5570);
        $lat = -27.2335 + $producerId / 500;
        $lng = -52.026  - $producerId / 500;
        if ($this->cityId) {
            $city = City::find($this->cityId);
            $lat = $city->location->latitude + (rand(1, 500) / 3000);
            $lng = $city->location->longitude + (rand(1, 500) / 3000);
        }

        $address = new Address([
            'address' => $this->faker->address(),
            'city_id' => $cityId,
            'location' => new Point($lat, $lng, config("spatial.default_srid")),
            'producer_id' => $producerId,
            'lat' => $lat,
            'lng' => $lng,
        ]);
        $address->save();
        return $address->id;
    }

    public function createFakeCategoriesProducer(int $producerId, int $createAmount = 5): void
    {
        for($i = 0; $i < $createAmount; $i++) {
            $categoryId = rand(1,4);
            $categoryProducer = new CategoryProducer([
                'producer_id' => $producerId,
                'category_id' => $categoryId
            ]);
            $categoryProducer->save();
        }
    }

    public function createFakeContactsProducer(int $producerId): void
    {
        $contacts = [
            ['type' => ContactType::WHATSAPP, 'value' => '49 99999 9999'],
            ['type' => ContactType::PHONE, 'value' => '49 9998 9898'],
            ['type' => ContactType::EMAIL, 'value' => 'mail@mail.com'],
            ['type' => ContactType::INSTAGRAM, 'value' => 'instaprofile'],
        ];
        
        foreach ($contacts as $contact) {
            ProducerContact::create([
                'producer_id' => $producerId,
                'type' => $contact['type'],
                'value' => $contact['value']
            ]);
        }
    }
}
