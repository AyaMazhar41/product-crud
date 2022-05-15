<?php
namespace App\Repositories;
use App\Interfaces\AuthRepositoryInterface;
use App\Models\User;
use JWTAuth;

class AuthRepository implements  AuthRepositoryInterface{
    public function AddUser($request){

        $user = User::create($request);
        $token = JWTAuth::fromUser($user);
        $user['token'] = $token;
        return $user;
    }




}
