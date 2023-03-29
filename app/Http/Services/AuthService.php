<?php

namespace App\Http\Services;

use App\Dto\RegisterDto;
use App\Enums\UserType;
use App\Exceptions\InvalidCredentialsException;
use App\Models\User;
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

    if ($dto->type == UserType::PRODUCER || $dto->type == UserType::PRODUCER_AND_CONSUMER) {
      $this->producerService->createProducer($person->id, $dto->name);
    }

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
}
