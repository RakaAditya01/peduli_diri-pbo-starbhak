<?php

use App\Http\Controllers\CatatanController;
use App\Http\Controllers\DatadiriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('login.login');
});

//home
Route::get('/home', [HomeController::class, 'index'])->name('home');


//datadiri
Route::get('/data', [DatadiriController::class, 'index'])->name('data');


// catatan
Route::get('/catatan',[CatatanController::class, 'index'])->name('catatan');

//login
Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [LoginController::class, 'register'])->name('register');

Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
