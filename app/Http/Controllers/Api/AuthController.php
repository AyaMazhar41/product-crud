<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Http\Requests\Api\Auth\LoginRequest;


use App\Http\Resources\UserResource;
use App\Http\Resources\DriverResource;
use App\Models\Driver;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login(LoginRequest $request)
    {
        if (!$token =  auth('api')->attempt($request->validated())) {
            return \responder::error('بيانات الدخول غير صحيحه');
        }
        $user = auth('api')->user();
        $user['token'] = $token;

        $drivers =Driver::select('*')->selectRaw('( 3959 * acos( cos( radians(?) ) *
            cos( radians( lat ) )
            * cos( radians( lng ) - radians(?)
            ) + sin( radians(?) ) *
            sin( radians( lat ) ) )
          ) AS distance', [auth('api')->user()->lat,auth('api')->user()->long,auth('api')->user()->lat])->orderBy('distance')->limit(3)->get();

        return \responder::success([
        'user'=> new UserResource($user),
        'drivers'=> DriverResource::collection($drivers)
        ]);


    }
    public function logout()
    {
        auth('api')->logout();
        return \responder::success('تم تسجيل الخروج بنجاح');
    }
}
