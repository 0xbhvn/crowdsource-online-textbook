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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/uni/dashboard', 'HomeController@uniDash')->middleware('uni');
Route::get('/uni/textbooks', 'TextbookController@index')->middleware('uni');

Route::get('/mod/dashboard', 'HomeController@modDash')->middleware('mod');

Route::get('/textbooks/create', 'TextbookController@create')->middleware('uni');
Route::post('/textbooks', 'TextbookController@store')->middleware('uni');

Route::get('/textbooks/{topic}', 'TopicController@show');
Route::get('/textbooks/{topic}/add', 'TopicController@create');
Route::post('/textbooks/{topic}', 'TopicController@store');

