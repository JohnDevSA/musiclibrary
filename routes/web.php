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

Route::get('/album/create', 'AlbumsController@create')->name('albums.create')->middleware('auth');

Route::post('/album/store', 'AlbumsController@store')->name('album.store')->middleware('auth');

Route::patch('/album/update/{id}', 'AlbumsController@update')->name('album.update')->middleware('auth');

Route::get('album/edit/{id}','AlbumsController@edit')->name('album.edit')->middleware('auth');

Route::post('album/destroy/{id}','AlbumsController@destroy')->name('album.destroy')->middleware('auth');

Route::get('album/show/{id}','AlbumsController@show')->name('album.show');

Route::get('/albums', 'AlbumsController@index')->name('albums.index');



