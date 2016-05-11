<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('/','loginController');



Route::resource('home','homeController');

Route::resource('dashboard','homeController@dashboard');

Route::resource('patientRecords','homeController@patientRecords');

Route::resource('searchResult','homeController@searchResult');

Route::resource('addPatient','homeController@addPatient');

Route::resource('patientProfile','homeController@patientProfile');

Route::resource('logout','homeController@logout');

Route::resource('viewProfile','homeController@viewProfile');

Route::resource('medix','loginController@fetchData');


