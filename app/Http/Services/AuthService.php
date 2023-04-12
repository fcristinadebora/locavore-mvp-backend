<?php

namespace App\Http\Services;

use App\Dto\RegisterDto;
use App\Enums\UserType;
use App\Exceptions\InvalidCredentialsException;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{
  public function __construct(
    private PersonService $personService,
    private ProducerService $producerService
  ) { }

  public function register(RegisterDto $dto): array
  {
    $user = User::create([
      'name' => $dto->name,
      'email' => $dto->email,
      'password' => Hash::make($dto->password)
    ]);

    $person = $this->personService->createPerson($user->id);

    $this->producerService->createProducer($person->id, '');

    return [
      'name' => $user->name,
      'email' => $user->email,
      'token' => $user->createToken(env('APP_ENCRIPTION_TOKEN'))->accessToken
    ];
  }

  public function login(string $email, string $password)
  {
    if (!Auth::attempt(['email' => $email, 'password' => $password])) {
      throw new InvalidCredentialsException();
    }
    
    /** @var User $user */
    $user = Auth::user();
    $token =  $user->createToken(env('APP_ENCRIPTION_TOKEN'))->accessToken;

    return [
      'token' => $token
    ];
  }

  public function logout()
  {
    /** @var User $user */
    $user = Auth::user();


    return $user->token()->revoke() ? true : false;
  }

  public function getCurrentUser(): User|null
  {
    $user = Auth::user();
    if (!$user) {
      return null;
    }
    
    $user->person = $user->person;

    return $user ?? null;
  }

  public function getCurrentUserOrFail(\Throwable $exception): User|null
  {
    $user = $this->getCurrentUser();

    if (!$user) {
      throw new $exception;
    }

    return $user;
  }

  public function updatePassword(string $oldPassword, string $newPassword): bool
  {
    /** @var User $user */
    $user = Auth::user();
    if (!$user) {
      throw new Exception('User is not logged', 401);
    }

    if (!Hash::check($oldPassword, $user->password)) {
      throw new Exception('Old password does not match', 400);
    }

    $user->password = Hash::make($newPassword);
    return $user->save();
  }

  public function deleteAccount(string $password): bool
  {
    /** @var User $user */
    $user = Auth::user();
    if (!$user) {
      throw new Exception('User is not logged', 401);
    }

    if (!Hash::check($password, $user->password)) {
      throw new Exception('Invalid password', 400);
    }

    return $user->delete();
  }
}
