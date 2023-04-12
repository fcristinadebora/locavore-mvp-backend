<?php

declare(strict_types=1);

namespace App\Dto;

use App\Dto\Traits\FromRequestTrait;
use App\Traits\CoordinatesTrait;
use App\Dto\Traits\HasPaginationTrait;
use Illuminate\Http\Request;
use MatanYadaev\EloquentSpatial\Objects\Point;
use Spatie\DataTransferObject\DataTransferObject;

final class QuizDto extends DataTransferObject
{
    use FromRequestTrait;

    public ?bool $is_active = null;
    public ?string $name = null;

    /** @var QuestionDto[] $questions */
    public ?array $questions = null;

    public static function fromRequest(Request $request): self
    {
        $data = $request->validated();

        $data['questions'] = array_map(function ($question) {
            return new QuestionDto($question);
        }, $data['questions'] ?? []);
        
        return new static($data);
    }
}