<?php

namespace App\Http\Controllers\Api;

use App\Dto\RegisterDto;
use App\Exceptions\InvalidCredentialsException;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends BaseApiController
{
    public function __construct(private AuthService $authService) {}

    public function register(RegisterRequest $request)
    {
        $dto = new RegisterDto(
            $request->input('name'),
            $request->input('email'),
            $request->input('password'),
            $request->input('type'),
        );

        try {
            $result = $this->authService->register($dto);
            return $this->sendResponse($result, 'User created');
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), 500, 'USER_CREATION_FAILED');
        }
    }

    public function login(LoginRequest $request)
    {
        try {
            $result = $this->authService->login($request->input('email'), (string) $request->input('password'));

            return $this->sendResponse($result, 'Login succeed');
        } catch (InvalidCredentialsException $th) {
            return $this->sendError($th->getMessage(), $th->getCode(), 'INVALID_CREDENTIALS');
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), $th->getCode());
        }
    }

    public function logout(Request $request)
    {
        try {
            $result = $this->authService->logout();

            return $this->sendResponse($result, 'User logged out');
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), $th->getCode());
        }
    }

    public function user()
    {
        try {
            $result = $this->authService->getCurrentUser();

            return $this->sendResponse($result);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), $th->getCode());
        }
    }
}
