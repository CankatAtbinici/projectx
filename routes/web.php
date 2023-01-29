<?php

use App\Mail\NotifyMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}
);

Route::get('/send-email', function() 
{
        $array = [
            "name" => "Cankat", 
            "surname" => "Atbinici",
            "date" => date('Y/m/d')
        ];
   
          Mail::send('mails.demo_mail' ,$array , function($message) {
                $message->to('cankatbinici@gmail.com' , 'deneme')->subject("bu bir test mailidir");
         });
        return "başarılı";
});