<?php

namespace Database\Seeders;

use App\Enums\QuestionType;
use App\Models\Producer;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class QuizSeeder extends Seeder
{
    public function __construct(private Faker $faker, private array $products = []) {}

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->populateQuizes();
    }

    public function populateQuizes() {
        $producers = Producer::get();
        foreach ($producers as $key => $producer) {
            $quiz = $this->createQuiz($producer->id);

            foreach ($producer->products as $product) {
                $product->quiz_id = $quiz->id;
                $product->save();
            }
        }
    }

    public function createQuiz(int $producerId) {
        $quiz = new Quiz([
            'name' => 'Quiz teste',
            'is_active' => true,
            'producer_id' => $producerId,
        ]);
        $quiz->save();

        $questions = [
            new Question([
                'quiz_id' => $quiz->id,
                'question'  => "Pergunta para responder com texto curto?",
                'order'  => 0,
                'type'  => QuestionType::SHORT_TEXT
            ]),
            new Question([
                'quiz_id' => $quiz->id,
                'question'  => "Pergunta para responder com texto longo?",
                'order'  => 1,
                'type'  => QuestionType::LONG_TEXT
            ]),
            new Question([
                'quiz_id' => $quiz->id,
                'question' => "Pergunta para selecionar uma opção?",
                'order' => 2,
                'type' => QuestionType::OPTIONS,
                'options' => json_encode([
                    "Primeira opção",
                    "Segunda opção",
                    "Terceira opção"
                ])
            ])
        ];

        foreach ($questions as $question) {
            $question->save();
        }

        return $quiz;
    }
}
