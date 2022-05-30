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

Route::get('/', 'HomeController@home')->name('home');

Route::get('/create', 'HomeController@create')->name('create');

Route::get('/edit', 'HomeController@edit')->name('edit');

Route::get('/page/{id}', 'PageController@page')->name('page');

Route::post('/film', 'HomeController@film');

Route::get('/movie', 'HomeController@movie');













