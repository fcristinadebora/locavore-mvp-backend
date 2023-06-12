<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\Producer;
use App\Models\ProducerReview;
use App\Models\Product;
use App\Models\ProductReview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ReviewsSeeder extends Seeder
{
    public function __construct(private Faker $faker, private array $products = []) {}

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createFakeProducerReviews();
        $this->createFakeProductReviews();
    }

    public function createFakeProducerReviews() {
        $itemsToReview = Producer::get();
        $reviewers = $this->getReviewers();
        
        foreach ($itemsToReview as $key => $value) {
            foreach ($reviewers as $key2 => $value2) {
                $review = new ProducerReview([
                    'producer_id' => $value->id, 
                    'person_id' => $value2->id,
                    'rate' => $this->faker->numberBetween(2,5),
                    'comment' => $this->faker->realTextBetween(150, 255)
                ]);    
                $review->save();
            }
        }
    }

    public function createFakeProductReviews() {
        $itemsToReview = Product::get();
        $reviewers = $this->getReviewers();
        
        foreach ($itemsToReview as $key => $value) {
            foreach ($reviewers as $key2 => $value2) {
                $review = new ProductReview([
                    'product_id' => $value->id, 
                    'person_id' => $value2->id,
                    'rate' => $this->faker->numberBetween(2,5),
                    'comment' => $this->faker->realTextBetween(150, 255)
                ]);    
                $review->save();
            }
        }
    }

    public function getReviewers() {
        return Person::limit(3)->inRandomOrder()->get();
    }
}
