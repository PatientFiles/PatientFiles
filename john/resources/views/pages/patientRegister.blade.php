@extends('layouts.masterLayout')



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
 		<img src="img/generic.png" class="img-circle" width="75%">
 	</div>
 	
 </div> <!-- End Row / -->
	<hr >
	<h4>Personal Information</h4>
	<hr >

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
 	<div class="col-lg-6">
 		<input type="text" class="form-control" placeholder="Birth Date" aria-describedby="basic-addon1" required>
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
 	
 	</div>


<div >
	<hr >
	<h4>Contact Informations</h4>
	<hr >

	<br>

</div>
<div class="row form-group ">
	
	<div class="col-lg-6">
		<input type="text" class="form-control" placeholder="Home Address" aria-describedby="basic-addon1" required>
	</div>
	<div class="col-lg-6">
		<input type="text" class="form-control" placeholder="Email Adress" aria-describedby="basic-addon1">
	</div>
</div>

<div class="row form-group ">
	<div class="col-lg-6">
		<input type="text" class="form-control" placeholder="Mobile Number" aria-describedby="basic-addon1" required>
	</div>
	<div class="col-lg-6">
		<input type="text" class="form-control" placeholder="Phone Number" aria-describedby="basic-addon1">
	</div>
	
</div>

<hr>

  <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary" style="float: left">

</div> <!-- END PANEL -->
</div> <!-- END PANEL -->


</form>




@stop