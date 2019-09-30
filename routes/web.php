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

Route::post('/submit', 'BeeStringController@submit');

Route::get('/recordview', function () {
    return view('recordview');
});

Route::get('/beestring_record_update', function () {
    return view('beestring_record_update');
});


// //show bee sting details fill the bee stirng form
// Route::get('/bee_String_view', function () {
//     return view('bee_record_update');
// });




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

Route::get('Chemicals_Details/Carbamate_Insecticides/{id}', 'ChemicalController@index');
Route::get('Chemicals_Details/First_Page','ChemicalController@firstpage');

//------------------------------------------chamikara--------------------------------



//------------------------------------------chathuranga------------------------------



//------------------------------------------Dilshan ---------------------------------

//show is_submit = 0 details in /home page
Route::get('/home', 'FrontController@show_save_record');

//serch phn number in home blade  & show all record in record blade
Route::post('/phnsearch','RecordSearch@phnsearch');
Route::get('/record','RecordSearch@phnsearch');

//Aththana view
Route::get('/View_Aththana', function () {
    return view('View_Aththana');
});



//Diya kaduru view
Route::get('/View_Diya_Kaduru', function () {
    return view('View_Diya_Kaduru');
});

//show record for search phn value usiing incident->id
Route::get('/record_view/{incident_id}/{toxicity_id}/{toxicity_name}/{toxicity_sub_group}','view_record_controller_phn_search@view_record');

//Divi kaduru view show search phn
Route::get('/View_Divi_kaduru', 'view_record_controller_phn_search@view_record');





