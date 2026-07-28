<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// First Routing
Route::get('/', function () {
    return view('welcome');
});

// Home Route

// Route::view('/home', 'home');

// About Route With Data Passing
Route::get('/about/{name}',function($name){
   
    return view('about',['name'=>$name]);

});

// Controller
Route::get('user',[UserController::class,'getUser']);
Route::get('abuser/{name}',[UserController::class,'aboutUser']);
Route::get('getUserName/{name}',[UserController::class,'getUserName']);
Route::get('admin',[UserController::class,'adminLogin']);
Route::get('user-about',[UserController::class,'abouth']);
Route::get('home',[UserController::class,'getUserHome']);

// User From passing using laravel
Route::view('user-form','user-form');
Route::post('addUser',[UserController::class,'addUser']);


// User Form 2
Route::view('user-form2','user-form2');
Route::post('addUser2',[UserController::class,'addUser2']);