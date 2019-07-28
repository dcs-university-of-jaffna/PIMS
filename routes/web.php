<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/submit', 'BeeStringController@submit');

//bee string search record
Route::post('/phnsearch','RecordSearch@phnsearch');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

