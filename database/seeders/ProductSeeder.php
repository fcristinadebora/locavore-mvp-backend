<?php

namespace Database\Seeders;

use App\Enums\Availability;
use App\Models\AvailabilityProduct;
use App\Models\CategoryProducer;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
    public function __construct(private Faker $faker, private array $products = []) {}

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(int $producerId)
    {
        $this->faker->addProvider(new \FakerRestaurant\Provider\pt_BR\Restaurant($this->faker));
        $this->createFakeProducts($producerId);
    }

    public function createFakeProducts(int $producerId): void
    {
        if (!$this->products) {
            $this->createRandomProducts($producerId);
            return;
        }

        foreach ($this->products as $product) {
            $prod = new Product([
                'producer_id' => $producerId,
                'name' => $product['name'],
                'description' => $this->faker->realTextBetween(150, 255),
                'image' => $product['img'],
                'price' => $this->faker->randomFloat(2, 0, 200),
                'unit_of_price' => 'kg'
            ]);
            $prod->save();
            $this->createFakeCategoriesProduct($prod->id);
        }
    }

    public function createRandomProducts(int $producerId) {
        $prod1 = new Product([
            'producer_id' => $producerId,
            'name' => $this->faker->foodName(),
            'description' => $this->faker->realTextBetween(150, 255),
            'price' => $this->faker->randomFloat(2, 0, 200),
            'unit_of_price' => 'unidade'            
        ]);
        $prod1->save();
        $this->createFakeCategoriesProduct($prod1->id);

        $prod2 = new Product([
            'producer_id' => $producerId,
            'name' => $this->faker->fruitName(),
            'description' => $this->faker->realTextBetween(150, 255),
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->randomFloat(2, 0, 200),
            'unit_of_price' => 'litro'
        ]);
        $prod2->save();
        $this->createFakeCategoriesProduct($prod2->id);

        $prod3 = new Product([
            'producer_id' => $producerId,
            'name' => $this->faker->vegetableName(),
            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->realTextBetween(150, 255)
        ]);
        $prod3->save();
        $this->createFakeCategoriesProduct($prod3->id);
    }

    public function createFakeCategoriesProduct(int $productId, int $createAmount = 5): void
    {
        for($i = 0; $i < $createAmount; $i++) {
            $categoryId = rand(1,5);
            $categoryProducer = new CategoryProduct([
                'product_id' => $productId,
                'category_id' => $categoryId
            ]);
            $categoryProducer->save();
        }
    }

    public function createFakeAvailabilityProduct(int $productId): void
    {
        $availability = new AvailabilityProduct([
            'product_id' => $productId,
            'availability' => Availability::TO_ORDER
        ]);
        $availability->save();

        $availability2 = new AvailabilityProduct([
            'product_id' => $productId,
            'availability' => Availability::PROMPT_DELIVERY
        ]);
        $availability2->save();
    }
}
