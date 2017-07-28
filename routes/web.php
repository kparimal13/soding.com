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
    return view('user.getInsert');
});

Route::group(['middleware' => 'checkuser'], function(){
	Route::get('/pagination','PaginationController@pagination');
	
	Route::get('/getInsert','CrudController@getInsert');
	Route::post('/postInsert','CrudController@postInsert');

});


Route::get('/getEditDashboard/{id}','CrudController@getEditDashboard');
Route::post('/postUpdateDashboard/{id}','CrudController@postUpdateDashboard');
Route::post('/postDeletePagination/{id}','CrudController@postDeletePagination');


Route::get('/getEdit/{id}','CrudController@getEdit');
Route::post('/postUpdate/{id}','CrudController@postUpdate');
Route::post('/postDelete/{id}','CrudController@postDelete');




Route::post('/postDeleteDashboard/{id}','CrudController@postDeleteDashboard');
Route::get('/logout','CrudController@logout');
