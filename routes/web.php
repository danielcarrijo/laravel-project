r<?php

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

Route::get('/', 'WelcomeController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/cards/', 'CardsController@index')->name('cards');
Route::post('/home/cards/', 'CardsController@store')->name('cards.store');


//------------------------------USER--------------------------------//
Route::get('/home/users/', 'UserController@index')->name('user.index');
Route::get('/home/register/','UserController@create')->name('user.create');
Route::post('/home/users/', 'UserController@store')->name('user.store');
Route::get('/home/users/{id}/edit', 'UserController@edit')->name('user.edit');
Route::post('/home/users/{id}/edit', 'UserController@update')->name('user.update');
Route::get('/home/users/{id}/', 'UserController@destroy')->name('user.destroy');

Route::get('/home/carousel/', 'CarouselController@index')->name('carousel.index');
Route::get('/home/carousel/create','CarouselController@create')->name('carousel.create');
Route::post('/home/carousel/', 'CarouselController@store')->name('carousel.store');
Route::get('/home/carousel/{id}/edit', 'CarouselController@edit')->name('carousel.edit');
Route::post('/home/carousel/{id}/edit', 'CarouselController@update')->name('carousel.update');
Route::get('/home/carousel/{id}/', 'CarouselController@destroy')->name('carousel.destroy');

//Route::resource('/home/carousels/','CarouselController')->names('carousel');
Route::get('/home/contato/', 'ContatoController@index')->name('contato.index');
Route::post('/home/contato/', 'ContatoController@store')->name('contato.store');
Route::get('/home/contato/{id}', 'ContatoController@destroy')->name('contato.destroy');

Route::get('/home/textos/', 'TextoController@index')->name('textos.index');
Route::get('/home/textos/{id}/edit', 'TextoController@edit')->name('textos.edit');
Route::post('/home/textos/{id}/edit', 'TextoController@update')->name('textos.update');