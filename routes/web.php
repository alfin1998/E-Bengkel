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
Route::get('create','App\Http\Controllers\UsersController@create');

Route::post('tambahUsers', 'App\Http\Controllers\UsersController@tambahUser');

Route::get('deleteUsers/{id}','App\Http\Controllers\UsersController@deleteUsers');

Route::get('editUsers/{id}','App\Http\Controllers\UsersController@editUsers');

Route::post('updateUsers/{id}', 'App\Http\Controllers\UsersController@updateUsers');