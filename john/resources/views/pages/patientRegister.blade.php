@extends('layouts.masterLayout')


@section('title', 'Register Patient | Patient Files')
@section('content')
<form role="form" method="POST" action="/add_patient">
<div class="panel panel-default" > <!-- Start PANEL -->
 <div class="panel-body"> <!-- Start PANEL -->
 <div>
 	<h2>New Patient</h2>
 	<hr>
 </div>
 	
 <div class="row "> <!-- ROW /  -->
 	<div class="col-lg-3">
 		<img src="img/generic.png" class="img-circle" width="150px">
 	</div>
 	
 </div> <!-- End Row / -->
	<hr >
	<h4 style="font-weight: bold;">Personal Information<small><i>&nbsp(Fields with <span style="color: red">*</span> are &nbsprequired)</i></small></h4>
	

	<br>

 <div class="row form-group">
 	<div class="col-lg-3">
		<strong>First Name:<span style="color: red">*</span></strong>
		@if($errors->has('fname'))
            <span class="error" style="color: red">{{ $errors->first('fname') }}</span>
        @endif
 		<input type="text" name="fname" class="form-control" placeholder="First Name" aria-describedby="basic-addon1" required>
 		{{ csrf_field() }}
 	</div>
 	<div class="col-lg-3">
		<strong>Middle Name:</strong>
		@if($errors->has('mname'))
            <span class="error" style="color: red">{{ $errors->first('mname') }}</span>
        @endif
 		<input type="text" name="mname" class="form-control" placeholder="Middle Name" aria-describedby="basic-addon1">
 	</div>
 	<div class="col-lg-3">
		<strong>Last Name:<span style="color: red">*</span></strong>
		@if($errors->has('lname'))
            <span class="error" style="color: red">{{ $errors->first('lname') }}</span>
        @endif
 		<input type="text" name="lname" class="form-control" placeholder="Last Name" aria-describedby="basic-addon1" required>
 	</div>
 	<div class="col-lg-3">
		<strong>NickName:</strong>
		@if($errors->has('nickname'))
            <span class="error" style="color: red">{{ $errors->first('nickname') }}</span>
        @endif
 		<input type="text" name="nickname" class="form-control" placeholder="Nickname" aria-describedby="basic-addon1">
 	</div>
 </div>

 <div class="row form-group">
 	<div id="sandbox-container" class="col-lg-6">
		<strong>Birthdate:<span style="color: red">*</span></strong>
		@if($errors->has('bdate'))
            <span class="error" style="color: red">{{ $errors->first('bdate') }}</span>
        @endif
    	<input type="text" name="bdate" type="text" class="form-control" placeholder="Birth Date" required />
	</div>
 	
 	<div class="col-lg-6">
		<strong>Civil Status:<span style="color: red">*</span></strong>
		@if($errors->has('civil_status'))
            <span class="error" style="color: red">{{ $errors->first('civil_status') }}</span>
        @endif
 		<select name="civil_status" required class="c-select" style="height: 34px; width:100%">
            <option value disabled selected>Civil Status</option>
            <option value="1">Single</option>
            <option value="2">Married</option>42365rdx
            <option value="3">Separated</option>
            <option value="4">Widowed</option>
        </select>
 	</div>
 </div>

 <div class="row form-group">
 	
 	<div class="col-lg-6">
		<strong>Religion:</strong>
 		<select class="c-select" name="religion" style="height: 34px; width:100%">
 			<option value="" disabled="" selected="">Religion</option>
	 		<option value="1">Roman Catholic</option>
	  		<option value="2">Christian</option>
	  		<option value="3">Iglesia ni Cristo</option>
	  		<option value="4">Mormon</option>
	  		<option value="5">Muslim</option>
	  		<option value="6">Buddhist</option>
	  		<option value="7">Agnostic</option>
	  		<option value="8">Others</option>
		</select>
	
 	</div>

 	<div class="col-lg-6">

		<strong>Gender:<span style="color: red">*</span></strong>
		@if($errors->has('gender'))
            <span class="error" style="color: red">{{ $errors->first('gender') }}</span>
        @endif
 		<select class="c-select" name="gender" style="height: 34px; width:100%" required="">
		  <option value disabled selected>Gender</option>
		  <option value="1">Male</option>
		  <option value="0">Female</option>
		</select>
	
 	</div>
 	
 	</div>

 	<div class="row form-group ">
	<div class="col-lg-6">
		<strong>Government Type ID:</strong>
 		<select class="c-select" name="govt" style="height: 34px; width:100%">
		  <option value disabled selected>Government Type ID</option>
		  <option value="1 ">Driver's License</option>
		  <option value="2 ">Postal ID</option>
		  <option value="3 ">Social Security System (SSS ID)</option>
		  <option value="4 ">Government Service Insurance System (GSIS ID)</option>
          <option value="5 ">Tax Identification Number (TIN ID)</option>
          <option value="6 ">Professional Regulation Commission (PRC ID)</option>
          <option value="7 ">National Statistics Office (NSO) Birth Certificate</option>
          <option value="8 ">Marriage Certificate (NSO Authenticated)</option>
          <option value="9 ">National Bureau of Investigation (NBI) Clearance</option>
 		  <option value="10">Police Clearance</option>
          <option value="11">Barangay Clearance/Certificate</option>
          <option value="12">Senior Citizen's ID Card</option>
      	  <option value="13">PhilHealth Identification Card (PIC)</option>
     	  <option value="14">Alien Certificate of Registration (ACR I-Card)</option>
     	  <option value="15">Consular ID</option>
     	  <option value="16">Permit to Carry Firearms</option>
  		  <option value="17">Passport</option>
  		  <option value="18">Company/Office ID</option>
          <option value="19">Student's ID or School ID</option>
 		  <option value="20">OFW ID</option>
    	  <option value="21">Seaman's Book</option>
          <option value="22">Armed Forces of the Philippines (AFP) ID</option>
          <option value="23">Home Development Mutual Fund (HMDF) or PAG-IBIG ID</option>
          <option value="24">Philippine Overseas Employment Association (POEA) ID</option>
          <option value="25">Certification from the National Council for the Welfare of Disabled Persons (NCWDP)</option>
          <option value="26">PRA Special Resident Retiree Visa (SRRV) ID</option>
          <option value="27">Department of Social Welfare and Development (DSWD) ID</option>
          <option value="28">Overseas Worker's Welfare Administration (OWWA) ID</option>
          <option value="29">Unified Multi-Purpose ID (UMID)</option>
          <option value="30">Voter's ID</option>
         
		</select>
	
 	</div>
 	
	<div class="col-lg-6">
		<strong>Government ID Number:</strong>
		@if($errors->has('govtnum'))
            <span class="error" style="color: red">{{ $errors->first('govtnum') }}</span>
        @endif
		<input type="text" name="govtnum" class="form-control" placeholder="Government ID Number" aria-describedby="basic-addon1" value="">
	</div>
	
