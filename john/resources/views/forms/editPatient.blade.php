@extends('layouts.masterLayout')


@section('title', 'Edit Patient | Patient Files')
@section('content')

                        @if(session('message'))
                            <p style="padding-top: 5px;color: white;background-color: red;font-style: italic;" class="alert alert-{{session ('message.type')}} form-control" >
                                    {{session('message.text')}} <a href="/patientRecords" class="primary pull-right">Go to Patient List?</a>
                            </p>
                        @endif

<form role="form" method="POST" action="/edit_patient">
<div class="panel panel-default" > <!-- Start PANEL -->
 <div class="panel-body"> <!-- Start PANEL -->
 <div>
 	<h2><small>Edit Patient:</small> "{{$prof->user->firstname.' '.$prof->user->middlename.' '.$prof->user->lastname}}"</h2>
 	<hr>
 </div>
 	
 <div class="row "> <!-- ROW /  -->
 	<div class="col-lg-3">
 		<a href="#" data-toggle="modal" data-target="#myModalUpload" ><img src="/img/generic.png" class="img-thumbnail img-circle" style="height: 220px"></a>
 	</div>
 	
 </div> <!-- End Row / -->
	<hr >
	<h4 style="font-weight: bold;">Personal Information<small><i>&nbsp(Fields with <span style="color: red">*</span> are &nbsprequired)</i></small></h4>
	

	<br>

 <div class="row form-group">
 	<input type="hidden" name="patient_id" class="form-control" placeholder="First Name" aria-describedby="basic-addon1" value="{{$prof->id}}" required>
 	<div class="col-lg-3">
		<strong>First Name:<span style="color: red">*</span></strong>
		@if($errors->has('fname'))
            <span class="error" style="color: red">{{ $errors->first('fname') }}</span>
        @endif
 		<input type="text" name="fname" class="form-control" placeholder="First Name" aria-describedby="basic-addon1" value="{{$prof->user->firstname}}" required>
 		{{ csrf_field() }}
 	</div>
 	<div class="col-lg-3">
		<strong>Middle Name:</strong>
		@if($errors->has('mname'))
            <span class="error" style="color: red">{{ $errors->first('mname') }}</span>
        @endif
 		<input type="text" name="mname" class="form-control" placeholder="Middle Name" aria-describedby="basic-addon1" value="{{$prof->user->middlename}}">
 	</div>
 	<div class="col-lg-3">
		<strong>Last Name:<span style="color: red">*</span></strong>
		@if($errors->has('lname'))
            <span class="error" style="color: red">{{ $errors->first('lname') }}</span>
        @endif
 		<input type="text" name="lname" class="form-control" placeholder="Last Name" aria-describedby="basic-addon1" value="{{$prof->user->lastname}}" required>
 	</div>
 	<div class="col-lg-3">
		<strong>NickName:</strong>
		@if($errors->has('nickname'))
            <span class="error" style="color: red">{{ $errors->first('nickname') }}</span>
        @endif
 		<input type="text" name="nickname" class="form-control" placeholder="Nickname" aria-describedby="basic-addon1" value="{{$prof->user->nickname}}">
 	</div>
 </div>

 <div class="row form-group">
 	<div id="sandbox-container" class="col-lg-6">
		<strong>Birthdate:<span style="color: red">*</span></strong>
		@if($errors->has('bdate'))
            <span class="error" style="color: red">{{ $errors->first('bdate') }}</span>
        @endif
    	<input type="text" name="bdate" type="text" class="form-control" placeholder="Birth Date" value="{{date('m/d/Y', strtotime($prof->user->birthdate))}}" required />
	</div>

	<div class="col-lg-6">

		<strong>Gender:<span style="color: red">*</span></strong>
		@if($errors->has('gender'))
            <span class="error" style="color: red">{{ $errors->first('gender') }}</span>
        @endif
 		<select class="form-control" name="gender" style="height: 34px; width:100%" required="">
		  <option @if ($prof->user->gender == 'null') {{'selected="selected" disabled'}}@endif>Select Gender ...</option>
		  <option value="1" @if ($prof->user->gender == '1') {{'selected="selected"'}}@endif>Male</option>
		  <option value="0" @if ($prof->user->gender == '0') {{'selected="selected"'}}@endif>Female</option>
		</select>
	
 	</div>
 	
 	
 </div>

 <div class="row form-group ">
	<div class="col-lg-6">
		<strong>Government Type ID:</strong>
 		<select class="form-control" name="govt" style="height: 34px; width:100%">
 		@if (! $prof->user->user_government_id)
	 		<option value disabled selected> Select Government Type ID</option>
	 		<option value="1 " > Driver's License</option>
			  <option value="2 " > Postal ID</option>
			  <option value="3 " > Social Security System (SSS ID)</option>
			  <option value="4 " > Government Service Insurance System (GSIS ID)</option>
	          <option value="5 " > Tax Identification Number (TIN ID)</option>
	          <option value="6 " > Professional Regulation Commission (PRC ID)</option>
	          <option value="7 " > National Statistics Office (NSO) Birth Certificate</option>
	          <option value="8 " > Marriage Certificate (NSO Authenticated)</option>
	          <option value="9 " > National Bureau of Investigation (NBI) Clearance</option>
	 		  <option value="10" > Police Clearance</option>
	          <option value="11" > Barangay Clearance/Certificate</option>
	          <option value="12" > Senior Citizen's ID Card</option>
	      	  <option value="13" > PhilHealth Identification Card (PIC)</option>
	     	  <option value="14" > Alien Certificate of Registration (ACR I-Card)</option>
	     	  <option value="15" > Consular ID</option>
	     	  <option value="16" > Permit to Carry Firearms</option>
	  		  <option value="17" > Passport</option>
	  		  <option value="18" > Company/Office ID</option>
	          <option value="19" > Student's ID or School ID</option>
	 		  <option value="20" > OFW ID</option>
	    	  <option value="21" > Seaman's Book</option>
	          <option value="22" > Armed Forces of the Philippines (AFP) ID</option>
	          <option value="23" > Home Development Mutual Fund (HMDF) or PAG-IBIG ID</option>
	          <option value="24" > Philippine Overseas Employment Association (POEA) ID</option>
	          <option value="25" > Certification from the National Council for the Welfare of Disabled Persons (NCWDP)</option>
	          <option value="26" > PRA Special Resident Retiree Visa (SRRV) ID</option>
	          <option value="27" > Department of Social Welfare and Development (DSWD) ID</option>
	          <option value="28" > Overseas Worker's Welfare Administration (OWWA) ID</option>
	          <option value="29" > Unified Multi-Purpose ID (UMID)</option>
	          <option value="30" > Voter's ID</option>
 		@else
		  <option value="1 " @if ($prof->user->user_government_id->government_id_type_id == '1') {{'selected="selected"'}}@endif> Driver's License</option>
		  <option value="2 " @if ($prof->user->user_government_id->government_id_type_id == '2') {{'selected="selected"'}}@endif> Postal ID</option>
		  <option value="3 " @if ($prof->user->user_government_id->government_id_type_id == '3') {{'selected="selected"'}}@endif> Social Security System (SSS ID)</option>
		  <option value="4 " @if ($prof->user->user_government_id->government_id_type_id == '4') {{'selected="selected"'}}@endif> Government Service Insurance System (GSIS ID)</option>
          <option value="5 " @if ($prof->user->user_government_id->government_id_type_id == '5') {{'selected="selected"'}}@endif> Tax Identification Number (TIN ID)</option>
          <option value="6 " @if ($prof->user->user_government_id->government_id_type_id == '6') {{'selected="selected"'}}@endif> Professional Regulation Commission (PRC ID)</option>
          <option value="7 " @if ($prof->user->user_government_id->government_id_type_id == '7') {{'selected="selected"'}}@endif> National Statistics Office (NSO) Birth Certificate</option>
          <option value="8 " @if ($prof->user->user_government_id->government_id_type_id == '8') {{'selected="selected"'}}@endif> Marriage Certificate (NSO Authenticated)</option>
          <option value="9 " @if ($prof->user->user_government_id->government_id_type_id == '9') {{'selected="selected"'}}@endif> National Bureau of Investigation (NBI) Clearance</option>
 		  <option value="10" @if ($prof->user->user_government_id->government_id_type_id == '10') {{'selected="selected"'}}@endif> Police Clearance</option>
          <option value="11" @if ($prof->user->user_government_id->government_id_type_id == '11') {{'selected="selected"'}}@endif> Barangay Clearance/Certificate</option>
          <option value="12" @if ($prof->user->user_government_id->government_id_type_id == '12') {{'selected="selected"'}}@endif> Senior Citizen's ID Card</option>
      	  <option value="13" @if ($prof->user->user_government_id->government_id_type_id == '13') {{'selected="selected"'}}@endif> PhilHealth Identification Card (PIC)</option>
     	  <option value="14" @if ($prof->user->user_government_id->government_id_type_id == '14') {{'selected="selected"'}}@endif> Alien Certificate of Registration (ACR I-Card)</option>
     	  <option value="15" @if ($prof->user->user_government_id->government_id_type_id == '15') {{'selected="selected"'}}@endif> Consular ID</option>
     	  <option value="16" @if ($prof->user->user_government_id->government_id_type_id == '16') {{'selected="selected"'}}@endif> Permit to Carry Firearms</option>
  		  <option value="17" @if ($prof->user->user_government_id->government_id_type_id == '17') {{'selected="selected"'}}@endif> Passport</option>
  		  <option value="18" @if ($prof->user->user_government_id->government_id_type_id == '18') {{'selected="selected"'}}@endif> Company/Office ID</option>
          <option value="19" @if ($prof->user->user_government_id->government_id_type_id == '19') {{'selected="selected"'}}@endif> Student's ID or School ID</option>
 		  <option value="20" @if ($prof->user->user_government_id->government_id_type_id == '20') {{'selected="selected"'}}@endif> OFW ID</option>
    	  <option value="21" @if ($prof->user->user_government_id->government_id_type_id == '21') {{'selected="selected"'}}@endif> Seaman's Book</option>
          <option value="22" @if ($prof->user->user_government_id->government_id_type_id == '22') {{'selected="selected"'}}@endif> Armed Forces of the Philippines (AFP) ID</option>
          <option value="23" @if ($prof->user->user_government_id->government_id_type_id == '23') {{'selected="selected"'}}@endif> Home Development Mutual Fund (HMDF) or PAG-IBIG ID</option>
          <option value="24" @if ($prof->user->user_government_id->government_id_type_id == '24') {{'selected="selected"'}}@endif> Philippine Overseas Employment Association (POEA) ID</option>
          <option value="25" @if ($prof->user->user_government_id->government_id_type_id == '25') {{'selected="selected"'}}@endif> Certification from the National Council for the Welfare of Disabled Persons (NCWDP)</option>
          <option value="26" @if ($prof->user->user_government_id->government_id_type_id == '26') {{'selected="selected"'}}@endif> PRA Special Resident Retiree Visa (SRRV) ID</option>
          <option value="27" @if ($prof->user->user_government_id->government_id_type_id == '27') {{'selected="selected"'}}@endif> Department of Social Welfare and Development (DSWD) ID</option>
          <option value="28" @if ($prof->user->user_government_id->government_id_type_id == '28') {{'selected="selected"'}}@endif> Overseas Worker's Welfare Administration (OWWA) ID</option>
          <option value="29" @if ($prof->user->user_government_id->government_id_type_id == '29') {{'selected="selected"'}}@endif> Unified Multi-Purpose ID (UMID)</option>
          <option value="30" @if ($prof->user->user_government_id->government_id_type_id == '30') {{'selected="selected"'}}@endif> Voter's ID</option>
          @endif
         
		</select>
	
 	</div>
 	
	<div class="col-lg-6">
		<strong>Government ID Number:</strong>
		@if($errors->has('govtnum'))
            <span class="error" style="color: red">{{ $errors->first('govtnum') }}</span>
        @endif
		<input type="text" name="govtnum" class="form-control" placeholder="Government ID Number" aria-describedby="basic-addon1" value="@if (! $prof->user->user_government_id){{''}}@else{{$prof->user->user_government_id->number}}@endif">
	</div>
	
