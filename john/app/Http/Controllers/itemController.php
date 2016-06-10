<?php

namespace App\Http\Controllers;

use App\Http\Models\Lab;
use App\Http\Models\Vaccine;
use Illuminate\Http\Request;
use App\Http\Models\Medicine;

class itemController extends Controller
{
    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | FUNCTION FOR ADDING MEDICINE IN THE NEDICINE LIST
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function addMedicine(Request $request) {

    	if($request->ajax()){
	        $medicine = $request->only(['medicine_name']);

	        $medicine = Medicine::create($medicine);

	    	$response = array(
	            'status' => 'success',
	            'msg' 	 => 'Vaccine created successfully',
	        );

        	return \Response::json($response);  // <<<<<<<<< see this line

	    }else{
	        return false;
	    }

    }//--------------------------------------------------------------------------------------------------------------------------------------------

    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | FUNCTION FOR DISPLAYING MEDICINE LIST ON THE MEDICINE TABLE
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function medicineTable(Request $request) {

    	if($request->ajax()){

	        $medicine = Medicine::find(all);

	    	$response = array(
	            'status' => 'success',
	            'msg' 	 => 'Setting created successfully',
	        );

        	return \Response::json($response);  // <<<<<<<<< see this line

	    }else{
	        return false;
	    }

    }//--------------------------------------------------------------------------------------------------------------------------------------------


    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | FUNCTIONS FOR ADDING VACCINE IN THE VACCINE LIST
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function addVaccine(Request $request) {
    	if($request->ajax()){
	        $vaccine = $request->only(['vaccine_name','vaccine_for','schedule']);

	        $vaccine = Vaccine::create($vaccine);

	    	$response = array(
	            'status' => 'success',
	            'msg' 	 => 'Vaccine created successfully',
	        );

        	return \Response::json($response);  // <<<<<<<<< see this line

	    }else{
	        return false;
	    }
    }//--------------------------------------------------------------------------------------------------------------------------------------------


    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | FUNCTION FOR ADDING LABORATORY TPE IN THE LIST
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function addLab(Request $request) {
    	if($request->ajax()){
	        $lab = $request->only(['lab_name','lab_desc']);

	        $lab = Lab::create($lab);

	    	$response = array(
	            'status' => 'success',
	            'msg' 	 => 'Setting created successfully',
	        );

        	return \Response::json($response);  // <<<<<<<<< see this line

	    }else{
	        return false;
	    }
    }//--------------------------------------------------------------------------------------------------------------------------------------------

}
