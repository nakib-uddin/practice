<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('fruite',[UserController::class,'fruite']);
//Route::get('about',[UserController::class,'about']);
//Route::get('user/{id}/{name}', [UserController::class, 'display']);
Route::view('/','home');
Route::post('users',[UsersController::class,'getData']);
Route::view('login','users');

