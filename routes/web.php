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

Route::get('/form', 'FormController@index');

Route::post('/submit', 'BeeStringController@submit');

Route::group(['middleware' => ['App\Http\Middleware\AuthenticateMiddleware']], function () {
    //admin routes

    Route::get('/Active/{id}','SetUserPermissionController@Active')->middleware('AuthenticateMiddleware');
    Route::get('/notActive/{id}','SetUserPermissionController@notActive')->middleware('AuthenticateMiddleware');
    Route::get('/Admin/{id}','SetUserPermissionController@Admin')->middleware('AuthenticateMiddleware');
    Route::get('/notAdmin/{id}','SetUserPermissionController@notAdmin')->middleware('AuthenticateMiddleware');
    Route::get('/userPermission/addnew','SetUserPermissionController@create')->middleware('AuthenticateMiddleware');
    Route::post('/userPermission','SetUserPermissionController@store')->middleware('AuthenticateMiddleware');
    Route::delete('/userPermission/{id}','SetUserPermissionController@destroy')->middleware('AuthenticateMiddleware');
    Route::resource('/userPermission','SetUserPermissionController')->middleware('AuthenticateMiddleware');
});


