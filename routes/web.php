<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// First Routing
Route::get('/', function () {
    return view('welcome');
});

// Home Route

Route::view('/home', 'home');

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
Route::get('new',[UserController::class,'getUserHome']);