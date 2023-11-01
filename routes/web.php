<?php

use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RentController;
use Illuminate\Support\Facades\Auth;
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


Route::middleware(['guest'])->group(function () {
    Route::get('login', [HomeController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'auth']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [HomeController::class, 'dashboard']);
    Route::get('rentForm', [HomeController::class, 'rentForm']);
    Route::get('returnForm', [HomeController::class, 'returnForm']);
    Route::get('rentLog', [HomeController::class, 'rentLog']);
    Route::get('returnLog', [HomeController::class, 'returnLog']);
    Route::get('approval', [HomeController::class, 'approval']);
    Route::get('export', [HomeController::class, 'export']);

    Route::post('rentForm', [RentController::class, 'storeRent']);
    Route::post('returnForm', [RentController::class, 'storeReturn']);
    
    Route::get('logout', [AuthController::class, 'logout']);
    Route::post('approval', [ApprovalController::class, 'approved']);
});