</div>

<div >
	<hr>
	<h4 style="font-weight: bold;">Contact Informations</h4>


	<br>

</div>
<div class="row form-group container-fluid">
	
	<div class="col-lg-5">
		<strong>Email Address: </strong>
		@if($errors->has('email'))
            <span class="error" style="color: red">{{ $errors->first('email') }}</span>
        @endif
		<input type="text" name="email" class="form-control" placeholder="Email Address" aria-describedby="basic-addon1" value="">
	</div>


	<div class="col-lg-2">
		<strong>Phonenumber Type:</strong>
		<select  name="mobile_type" class="c-select" style="height: 34px; width:100%">
		  <option value="1" selected>Mobile Number</option>
		  <option value="2">Landline Number</option>
		</select>
	</div>

	<div class="col-lg-5">
		<strong>Phone Number:</strong>
		<input type="text" name="mobile_num" placeholder="Mobile Number Eg. 0935 123-1234" class="form-control" aria-describedby="basic-addon1">
	</div>
</div>
	
	<hr>


</div>

	<div class="container">
		<h4 style="font-weight: bold;">Emergency Contact Person</h4>
	</div>
<div class="row form-group container-fluid">
	
	<div class="col-lg-4">
		<strong>First Name:</strong>
		@if($errors->has('efname'))
            <span class="error" style="color: red">{{ $errors->first('efname') }}</span>
        @endif
		<input type="text" name="efname" class="form-control" placeholder="First Name" aria-describedby="basic-addon1" value="">
	</div>

	<div class="col-lg-4">
		<strong>Middle Name:</strong>
		@if($errors->has('emname'))
            <span class="error" style="color: red">{{ $errors->first('emname') }}</span>
        @endif
		<input type="text" name="emname" class="form-control" placeholder="Middle Name" aria-describedby="basic-addon1" value="">
	</div>

	<div class="col-lg-4">
		<strong>Last Name:</strong>
		@if($errors->has('elname'))
            <span class="error" style="color: red">{{ $errors->first('elname') }}</span>
        @endif
		<input type="text" name="elname" class="form-control" placeholder="Surname" aria-describedby="basic-addon1" value="">
	</div>
	
