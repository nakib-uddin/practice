<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ToureController;
use App\Http\Controllers\EmployeeController;


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

Route::view('/','welcome');
Route::get('home',[UsersController::class,'home'])->name('home');
Route::get('contact',[UsersController::class,'contact'])->name('contact');
Route::get('aboutus',[UsersController::class,'about'])->name('about1');
Route::get('practice',[UsersController::class,'getData']);
Route::get('toure',[ToureController::class,'getData']);
Route::get('employee',[EmployeeController::class,'getData']);


