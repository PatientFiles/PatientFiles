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

    	if($request->ajax()) {
	        $medicine = $request->only(['medicine_name']);

	        $medicine = Medicine::create($medicine);

	    	$response = array(
	            'status' => 'success',
	            'msg' 	 => 'Vaccine created successfully',
                'data'   => $medicine
	        );

        	return \Response::json($response);

	    } 
	        return false;

    }

    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | FUNCTION FOR EDITING MEDICINE
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function editMedicine(Request $request, $id) {

        if($request->ajax()) {
            $request->only('medicine_name');
            $medicine_name = $request->input('medicine_name');
            $med = Medicine::find($id);
            $med->medicine_name = $medicine_name;

            $med->save();

            $response = array(
                'status' => 'success',
                'msg'    => 'Vaccine created successfully',
                'data'   => $med->save()
            );
            return \Response::json($response);
        }

        return false;
    }

    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | FUNCTION FOR EDITING VACCINE
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function editVaccine(Request $request, $id) {

        if($request->ajax()) {
            $request->only('vaccine_name','vaccine_for','schedule');

            $vaccine_name   = $request->input('vaccine_name');
            $vaccine_for    = $request->input('vaccine_for');
            $vaccine_sched  = $request->input('schedule');

            $vaccine = Vaccine::find($id);
            $vaccine->vaccine_name  = $vaccine_name;
            $vaccine->vaccine_for   = $vaccine_for;
            $vaccine->schedule      = $vaccine_sched;

            $vaccine->save();

            $response = array(
                'status' => 'success',
                'msg'    => 'Vaccine updated successfully',
                'data'   => $vaccine->save()
            );
            return \Response::json($response);
        }

        return false;
    }

    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | FUNCTION FOR EDITING LABORATORY
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function editLab(Request $request, $id) {
        if($request->ajax()) {
            $request->only('lab_name', 'lab_desc');

            $lab_name    = $request->input('lab_name');
            $lab_desc    = $request->input('lab_desc');

            $lab             = Lab::find($id);
            $lab->lab_name   = $lab_name;
            $lab->lab_desc   = $lab_desc;

            $lab->save();

            $response = array(
                'status' => 'success',
                'msg'    => 'Lab updated successfully',
                'data'   => $lab->save()
            );
            return \Response::json($response);
        }

        return false;
    }

    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | FUNCTION FOR SOFT DELETING MEDICINE
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function deleteMedicine(Request $request, $id) {

            $medicine = Medicine::find($id);
            $medicine->delete();
    }
    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | FUNCTION FOR SOFT DELETING VACCINE
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function deleteVaccine(Request $request, $id) {

            $vaccine = Vaccine::find($id);
            $vaccine->delete();
    }/*---------------------------------------------------------------------------------------------------------------------------------------------
    | FUNCTION FOR SOFT DELETING LAB
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
    public function deleteLab(Request $request, $id) {

            $lab = Lab::find($id);
            $lab->delete();
    }


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
                'data'   => $vaccine
	        );

        	return \Response::json($response);  // <<<<<<<<< see this line

	    }else{
	        return false;
	    }
    }


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
                'data'   => $lab
	        );

        	return \Response::json($response);  // <<<<<<<<< see this line

	    }else{
	        return false;
	    }
    }
    /*---------------------------------------------------------------------------------------------------------------------------------------------
    | DISPLAY ITEMS TO TABLE
    |----------------------------------------------------------------------------------------------------------------------------------------------
    |
    */
     public function items()
    {
        if (! \Session::has('token')) {
            return redirect('/#about')->with('message',['type'=> 'danger','text' => 'Access denied, Please Login!']);
        }
        $medicine = Medicine::all()->sortByDesc("id");
        $vaccine  = Vaccine::all()->sortByDesc("id");
        $lab      = Lab::all()->sortByDesc("id");

       return view('pages.items')
            ->with('medicine', $medicine)
            ->with('vaccine', $vaccine)
            ->with('lab', $lab);
    }

}
