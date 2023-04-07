<?php

namespace App\Http\Controllers\Api;

use App\Dto\QuizDto;
use App\Http\Requests\CreateQuizRequest;
use App\Http\Requests\UpdateQuizRequest;
use App\Http\Services\ProducerManagementService;
use App\Http\Services\QuizManagementService;
use App\Models\Quiz;

class QuizesManagementController extends BaseApiController
{
    public function __construct(
        private QuizManagementService $quizService,
        private ProducerManagementService $producerService
    ) {}

    public function list() {
        $this->producerService->getCurrentProducerOrFail();
        return $this->sendResponse([
            'success' => true,
            'data' => $this->quizService->list()
        ]);
    }

    public function getById (Quiz $quiz) {
        $quiz->load('questions');

        return $this->sendResponse([
            'success' => true,
            'quiz' => $quiz
        ]);
    }

    public function create (CreateQuizRequest $request) {
        $dto = QuizDto::fromRequest($request);

        return $this->sendResponse([
            'success' => true,
            'quiz' => $this->quizService->create($dto)
        ], 201);
    }

    public function update (Quiz $quiz, UpdateQuizRequest $request) {
        $dto = QuizDto::fromRequest($request);

        return $this->sendResponse([
            'success' => true,
            'quiz' => $this->quizService->update($quiz, $dto)
        ]);
    }

    public function delete(Quiz $quiz)
    {
        return $this->sendResponse([
            'success' => $this->quizService->delete($quiz)
        ]);
    }
}
