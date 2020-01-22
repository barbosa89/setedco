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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/offline', function () {
    return view('modules/laravelpwa/offline');
});

Route::post('/contact', 'ContactController@sendMessage')
	->name('contact')
	->middleware(['sanitize', 'guest']);
