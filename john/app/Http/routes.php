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

/*
 * ROUTE FOR LOGIN CONTROLLER
 */
Route::resource('/','loginController');

Route::resource('medix','loginController@medixAPI');


/*
 * ROUTE FOR HOME CONTROLLER
 */
Route::resource('home','homeController');

Route::resource('patientRecords','homeController@patientRecords');

Route::resource('searchResult','homeController@searchResult');

Route::resource('patientProfile','homeController@patientProfile');

Route::resource('logout','homeController@logout');

Route::resource('viewProfile','homeController@viewProfile');

Route::resource('dashboard','homeController@dashboard');

Route::resource('register','homeController@register');

Route::resource('scheduler','homeController@scheduler');


