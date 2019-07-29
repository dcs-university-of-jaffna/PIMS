<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/summary', function () {
    return view('summaries/summary');
});

//bee string search record
Route::post('/phnsearch','RecordSearch@phnsearch');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/submit', 'BeeStringController@submit');
