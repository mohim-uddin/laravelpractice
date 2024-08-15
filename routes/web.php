<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware;

Route::get('/',function(){
    return view('welcome');
})->name('home');
Route::get('/dashboard',function(){
  return view('layout.dashboard');
})->name('dashboard');
//Route::get('/dashboard',[AuthController::class,'dashboardfunction'])->name('dashboard');
//Route::view('/','welcome');
//Route::middleware("auth")->group(function(){

  //  Route::view('/','welcome')->name("home");
//});
    
//Route::view('/register', 'layout/register');
//Route::view('/login', 'layout/login');
Route::get("/login",[AuthController::class,"login"])->name("login");
Route::post("/login",[AuthController::class,"loginPost"])
->name("login.post");
Route::get("/register",[AuthController::class,"register"])->name("register");
Route::post("/register",[AuthController::class,"registerPost"])
->name("register.post");
Route::get("/logout",[AuthController::class,"logout"])->name("logout");
Route::view('/header','layout/header');