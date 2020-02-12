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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/authBackend/admin', 'HomeController@admin');
Route::get('/authFrontend/index', 'HomeController@index');
Route::get('/profile', 'ProfileController@show');
Route::post('/profile', 'ProfileController@update');
Route::get('/login', 'ProfileController@logout');
Route::get('/singin', 'singinController@create');
Route::post('/singin', 'singinController@store');
Route::get('/addBlog', 'blogpageController@show');
Route::post('/addBlog', 'blogpageController@store');

Route::get('/listBlog', 'blogpageController@view');
Route::get('/editBlog/{id}', 'blogpageController@update');
Route::post('/editBlog', 'blogpageController@edit');














Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