</div>

 <div class="row form-group">
 	
 	<div class="col-lg-6">
		<strong>Religion:</strong>
 		<select class="form-control" name="religion" style="height: 34px; width:100%">
 			<option @if ($prof->user->user_religion == 'null') {{'value disabled selected'}}@endif>Religion</option>
	 		<option value="1" @if ($prof->user->user_religion == '1') {{'selected="selected"'}}@endif>Roman Catholic</option>
	  		<option value="2" @if ($prof->user->user_religion == '2') {{'selected="selected"'}}@endif>Christian</option>
	  		<option value="3" @if ($prof->user->user_religion == '3') {{'selected="selected"'}}@endif>Iglesia ni Cristo</option>
	  		<option value="4" @if ($prof->user->user_religion == '4') {{'selected="selected"'}}@endif>Mormon</option>
	  		<option value="5" @if ($prof->user->user_religion == '5') {{'selected="selected"'}}@endif>Muslim</option>
	  		<option value="6" @if ($prof->user->user_religion == '6') {{'selected="selected"'}}@endif>Buddhist</option>
	  		<option value="7" @if ($prof->user->user_religion == '7') {{'selected="selected"'}}@endif>Agnostic</option>
	  		<option value="8" @if ($prof->user->user_religion == '8') {{'selected="selected"'}}@endif>Others</option>
		</select>
	
 	</div>

 	
 	
 	</div>
