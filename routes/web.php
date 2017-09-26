<?php


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', ['as' => 'app.users.index', 'uses' => 'DBUsersController@index']);
