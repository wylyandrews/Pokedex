<?php

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

Route::get('/', 'PagesController@home');

Route::get('/login', 'PagesController@login');

Route::get('/pokemon', 'PagesController@viewPokemon');

//Route::get('/import', 'PagesController@import');

//Route::post('/import/importAction', 'PagesController@importAction');
