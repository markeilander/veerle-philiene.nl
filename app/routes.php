<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
// Patterns
Route::pattern('id', '[0-9]+');
Route::pattern('type', '[a-z\-]+');
// Home
Route::get('/', 'HomeController@index');
Route::get('/cadeau/{id}', 'HomeController@cadeau');
Route::post('/cadeau/{id}', 'HomeController@postCadeau');
// Admin
Route::get('/admin', 'AdminController@dashboard')->before('auth');
Route::get('/admin/veerle', 'AdminController@veerle')->before('auth');
Route::get('/admin/philiene', 'AdminController@philiene')->before('auth');
Route::get('/admin/cadeaus', 'AdminController@cadeaus')->before('auth');
// Cadeau
Route::get('/cadeau/add', 'CadeauController@add')->before('auth');
Route::post('/cadeau/add', 'CadeauController@postAdd')->before('auth');
Route::get('/cadeau/edit/{id}', 'CadeauController@edit')->before('auth');
Route::post('/cadeau/edit/{id}', 'CadeauController@postEdit')->before('auth');
Route::get('/cadeau/delete/{id}', 'CadeauController@delete')->before('auth');
// Veerle
Route::get('/veerle/add/{type}', 'VeerleController@add')->before('auth');
Route::post('/veerle/add/{type}', 'VeerleController@postAdd')->before('auth');
Route::get('/veerle/edit/{id}/{type}', 'VeerleController@edit')->before('auth');
Route::post('/veerle/edit/{id}/{type}', 'VeerleController@postEdit')->before('auth');
// Philiene
Route::get('/philiene/add/{type}', 'PhilieneController@add')->before('auth');
Route::post('/philiene/add/{type}', 'PhilieneController@postAdd')->before('auth');
Route::get('/philiene/edit/{id}/{type}', 'PhilieneController@edit')->before('auth');
Route::post('/philiene/edit/{id}/{type}', 'PhilieneController@postEdit')->before('auth');
// Baby
Route::get('/baby/delete/{id}', 'BabyController@delete')->before('auth');
// Auth
Route::get('/logout', 'AuthController@logout');
Route::get('/login', 'AuthController@login')->before('guest');
Route::post('/login', 'AuthController@postLogin')->before('guest');
