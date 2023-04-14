<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewUserController;
use App\Http\Controllers\MeetingPlaningController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProfilePageController;

use App\Http\Controllers\Test;
use App\Models\UserExperienceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
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

/*
Route::controller(Test::class)->group(function () {
    Route::post("/test", "store");
    Route::get("/test", "getTest");
     
});
*/



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




//NEW MEETİNG RESERVATİON CREATE ROUTE
//Route::post('/newmeeting','MeetingPlaningController@store')->middleware('jwt.auth');



Route::controller(LoginController::class) -> group(function() {
    Route::post("/login" , "isLogin");
    Route::post('/user/visitor' , 'update_last_visit');
});



Route::middleware('jwt.auth')->group(function () {
    Route::get('/profile', [ProfilePageController::class, 'getUserProfilePageData']);
  //  Route::post('/register-experienced', [ProfilePageController::class , 'registerExperienced']);
});
Route::controller('jwt.auth')->group(function () {
    Route::post('/register-experienced', [ProfilePageController::class , 'registerExperienced']);
  
});

Route::get('/profile-visit' , [ProfilePageController::class , 'getProfileVisitData']);






//Mail;

//LandingPage


    Route::get("/landing" , [HomePageController::class , "getAllUserData"]);


