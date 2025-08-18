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

Route::get('/', 'App\Http\Controllers\LoginController@index');
Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

Route::get('/signup', 'App\Http\Controllers\SignupController@index')->name('signup');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->middleware('auth');
Route::get('/profile', 'App\Http\Controllers\HomeController@profile')->middleware('auth');

Route::get('/projects', 'App\Http\Controllers\ProjectsController@index')->middleware('auth');
Route::get('/projects/details/{id}', 'App\Http\Controllers\ProjectsController@get')->middleware('auth');

Route::middleware(['auth', 'admin.only'])->group(function () {
    Route::get('/admin', 'App\Http\Controllers\AdminController@index');
    Route::get('/admin/users', 'App\Http\Controllers\AdminController@users');
    Route::get('/admin/users/create', 'App\Http\Controllers\AdminController@create');

    Route::get('/projects/create', 'App\Http\Controllers\ProjectsController@create');
});


