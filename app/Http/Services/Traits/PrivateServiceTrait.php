<?php

namespace App\Http\Services\Traits;

use App\Http\Services\AuthService;
use App\Models\Producer;
use App\Models\User;
use Illuminate\Validation\UnauthorizedException;

trait PrivateServiceTrait {
    private AuthService $authService;

    public function getCurrentUserOrFail(): ?User
    {
        return $this->authService->getCurrentUserOrFail(
            new UnauthorizedException('User not authenticated', 401)
        );
    }
}