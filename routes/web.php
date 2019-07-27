<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/submit', 'BeeStringController@submit');