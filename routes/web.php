<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/bee_String_view', function () {
    return view('bee_String_view');
});

Route::get('/Aththana_detail_form', function () {
    return view('Detail_Forms.AththanaForm');
});
Route::get('/Aththana_detail_form1', function () {
    return view('Detail_Forms.AththanaFirst');
});
Route::get('/Divikaduru_detail_form', function () {
    return view('Detail_Forms.DivikaduruForm');
});
Route::get('/Divikaduru_detail_form1', function () {
    return view('Detail_Forms.DivikaduruFirst');
});
Route::get('/Diyakaduru_detail_form', function () {
    return view('Detail_Forms.DiyakaduruForm');
});
Route::get('/Diyakaduru_detail_form1', function () {
    return view('Detail_Forms.DiyakaduruFirst');
});
Route::get('/Endaru_detail_form', function () {
    return view('Detail_Forms.EndaruForm');
});
Route::get('/Endaru_detail_form1', function () {
    return view('Detail_Forms.EndaruFirst');
});
Route::get('/GodaKaduru_detail_form', function () {
    return view('Detail_Forms.GodaKaduruForm');
});
Route::get('/GodaKaduru_detail_form1', function () {
    return view('Detail_Forms.GodaKaduruFirst');
});
Route::get('/Habarala_detail_form', function () {
    return view('Detail_Forms.HabaralaForm');
});
Route::get('/Habarala_detail_form1', function () {
    return view('Detail_Forms.HabaralaFirst');
});

Route::post('/submitAththana', 'FloraController@submitAththana');
Route::post('/submitAththana1', 'FloraController@submitAththanaPHN');
Route::post('/submitDivikaduru', 'FloraController@submitDivikaduru');
Route::post('/submitDivikaduru1', 'FloraController@submitDivikaduruPHN');
Route::post('/submitDiyakaduru', 'FloraController@submitDiyakaduru');
Route::post('/submitDiyakaduru1', 'FloraController@submitDiyakaduruPHN');
Route::post('/submitEndaru', 'FloraController@submitEndaru');
Route::post('/submitEndaru1', 'FloraController@submitEndaruPHN');
Route::post('/submitGodaKaduru', 'FloraController@submitGodaKaduru');
Route::post('/submitGodaKaduru1', 'FloraController@submitGodaKaduruPHN');
Route::post('/submitHabarala', 'FloraController@submitHabarala');
Route::post('/submitHabarala1', 'FloraController@submitHabaralaPHN');

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



//bee string search record
Route::post('/phnsearch','RecordSearch@phnsearch');
Route::get('/record','RecordSearch@phnsearch');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



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
