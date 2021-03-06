<?php

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route CRUD AdminUser
Route::get('create','App\Http\Controllers\UsersController@create'); //route dan controller

Route::post('tambahUsers', 'App\Http\Controllers\UsersController@tambahUsers');

Route::get('deleteUsers/{id}','App\Http\Controllers\UsersController@deleteUsers');

Route::get('editUsers/{id}','App\Http\Controllers\UsersController@editUsers');

Route::post('updateUsers/{id}', 'App\Http\Controllers\UsersController@updateUsers');

Route::get('indexUsers', 'App\Http\Controllers\UsersController@indexUsers');

//Admin 
Route::get('admin', 'App\Http\Controllers\HomeController@admin');