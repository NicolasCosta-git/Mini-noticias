<?php

use Illuminate\Support\Facades\Auth;
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
	return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('/write', ['as' => 'write.novo', 'uses' => 'App\Http\Controllers\NoticiasController@create']);
	Route::post('/write/salvar', ['as' => 'write.salvar', 'uses' => 'App\Http\Controllers\NoticiasController@store']);
	Route::get('/write/{id}/edit', [App\Http\Controllers\NoticiasController::class, 'edit']);
	Route::get('/home', [App\Http\Controllers\NoticiasController::class, 'index'])->name('home');
	Route::put('/write/{id}/update', [App\Http\Controllers\NoticiasController::class, 'update']);
	Route::delete('/write/{id}/delete', [App\Http\Controllers\NoticiasController::class, 'delete']);
});
