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

Route::get('/norights',function(){
    return view('includes.norights');
});

Auth::routes();

Route::group(['middleware' => 'admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/users', 'UserController@index');
    Route::get('/users/{id}', 'UserController@show');
    Route::resource('posts', 'PostController');
});