<div >
	<hr>
	<h4 style="font-weight: bold;">Contact Informations</h4>


	<br>

</div>
<div class="row form-group">
	
	<div class="col-lg-5">
		<strong>Email Address: </strong>
		@if($errors->has('email'))
            <span class="error" style="color: red">{{ $errors->first('email') }}</span>
        @endif
		<input type="text" name="email" class="form-control" placeholder="Email Address" aria-describedby="basic-addon1" value="@if($prof->user->user_emails){{$prof->user->user_emails[0]->email}}@else{{''}}@endif">
	</div>


	<div class="col-lg-2">
		<strong>Phonenumber Type:</strong>
		<select  name="mobile_type" class="form-control" style="height: 34px; width:100%">
		@if (! $prof->user->user_phone_numbers)
		  <option value selected disabled>This patient has no number</option>
		  <option value="1">Mobile Number</option>
		  <option value="2">Landline Number</option>
		@else
		  <option value="1" @if ($prof->user->user_phone_numbers[0]->phone_number_type_id == '1') {{'selected="selected"'}}@endif >Mobile Number</option>
		  <option value="2" @if ($prof->user->user_phone_numbers[0]->phone_number_type_id == '2') {{'selected="selected"'}}@endif >Landline Number</option>
		@endif
		</select>
	</div>

	<div class="col-lg-5">
		<strong>Phone Number:</strong>
		<input type="text" name="mobile_num" placeholder="Mobile Number Eg. 0935 123-1234" class="form-control" aria-describedby="basic-addon1" value="@if (! $prof->user->user_phone_numbers){{''}}@else {{$prof->user->user_phone_numbers[0]->number}}@endif">
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
		<input type="text" name="efname" class="form-control" placeholder="First Name" aria-describedby="basic-addon1" value="@if (! $prof->user->user_emergency_contacts){{''}}@else {{$prof->user->user_emergency_contacts[0]->firstname}}@endif">
	</div>

	<div class="col-lg-4">
		<strong>Middle Name:</strong>
		@if($errors->has('emname'))
            <span class="error" style="color: red">{{ $errors->first('emname') }}</span>
        @endif
		<input type="text" name="emname" class="form-control" placeholder="Middle Name" aria-describedby="basic-addon1" value="@if (! $prof->user->user_emergency_contacts){{''}}@else {{$prof->user->user_emergency_contacts[0]->middlename}}@endif">
	</div>

	<div class="col-lg-4">
		<strong>Last Name:</strong>
		@if($errors->has('elname'))
            <span class="error" style="color: red">{{ $errors->first('elname') }}</span>
        @endif
		<input type="text" name="elname" class="form-control" placeholder="Surname" aria-describedby="basic-addon1" value="@if(! $prof->user->user_emergency_contacts){{''}}@else {{$prof->user->user_emergency_contacts[0]->lastname}}@endif">
	</div>
	
