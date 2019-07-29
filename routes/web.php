<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});


Route::post('/submit', 'BeeStringController@submit');

Route::get('/recordview', function () {
    return view('recordview');
});



//bee string search record
Route::post('/phnsearch','RecordSearch@phnsearch');
Route::get('/record','RecordSearch@phnsearch');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

