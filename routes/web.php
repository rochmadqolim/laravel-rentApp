<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard',[HomeController::class, 'dashboard']);
Route::get('logs',[HomeController::class, 'logs']);
Route::get('rent',[HomeController::class, 'rent']);
Route::get('approval',[HomeController::class, 'approval']);
Route::get('login',[HomeController::class, 'login']);