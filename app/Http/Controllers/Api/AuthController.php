<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Http\Requests\Api\Auth\LoginRequest;
use  App\Http\Requests\Api\Auth\RegisterRequest;
use App\Interfaces\AuthRepositoryInterface;

use App\Http\Resources\UserResource;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register']]);
    }
    public function register(AuthRepositoryInterface $AuthRepositoryInterface,RegisterRequest $request)
    {
        $user = $AuthRepositoryInterface->AddUser($request->validated());
        return \responder::success(new UserResource($user));

    }
    public function login(LoginRequest $request)
    {
        if (!$token =  auth('api')->attempt($request->validated())) {
            return \responder::error('بيانات الدخول غير صحيحه');
        }
        $user = auth('api')->user();
        $user['token'] = $token;
        return \responder::success(new UserResource($user));
    }
    public function logout()
    {
        auth('api')->logout();
        return \responder::success('تم تسجيل الخروج بنجاح');
    }
}
