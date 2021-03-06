<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [AuthController::class,'login']);
    Route::post('register', [AuthController::class,'register']);
    Route::post('logout', [AuthController::class,'logout']);

});
Route::resource('products',ProductController::class);

Route::group(['middleware' => 'auth:api'],function (){

    Route::post('cart',[CartController::class,'AddToCart']);
    Route::get('cart',[CartController::class,'GetOrders']);
    Route::post('review',[ReviewController::class,'store']);
    Route::post('payment',[\App\Http\Controllers\PaymentController::class,'payOrder']);


   });
