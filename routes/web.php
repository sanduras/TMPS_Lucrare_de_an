<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\HorecaController;
use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('layouts.index');
// });

Route::get('/',[HorecaController::class,'index']);
Route::get('/product',[HorecaController::class,'display']);
Route::get('/filter',[HorecaController::class,'filter']);
Route::get('/order',[HorecaController::class,'ordering']);
Route::post('/send-email',[EmailController::class, 'sendEmail'])->name('send.email');