@extends('layouts.masterLayout')


@section('title', 'Register Patient | Patient Files')
@section('content')
<form role="form">
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
	<h4 style="font-weight: bold;">Personal Information</h4>
	

	<br>

 <div class="row form-group">
 	<div class="col-lg-3">
 		<input type="text" class="form-control" placeholder="First Name" aria-describedby="basic-addon1" required="First Name required">
 	</div>
 	<div class="col-lg-3">
 		<input type="text" class="form-control" placeholder="Middle Name" aria-describedby="basic-addon1">
 	</div>
 	<div class="col-lg-3">
 		<input type="text" class="form-control" placeholder="Last Name" aria-describedby="basic-addon1" required="required">
 	</div>
 	<div class="col-lg-3">
 		<input type="text" class="form-control" placeholder="Nickname" aria-describedby="basic-addon1">
 	</div>
 </div>

 <div class="row form-group">
 	<div id="sandbox-container" class="col-lg-6">
    	<input type="text" type="text" class="form-control" placeholder="Birth Date" required />
	</div>
 	
 	<div class="col-lg-6">
 		<select name="civil_status" required="required" class="c-select" style="height: 30px; width:100%">
            <option value="" disabled="" selected="">Civil Status</option>
            <option value="single">Single</option>
            <option value="married">Married</option>
            <option value="separated">Separated</option>
            <option value="widowed">Widowed</option>
        </select>
 	</div>
 </div>

 <div class="row form-group">
 	
 	<div class="col-lg-6">
 		<select class="c-select" style="height: 30px; width:100%">
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
 		<select class="c-select" style="height: 30px; width:100%">
		  <option value disabled selected>Gender</option>
		  <option value="1">Male</option>
		  <option value="0">Female</option>
		</select>
	
 	</div>
 	
 	</div>

 	<div class="row form-group ">
	<div class="col-lg-6">
 		<select class="c-select" style="height: 30px; width:100%">
		  <option value disabled selected>Government Type ID</option>
		  <option value="1">Driver's License</option>
		  <option value="2">Postal ID</option>
		  <option value="3">Social Security System (SSS ID)</option>
		  <option value="4">Government Service Insurance System (GSIS ID)</option>
          <option value="5">Tax Identification Number (TIN ID)</option>
          <option value="6">Professional Regulation Commission (PRC ID)</option>
          <option value="7">National Statistics Office (NSO) Birth Certificate</option>
          <option value="8">Marriage Certificate (NSO Authenticated)</option>
          <option value="9">National Bureau of Investigation (NBI) Clearance</option>
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
		<input type="text" class="form-control" placeholder="Government ID Number" aria-describedby="basic-addon1" value="">
	</div>
	
</div>

<div >
	<hr>
	<h4 style="font-weight: bold;">Contact Informations</h4>


	<br>

</div>
<div class="row form-group container-fluid ">
	
	<div class="col-lg-4">
		<strong>Email Address: </strong>
		<input type="text" class="form-control" placeholder="Email Address" aria-describedby="basic-addon1" value="">
	</div>

	<div class="col-lg-4">
		<strong>Mobile Number: Eg. (0935) 123-1234</strong>
		<input type="text" placeholder="Mobile Number" class="form-control input-medium bfh-phone" data-format="(dddd) ddd-dddd" aria-describedby="basic-addon1" value="">
	</div>

	<div class="col-lg-4">
		<strong>Landline Number: Eg. (02) 333-3333 </strong>
		<input type="text"  placeholder="Mobile Number" class="form-control input-medium bfh-phone" data-format="(dd) ddd-dddd" aria-describedby="basic-addon1" value="">
	</div>
	
</div>
	
	<hr>


</div>

	<div class="container">
		<h4 style="font-weight: bold;">Emergency Contact</h4>
	</div>

<div class="row form-group container-fluid">
	
	<div class="col-lg-4">
		<input type="text" class="form-control" placeholder="First Name" aria-describedby="basic-addon1" value="">
	</div>

	<div class="col-lg-4">
		<input type="text" class="form-control" placeholder="Middle Name" aria-describedby="basic-addon1" value="">
	</div>

	<div class="col-lg-4">
		<input type="text" class="form-control" placeholder="Surname" aria-describedby="basic-addon1" value="">
	</div>
	
</div>

<div class="row form-group container-fluid">
	
	<div class="col-lg-4 pull-left">
		<strong>Emergency Contact Number: </strong>
	</div>
	
</div>

<div class="row form-group container-fluid">
	
	<div class="col-lg-6">
		<input type="text"  placeholder="Mobile Number" class="form-control input-medium bfh-phone" data-format="(dddd) ddd-dddd" aria-describedby="basic-addon1" value="">
	</div>

	<div class="col-lg-6">
		<select name="emergency[emergency_contact_relationship][]" aria-invalid="false" class="c-select" style="height: 30px; width:100%">
            <option value="" disabled="" selected="">Relationship</option>
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
	<h4 style="font-weight: bold;">Address</h4>
</div>
	

<div class="row form-group container">		
		<div class="col-lg-8">
			<input type="text" class="form-control" placeholder="Street" aria-describedby="basic-addon1">
		</div>	
</div>

<div class="row form-group container">
		
		<div class="col-lg-4">
			<input type="text" class="form-control" placeholder="Barangay/District" aria-describedby="basic-addon1" required>
		</div>
		<div class="col-lg-4">
			<input type="text" class="form-control" placeholder="City" aria-describedby="basic-addon1">
		</div>
</div>

<div class="row form-group container">
		
		<div class="col-lg-4">
			<input type="text" class="form-control" placeholder="Province" aria-describedby="basic-addon1" required>
		</div>
		<div class="col-lg-4">
			<input type="text" class="form-control" placeholder="Zip Code" aria-describedby="basic-addon1">
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