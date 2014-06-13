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
// Auth
Route::get('/logout', 'AuthController@logout');
Route::get('/login', 'AuthController@login')->before('guest');
Route::post('/login', 'AuthController@postLogin')->before('guest');
//Elfinder
Route::group(array('before' => 'auth'), function()
    {
        \Route::get('elfinder', 'Barryvdh\Elfinder\ElfinderController@showIndex');
        \Route::any('elfinder/connector', 'Barryvdh\Elfinder\ElfinderController@showConnector');
        \Route::get('elfinder/ckeditor4', 'Barryvdh\Elfinder\ElfinderController@showCKeditor4');
    });