</div>


<div class="row form-group container-fluid">
	
	<div class="col-lg-6">
		<strong>Emergency Contact Number: </strong>
		<input type="text" name="econtact"  placeholder="Mobile Number" class="form-control input-medium bfh-phone" data-format="dddd ddd-dddd" aria-describedby="basic-addon1" value="@if(! $prof->user->user_emergency_contacts){{''}}@elseif(! $prof->user->user_emergency_contacts[0]->emergency_phones){{''}} @else{{$prof->user->user_emergency_contacts[0]->emergency_phones[0]->contact_no}}@endif">
	</div>

	<div class="col-lg-6">
		<strong>Relationship: </strong>
		<select name="erelation" aria-invalid="false" class="form-control" style="height: 34px; width:100%">
		@if (! $prof->user->user_emergency_contacts)
			<option value disabled selected>Relationship</option>
            <option value="1">Father</option>
            <option value="2">Mother</option>
            <option value="3">Sibling</option>
            <option value="4">Child</option>
            <option value="5">Spouse</option>
            <option value="6">Guardian</option>
	        @elseif (! $prof->user->user_emergency_contacts[0]->emergency_phones)
	        	<option value disabled selected>Relationship</option>
	            <option value="1">Father</option>
	            <option value="2">Mother</option>
	            <option value="3">Sibling</option>
	            <option value="4">Child</option>
	            <option value="5">Spouse</option>
	            <option value="6">Guardian</option> 
	        @else
	        	<option @if ($prof->user->user_emergency_contacts[0]->emergency_phones[0]->emergency_relationship_id == '0') {{'value disabled selected'}}@endif>Relationship</option>
	            <option value="1" @if ($prof->user->user_emergency_contacts[0]->emergency_phones[0]->emergency_relationship_id == '1') {{'selected="selected"'}}@endif>Father</option>
	            <option value="2" @if ($prof->user->user_emergency_contacts[0]->emergency_phones[0]->emergency_relationship_id == '2') {{'selected="selected"'}}@endif>Mother</option>
	            <option value="3" @if ($prof->user->user_emergency_contacts[0]->emergency_phones[0]->emergency_relationship_id == '3') {{'selected="selected"'}}@endif>Sibling</option>
	            <option value="4" @if ($prof->user->user_emergency_contacts[0]->emergency_phones[0]->emergency_relationship_id == '4') {{'selected="selected"'}}@endif>Child</option>
	            <option value="5" @if ($prof->user->user_emergency_contacts[0]->emergency_phones[0]->emergency_relationship_id == '5') {{'selected="selected"'}}@endif>Spouse</option>
	            <option value="6" @if ($prof->user->user_emergency_contacts[0]->emergency_phones[0]->emergency_relationship_id == '6') {{'selected="selected"'}}@endif>Guardian</option>s
        @endif
            
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
			<input type="text" name="street" class="form-control" placeholder="Street" aria-describedby="basic-addon1" value="@if (! $prof->user->user_addresses){{''}}@else{{$prof->user->user_addresses[0]->street}}@endif">
		</div>	
