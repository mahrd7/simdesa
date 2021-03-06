<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', 'AdminController@index');
    Route::get('penduduk/kk', 'PendudukController@kk');
    Route::get('penduduk/ktp', 'PendudukController@ktp');
 	Route::get('penduduk/xlsx', 'PendudukController@exportToExcel');
	Route::resource('penduduk', 'PendudukController');
	Route::resource('keluarga', 'KeluargaController');
	Route::resource('tanah', 'TanahController');
    Route::resource('ktp', 'KtpController');
    Route::resource('aparat', 'AparatController');
    Route::resource('inventaris', 'InventarisController');
    Route::resource('keputusan', 'KeputusanController');
	Route::resource('peraturan', 'PeraturanController');

    Route::get('/home', 'HomeController@index');
});
