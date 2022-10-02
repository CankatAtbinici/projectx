<?php

use App\Http\Controllers\BadwordsController;
use App\Http\Controllers\NewUserController;
use App\Http\Controllers\Test;
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
    Route::post("/users", "store");
    Route::put("/users/{id}", "update");
    Route::delete("/users/{id}", "destroy");
});
