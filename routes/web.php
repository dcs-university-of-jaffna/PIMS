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

Route::get('/Fauna_detail_form/{id}','FaunaController@FirstPage');        
Route::post('/submitFauna', 'FaunaController@submitFauna');
Route::post('/submit_fauna_first_page', 'FaunaController@submitFaunaPHN');

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

Route::get('Chemicals_Details/First_Page/{id}','ChemicalController@firstpage');
Route::get('Chemicals_Details/Carbamate_Insecticides/{id}', 'ChemicalController@index');
Route::get('Chemicals_Details/Submitted','ChemicalController@save');


//------------------------------------------chamikara--------------------------------



//------------------------------------------chathuranga------------------------------
Route::get('/update/{id}/edit','update@edit')->name('incident.edit');
Route::patch('/update/{id}','update@update')->name('incident.update');

//Route::get('/home')->name('home');

//------------------------------------------Dilshan ---------------------------------

//show is_submit = 0 details in /home page
Route::get('/home', 'FrontController@show_save_record');

//serch phn number in home blade  & show all record in record blade
Route::post('/phnsearch','RecordSearch@phnsearch');
Route::get('/record','RecordSearch@phnsearch');


//--------------- phn search -----------

//show record for search phn value using incident->id
Route::get('/record_view/{incident_id}/{toxicity_id}/{toxicity_name}/{toxicity_sub_group}','view_record_controller_phn_search@view_record');

//update record for search phn value using incident->id
Route::get('/record_update/{incident_id}/{toxicity_id}/{toxicity_name}/{toxicity_sub_group}','update_record_controller_phn_search@view_record');



//----------------flora view----------------------

//Divi kaduru view show search phn
Route::get('/flora_view/View_Divi_kaduru', 'view_record_controller_phn_search@view_record');

//Aththana view show search phn
Route::get('/flora_view/View_Aththtna', 'view_record_controller_phn_search@view_record');

//Diya Kaduru view show search phn
Route::get('/flora_view/View_Diya_Kaduru', 'view_record_controller_phn_search@view_record');

//Endaru view show search phn
Route::get('/flora_view/Endaru', 'view_record_controller_phn_search@view_record');

//Godakaduru view show search phn
Route::get('/flora_view/Godakaduru', 'view_record_controller_phn_search@view_record');

//Habarala view show search phn
Route::get('/flora_view/Habarala', 'view_record_controller_phn_search@view_record');

//Habarala view show search phn
Route::get('/flora_view/Hondala', 'view_record_controller_phn_search@view_record');


//Kaneru view show search phn
Route::get('/flora_view/Kaneru', 'view_record_controller_phn_search@view_record');

//Kepunkiriya view show search phn
Route::get('/flora_view/Kepunkiriya', 'view_record_controller_phn_search@view_record');

//Niyagala view show search phn
Route::get('/flora_view/Niyagala', 'view_record_controller_phn_search@view_record');

//Olinda view show search phn
Route::get('/flora_view/Olinda', 'view_record_controller_phn_search@view_record');


//Unknown_plant_poisoning view show search phn
Route::get('/flora_view/Unknown_plant_poisoning', 'view_record_controller_phn_search@view_record');



//----------------flora update----------------------

//Divi kaduru update show search phn
Route::get('/flora_update/flora_update', 'update_record_controller_phn_search@view_record');

//Aththana update show search phn
Route::get('/flora_update/flora_update', 'update_record_controller_phn_search@view_record');

//Diya Kaduru update show search phn
Route::get('/flora_update/flora_update', 'update_record_controller_phn_search@view_record');

//Endaru update show search phn
Route::get('/flora_update/flora_update', 'update_record_controller_phn_search@view_record');

//Godakaduru update show search phn
Route::get('/flora_update/flora_update', 'update_record_controller_phn_search@view_record');

//Habarala update show search phn
Route::get('/flora_update/flora_update', 'update_record_controller_phn_search@view_record');

//Habarala update show search phn
Route::get('/flora_update/flora_update', 'update_record_controller_phn_search@view_record');


//Kaneru update update search phn
Route::get('/flora_update/flora_update', 'update_record_controller_phn_search@view_record');

//Kepunkiriya update show search phn
Route::get('/flora_update/flora_update', 'update_record_controller_phn_search@view_record');

//Niyagala update show search phn
Route::get('/flora_update/flora_update', 'update_record_controller_phn_search@view_record');

//Olinda update show search phn
Route::get('/flora_update/flora_update', 'update_record_controller_phn_search@view_record');

//Unknown_plant_poisoning update show search phn
Route::get('/flora_update/flora_update', 'update_record_controller_phn_search@view_record');

//submit flora update details
Route::post('/update_phn_search_flora', 'UpdateController@submitFlora');