</div>


<div class="row form-group container-fluid">
	
	<div class="col-lg-6">
		<strong>Emergency Contact Number: </strong>
		<input type="text" name="econtact"  placeholder="Mobile Number" class="form-control input-medium bfh-phone" data-format="dddd ddd-dddd" aria-describedby="basic-addon1" value="">
	</div>

	<div class="col-lg-6">
		<strong>Relationship: </strong>
		<select name="erelation" aria-invalid="false" class="c-select" style="height: 34px; width:100%">
            <option value disabled selected>Relationship</option>
            <option value="1">Father</option>
            <option value="2">Mother</option>
            <option value="3">Sibling</option>
            <option value="4">Child</option>
            <option value="5">Spouse</option>
            <option value="6">Guardian</option>
        </select>

	</div>
	
</div>

<hr>

<div class="container">
	<h4 style="font-weight: bold;">Emergency Contact Person Address</h4>
</div>
	

<div class="row form-group container">		
		<div class="col-lg-8">

		<strong>Street:</strong>
			<input type="text" name="street" class="form-control" placeholder="Street" aria-describedby="basic-addon1">
		</div>	
</div>

<div class="row form-group container">
		
		<div class="col-lg-4">
		<strong>Barangay/District:</strong>
			<input type="text" name="brgy" class="form-control" placeholder="Barangay/District" aria-describedby="basic-addon1" >
		</div>
		<div class="col-lg-4">
		<strong>City:</strong>
			<input type="text" name="city" class="form-control" placeholder="City" aria-describedby="basic-addon1">
		</div>
</div>

<div class="row form-group container">
		
		<div class="col-lg-4">
		<strong>Province:</strong>
			<input type="text" name="province" class="form-control" placeholder="Province" aria-describedby="basic-addon1" S>
		</div>
		<div class="col-lg-4">
		<strong>Zip Code:</strong>
		@if($errors->has('zip-code'))
            <span class="error" style="color: red">{{ $errors->first('zip-code') }}</span>
        @endif
			<input type="text" name="zip_code" class="form-control" placeholder="Zip Code" aria-describedby="basic-addon1">
		</div>

		
</div>


<hr>
<div class="row form-group container">
	<div class="col-lg-12 pull-right" style="float: right">
  		<input type="submit" name="addPatient" id="submit" value="Submit" class="btn btn-primary">
  	</div>
</div>

</div> <!-- END PANEL -->
</div> <!-- END PANEL -->


</form>




@stop