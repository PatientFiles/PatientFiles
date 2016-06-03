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

Route::resource('/next','homeController@next');

Route::resource('/prev','homeController@prev');

Route::resource('searchResult','homeController@searchResult');

Route::get('patientProfile/{id}','patientController@patientProfile');

Route::get('patient/edit_patient/{id}','homeController@editPatient');

Route::resource('logout','homeController@logout');

Route::resource('register','homeController@register');

Route::resource('scheduler','homeController@scheduler');

Route::resource('accounts','userController@accounts');

/*
 * ROUTE FOR Patient Profile
 */


Route::post('/saveVitals/{id}','patientController@saveVitals');

Route::post('/add_patient','patientController@addPatient');

Route::get('/consultation/{id}','patientController@newConsult');


/*
 * ROUTE FOR User Accounts
 */

Route::post('/add_account','userController@addAccount');

Route::get('/account/add_account','userController@addAccountPage');

Route::get('/account/edit_account','userController@editAccount');

Route::get('/delete_account/{user_id}','userController@deleteAccount');

/*
 * ROUTEs FOR Exception Handling
 */
Route::get('error','homeController@error');


