<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/bee_String_view', function () {
    return view('bee_String_view');
});

Route::get('/form', function () {
    return view('form');
});

//show bee sting details fill the bee stirng form
Route::get('/bee_String_view{records_id}{phn}','RecordSearch@show_bee_sting_details');


//bee string search record
Route::post('/phnsearch','RecordSearch@phnsearch');
Route::get('/record','RecordSearch@phnsearch');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/submit', 'BeeStringController@submit');