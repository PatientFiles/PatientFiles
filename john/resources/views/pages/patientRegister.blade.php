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
 		<input type="text" class="form-control" placeholder="First Name" aria-describedby="basic-addon1" required>
 	</div>
 	<div class="col-lg-3">
 		<input type="text" class="form-control" placeholder="Last Name" aria-describedby="basic-addon1" required>
 	</div>
 	<div class="col-lg-3">
 		<input type="text" class="form-control" placeholder="Middle Name" aria-describedby="basic-addon1" required>
 	</div>
 	<div class="col-lg-3">
 		<input type="text" class="form-control" placeholder="Nickname" aria-describedby="basic-addon1" required>
 	</div>
 </div>

 <div class="row form-group">
 	<div id="sandbox-container" class="col-lg-6">
    	<input type="text" type="text" class="form-control" placeholder="Birth Date" required />
	</div>
 	
 	<div class="col-lg-6">
 		<input type="text" class="form-control" placeholder="Civil Status" aria-describedby="basic-addon1" required>
 	</div>
 </div>

 <div class="row form-group">
 	
 	<div class="col-lg-6">
 		<select class="c-select" style="height: 30px; width:75%">
		  <option selected>Religion</option>
		  <option value="1">One</option>
		  <option value="2">Two</option>
		  <option value="3">Three</option>
		</select>
	
 	</div>

 	<div class="col-lg-6">
 		<select class="c-select" style="height: 30px; width:75%">
		  <option selected>Gender</option>
		  <option value="1">One</option>
		  <option value="2">Two</option>
		  <option value="3">Three</option>
		</select>
	
 	</div>
 	
 	</div>

 	<div class="row form-group ">
	<div class="col-lg-6">
 		<select class="c-select" style="height: 30px; width:75%">
		  <option selected>Government Type ID</option>
		  <option value="1">One</option>
		  <option value="2">Two</option>
		  <option value="3">Three</option>
		</select>
	
 	</div>
 	
	<div class="col-lg-6">
		<input type="text" class="form-control" placeholder="Government ID Number" aria-describedby="basic-addon1">
	</div>
	
</div>

<div >
	<hr>
	<h4 style="font-weight: bold;">Contact Informations</h4>


	<br>

</div>
<div class="row form-group ">
	
	<div class="col-lg-4">
		<input type="text" class="form-control" placeholder="Email Adress" aria-describedby="basic-addon1">
	</div>

	<div class="col-lg-4">
		<input type="text" class="form-control" placeholder="Mobile Number" aria-describedby="basic-addon1" required>
	</div>
	<div class="col-lg-4">
		<input type="text" class="form-control" placeholder="Phone Number" aria-describedby="basic-addon1">
	</div>
	
</div>
	
	<hr>


</div>

	<div class="container">
		<h4 style="font-weight: bold;">Emergency Contact</h4>
	</div>

<div class="row form-group container-fluid">
	
	<div class="col-lg-4">
		<input type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1">
	</div>

	<div class="col-lg-4">
		<input type="text" class="form-control" placeholder="Middle Name" aria-describedby="basic-addon1" required>
	</div>

	<div class="col-lg-4">
		<input type="text" class="form-control" placeholder="Surname" aria-describedby="basic-addon1">
	</div>
	
</div>

<div class="row form-group container-fluid">
	
	<div class="col-lg-6">
		<input type="text" class="form-control" placeholder="Emrgency Contact Number" aria-describedby="basic-addon1">
	</div>

	<div class="col-lg-6">
		<input type="text" class="form-control" placeholder="Relationship" aria-describedby="basic-addon1" required>
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

  <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary" style="float: left">

</div> <!-- END PANEL -->
</div> <!-- END PANEL -->


</form>




@stop