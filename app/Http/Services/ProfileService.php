<?php

namespace App\Http\Services;

use App\Models\User;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class ProfileService
{
  public function __construct(
    private AuthService $authService
  ) { }

  public function updateProfile(?string $name = null, ?string $email = null): bool
  {
    $currentUser = $this->authService->getCurrentUser();
    if (!$currentUser) {
      throw new UnauthorizedHttpException('User is not logged');
    }

    $user = User::find($currentUser->id);

    $name && $user->name = $name;
    $email && $user->email = $email;
    return $user->save();
  }
}
