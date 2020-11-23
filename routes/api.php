<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BengkelController as Bengkel;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

#Modul Bengkel
Route::middleware('auth:api')->get('/bengkel',[Bengkel::class,'index']);
Route::middleware('auth:api')->post('/tambah_bengkel',[Bengkel::class, 'tambahBengkel']);
Route::middleware('auth:api')->put('edit_bengkel/{id}',[Bengkel::class, 'editBengkel']);
