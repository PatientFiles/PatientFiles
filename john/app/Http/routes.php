
<?php

/*--------------------------------------------------------------------------------
| ROUTE FOR LOGIN CONTROLLER
|---------------------------------------------------------------------------------
|
|
*/
Route::resource('/','loginController');
Route::resource('medix','loginController@medixAPI');


/*--------------------------------------------------------------------------------
| ROUTE FOR HOME CONTROLLER
|---------------------------------------------------------------------------------
|
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


/*--------------------------------------------------------------------------------
| ROUTE FOR PATIENT PROFILE
|---------------------------------------------------------------------------------
|
*/
Route::post('/saveVitals/{id}','patientController@saveVitals');
Route::post('/add_patient','patientController@addPatient');


/*--------------------------------------------------------------------------------
| ROUTE FOR USER ACCOUNTS
|---------------------------------------------------------------------------------
|
*/
Route::post('/add_account','userController@addAccount');
Route::get('/account/add_account','userController@addAccountPage');
Route::get('/account/edit_account/{id}','userController@editAccount');
Route::get('/delete_account/{user_id}','userController@deleteAccount');


/*--------------------------------------------------------------------------------
| ROUTEs FOR EXCEPTION HANDLING
|---------------------------------------------------------------------------------
|
|
*/
Route::get('error','homeController@error');


/*---------------------------------------------------------------------------------
|ROUTEs FOR CONSULTATON SERVICE
|----------------------------------------------------------------------------------
|
*/
Route::get('/consultation/{id}','patientController@newConsult');
Route::get('end_visit','consultationController@endVisit');
Route::get('pdf','consultationController@createPrescription');
Route::post('new_appointment', 'consultationController@appointmentForNewPatient');
Route::post('old_appointment', 'consultationController@appointmentForOldPatient');

Route::get('/queue', function(){
		return view('pages.queue');
});


