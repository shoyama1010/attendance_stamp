<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimeCardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

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
});

Route::get('/', [TimeCardController::class, 'index'])->name('home');

Route::get('/records', [TimeCardController::class, 'records'])->name('records');

Route::post('/records', [TimeCardController::class, 'index'])->name('records');

Route::middleware('auth')->group(function () {
    Route::post('/timecard/record', [TimeCardController::class, 'recordTime'])->name('timecard.record');

    Route::post('/records/search', [TimeCardController::class, 'search'])->name('records.search');
});

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');
// Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
