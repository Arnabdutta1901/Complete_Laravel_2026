<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;


// First Routing
Route::get('/', function () {
    return view('welcome');
});

// Home Route

// Route::view('/home', 'home');

// About Route With Data Passing
// Route::get('/about/{name}',function($name){
   
//     return view('about',['name'=>$name]);

// });

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

// URL GENERATOR
Route::view('home','home');
Route::view('user','home');
Route::view('about','about');

// URL WITH CHILD ROUTE
Route::view('about/{name}','about');

// ==================Named Route====================//
Route::view('home/profile/user','home3')->name('hm');
Route::view('home/profile/{name}','home3')->name('user');
Route::get('show', [HomeController::class, 'show']);
Route::get('user',[HomeController::class,'user']);

//==================Route With a Group===================//
Route::prefix('student')->group(function(){
      Route::view('/s1','Student');
      Route::get('/add',[StudentController::class,'add']);
      Route::get('/update',[StudentController::class,'update']);

});

// ====Route Group With Controller======//
Route::controller(StudentController::class)->group(function(){
    Route::get('show','show');
    Route::get('add','add');
    Route::get('delete','delete');
    Route::get('about/{name}','about');
});