</div>

<div class="row form-group container">
		
		<div class="col-lg-4">
		<strong>Barangay/District:</strong>
			<input type="text" name="brgy" class="form-control" placeholder="Barangay/District" aria-describedby="basic-addon1" value="@if (! $prof->user->user_addresses){{''}}@else{{$prof->user->user_addresses[0]->barangay}}@endif">
		</div>
		<div class="col-lg-4">
		<strong>City:</strong>
			<input type="text" name="city" class="form-control" placeholder="City" aria-describedby="basic-addon1" value="@if (! $prof->user->user_addresses){{''}}@else{{$prof->user->user_addresses[0]->municipality}}@endif">
		</div>
</div>

<div class="row form-group container">
		
		<div class="col-lg-4">
		<strong>Province:</strong>
			<input type="text" name="province" class="form-control" placeholder="Province" aria-describedby="basic-addon1" value="@if (! $prof->user->user_addresses){{''}}@else{{$prof->user->user_addresses[0]->province}}@endif">
		</div>
		<div class="col-lg-4">
		<strong>Zip Code:</strong>
		@if($errors->has('zip-code'))
            <span class="error" style="color: red">{{ $errors->first('zip-code') }}</span>
        @endif
			<input type="text" name="zip_code" class="form-control" placeholder="Zip Code" aria-describedby="basic-addon1" value="@if (! $prof->user->user_addresses){{''}}@else{{$prof->user->user_addresses[0]->zip_code}}@endif">
		</div>

		
</div>


<hr>
<div class="row form-group container">
	<div class="col-lg-12 pull-right" style="float: right">
  		<input type="submit" name="addPatient" id="addPatient" id="submit" value="Save Changes" class="btn btn-primary">
  	</div>
</div>

</div> <!-- END PANEL -->
</div> <!-- END PANEL -->


</form>

 <div style="height: 100%" class="modal fade" id="myModalUpload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div  class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel" style="color: white;font-weight: bolder;">Upload Image</h4>
                    </div>
                <div class="modal-body">
                <form >
                	<input type="file" name="photo">
                	<input type="submit" name="upload" value="Upload Image">
                </form>
                    
                <div class="modal-footer">
                   
                    <button type="button" class="btn btn-primary pull-right" data-dismiss="modal">Close</button>
                   
                </div>
            </div>
        </div>
    </div>
    </div>




@stop