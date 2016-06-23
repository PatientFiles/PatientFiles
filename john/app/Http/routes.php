
<?php

/*--------------------------------------------------------------------------------
| ROUTE FOR LOGIN CONTROLLER
|---------------------------------------------------------------------------------
|
|
*/
Route::resource('/','loginController');
Route::resource('/medix','loginController@medixAPI');


/*--------------------------------------------------------------------------------
| ROUTE FOR HOME CONTROLLER
|---------------------------------------------------------------------------------
|
*/
Route::resource('/home','homeController');
Route::resource('/next','homeController@next');
Route::resource('/prev','homeController@prev');
Route::resource('/logout','homeController@logout');
Route::resource('/accounts','userController@accounts');
Route::resource('/register','homeController@register');
Route::resource('/scheduler','homeController@scheduler');
Route::resource('/searchResult','homeController@searchResult');
Route::resource('/patientRecords','homeController@patientRecords');
Route::get('/patientProfile/{id}','patientController@patientProfile');
Route::get('/patient/edit_patient/{id}','homeController@editPatient');
Route::get('/analytics','homeController@analytics');

/*--------------------------------------------------------------------------------
| ROUTE FOR PATIENT PROFILE
|---------------------------------------------------------------------------------
|
*/
Route::post('/add_patient','patientController@addPatient');
Route::post('/edit_patient','patientController@editPatient');
Route::post('/saveVitals/{id}','patientController@saveVitals');

/*--------------------------------------------------------------------------------
| ROUTE FOR USER ACCOUNTS
|---------------------------------------------------------------------------------
|
*/
Route::post('/add_account','userController@addAccount');
Route::post('/account/edit_account','userController@editPed');
Route::get('/account/add_account','userController@addAccountPage');
Route::get('/account/edit_account/{id}','userController@editAccount');
Route::get('/delete_account/{user_id}','userController@deleteAccount');

/*--------------------------------------------------------------------------------
| ROUTEs FOR EXCEPTION HANDLING
|---------------------------------------------------------------------------------
|
|
*/
Route::get('/internet_lost', function(){
	return view('pages.noInternet');
});
Route::get('/error','homeController@error');

/*---------------------------------------------------------------------------------
|ROUTEs FOR CONSULTATON SERVICE
|----------------------------------------------------------------------------------
|
*/
Route::get('/end_visit','consultationController@endVisit');
Route::get('/consultation/{id}','consultationController@start_visit');
Route::get('/finish_vaccine/{id}', 'consultationController@finish_vaccine');
Route::get('/printPrescription/{id}','consultationController@createPrescription');
Route::post('/new_appointment', 'consultationController@appointmentForNewPatient');
Route::post('/old_appointment', 'consultationController@appointmentForOldPatient');

Route::get('/queue', function(){
		return view('pages.queue');
});

Route::post('/consultation/diagnosis', 'consultationController@diagnosis');
Route::post('/consultation/labrequest', 'consultationController@labrequest');
Route::post('/consultation/vaccination', 'consultationController@vaccination');
Route::post('/consultation/prescription', 'consultationController@prescription');

/*---------------------------------------------------------------------------------
|ROUTEs FOR ADDING ITEMS
|----------------------------------------------------------------------------------
|
*/
Route::post('/items/add_lab','itemController@addLab');
Route::post('/items/add_vaccine','itemController@addVaccine');
Route::post('/items/add_medicine','itemController@addMedicine');

/*---------------------------------------------------------------------------------
|ROUTEs FOR DISPLAYING DATA TO ITEMS TABLE
|----------------------------------------------------------------------------------
|
*/

Route::resource('/items','itemController@items');

/*---------------------------------------------------------------------------------
|ROUTEs FOR editing medicine
|----------------------------------------------------------------------------------
|
*/
Route::post('/items/edit_lab/{id}','itemController@editLab');
Route::post('/items/edit_vaccine/{id}','itemController@editVaccine');
Route::post('/items/edit_medicine/{id}','itemController@editMedicine');

/*---------------------------------------------------------------------------------
|ROUTEs FOR SOFT DELETING DATA TO ITEMS TABLE
|----------------------------------------------------------------------------------
|
*/

Route::delete('/items/delete_lab/{id}','itemController@deleteLab');
Route::delete('/items/delete_vaccine/{id}','itemController@deleteVaccine');
Route::delete('/items/delete_medicine/{id}','itemController@deleteMedicine');