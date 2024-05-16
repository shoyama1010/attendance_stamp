<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\StampController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AuthController;
// use App\Http\Controllers\TestController;

Route::get('/Register', [RegisteredController::class, 'register']);
Route::get('/', [AuthController::class, 'index']);
// Route::get('/login', [AuthorController::class, 'auth']);
// Route::get('/login', [AuthController::class, 'login']);
Route::get('/', [StampController::class, 'index']);
Route::post('/attendance', [AttendanceController::class, 'store']);
// Route::get('/', [TestController::class, 'index']);

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/', [StampController::class, 'index']);