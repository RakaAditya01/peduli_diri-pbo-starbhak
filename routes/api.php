<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Catatanapicontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//posts
Route::apiResource('/catatans', App\Http\Controllers\Api\catatanapicontroller::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


