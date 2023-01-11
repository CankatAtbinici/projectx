<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewUserController;
use App\Http\Controllers\Test;
use App\Models\UserExperienceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// test controller

Route::controller(test::class)->group(function () {
    Route::post("/test", "store");
});

//User Controller

Route::controller(NewUserController::class)->group(function () {
    Route::get("/users", "index");
    Route::get("/users/{id}" , "get_user");
    Route::post("/users", "store");
    Route::put("/users/{id}", "update");
    Route::delete("/users/{id}", "destroy");
});

Route::controller(CityController::class) -> group(function() {
    Route::get("/city" , "index");
});

Route::controller(Test::class) -> group(function() {
    Route::get("/test" , function() {
        return "kldaşslkdşalksd";
    });
});

Route::controller(LoginController::class) -> group(function() {
    Route::post("/login" , "isLogin");
});

Route::get('/profile', function () {
    $user = JWTAuth::parseToken();
    $user = JWTAuth::parseToken()->authenticate();
    return response()->json($user) ;
})->middleware('jwt.auth');



