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

Route::get('/summary', function () {
    return view('summaries/summary');
});

Route::post('/submit', 'BeeStringController@submit');

Route::get('/recordview', function () {
    return view('recordview');
});

Route::get('/beestring_record_update', function () {
    return view('beestring_record_update');
});


//show bee sting details fill the bee stirng form
Route::get('/bee_String_view', function () {
    return view('bee_record_update');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::post('/submit', 'BeeStringController@submit');


//--------------------------------------Rayan--------------------------------------

Route::get('/Flora_detail_form/{id}','FloraController@FirstPage');        
Route::post('/submitFlora', 'FloraController@submitFlora');
Route::post('/submit_flora_first_page', 'FloraController@submitFloraPHN');

//--------------------------------------Thushangi-----------------------------------

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

//------------------------------------------chamikara--------------------------------



//------------------------------------------chathuranga------------------------------



//------------------------------------------Dilshan ---------------------------------

//show is_submit = 0 details in /home page
Route::get('/home', 'FrontController@show_save_record');

//serch phn number in home blade  & show all record in record blade
Route::post('/phnsearch','RecordSearch@phnsearch');
Route::get('/record','RecordSearch@phnsearch');

