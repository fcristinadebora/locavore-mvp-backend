<?php

namespace App\Http\Services;

use App\Dto\CreateOrUpdateProductsInputDto;
use App\Dto\QuizDto;
use App\Http\Services\Traits\HasDtoTrait;
use App\Http\Services\Traits\PrivateServiceTrait;
use App\Models\Product;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class QuizManagementService
{
  use PrivateServiceTrait, HasDtoTrait;

  public function __construct(
    private ProducerManagementService $producerService
  ) { }

  public function list(string $search = '', int $page = 1, int $perPage = 0): LengthAwarePaginator
  {
    $producer = $this->producerService->getCurrentUserOrFail();
    
    return Quiz::listPaginatedByProducer($producer->id, $search, $page, $perPage);
  }

  public function create(QuizDto $dto): ?Quiz
  {
    $producer = $this->producerService->getCurrentUserOrFail();

    $quiz = new Quiz([
        'producer_id' => $producer->id
    ]);
    $this->saveFromDto($quiz, $dto);

    return $quiz;
  }

  public function update(Quiz $quiz, QuizDto $dto): ?Quiz
  {
    $this->producerService->getCurrentUserOrFail();
    
    $this->saveFromDto($quiz, $dto);

    return $quiz;
  }

  private function saveFromDto (Quiz $quiz, QuizDto $dto): Quiz
  {
    $quiz = $this->mergeDtoIntoTarget($dto, $quiz);
    $quiz->save();
    
    $order = 0;
    $questions = array_map(function ($question) use ($quiz, $order) {
      return $this->mergeDtoIntoTarget($question, new Question([
        'order' => $order++,
        'quiz_id' => $quiz->id,
        'options' => json_encode($question->options)
      ]));
    }, $dto->questions);

    $quiz->questions()->delete();
    $quiz->questions()->saveMany($questions);
    $quiz->load('questions');

    return $quiz;
  }

  public function delete(Quiz $quiz): bool
  {
    $this->producerService->getCurrentProducerOrFail();
      
      $quiz->questions()->delete();
      
      return $quiz->delete();
  }
}
