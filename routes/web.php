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
})->middleware('auth');

//home
Route::get('/home', [HomeController::class, 'index'])->name('home');


//datadiri
Route::get('/datadiri', [DatadiriController::class,'index'])->name('datadiri');

Route::get('/tambahdata', [DatadiriController::class,'tambahdata'])->name('tambahdata');

Route::post('/insertdatadiri', [DatadiriController::class,'store'])->name('insertdatadiri');

Route::get('/tampilandata/{id}', [DatadiriController::class,'tampilandata'])->name('tampilandata');

Route::put('/updatedata/{id}', [DatadiriController::class,'update'])->name('updatedata');

Route::delete('/deletedata/{id}', [DatadiriController::class,'destroy'])->name('deletedata');
//end datadiri


// catatan
Route::get('/catatan',[CatatanController::class, 'index'])->name('catatan');

Route::get('/tambahcatatan', [CatatanController::class,'tambahcatatan'])->name('tambahcatatan');

Route::post('/insertcatatan', [CatatanController::class,'store'])->name('insertcatatan');

Route::get('/tampilancatatan/{id}', [CatatanController::class,'tampilancatatan'])->name('tampilancatatan');

Route::put('/updatecatatan/{id}', [CatatanController::class,'update'])->name('updatecatatan');

Route::delete('/deletecatatan/{id}', [CatatanController::class,'destroy'])->name('deletecatatan');

//login
Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [LoginController::class, 'register'])->name('register');

Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

// auth

Route::group(['middleware' => ['auth','checkrole:admin']],function () {
    Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
    Route::get('user', function () { return view('user'); })->middleware(['checkRole:user,admin']);
});


// // catatan
// Route::get('/catatan',[CatatanController::class, 'index'])->name('catatan');

// Route::get('/tambahcatatan', [CatatanController::class,'tambahcatatan'])->name('tambahcatatan');

// Route::post('/insertcatatan', [CatatanController::class,'store'])->name('insertcatatan');

// Route::get('/tampilancatatan/{id}', [CatatanController::class,'tampilancatatan'])->name('tampilancatatan');

// Route::put('/updatecatatan/{id}', [CatatanController::class,'update'])->name('updatecatatan');

// Route::delete('/deletecatatan/{id}', [CatatanController::class,'destroy'])->name('deletecatatan');
    