@extends('layouts.masterLayout')



@section('content')

<div class="row">
	<div class="col-lg-12">
		<h2 style="margin-left: 15px">Patients Profile</h2>
		<hr>
	</div>	
</div>

<div class="container-fluid" >
	<div class="row">
		<div class="col-lg-4">
					
				<div class="container-fl">
				<div class="panel panel-default">
				  <div class="panel-body">
						 <div class="row">
							<div class="col-lg-12" align="center">
								<img src="img/prof_pic.png  " class="img-circle" style="box-shadow: 0 0 20px #D0D0D0;">	
										<hr>					
							</div>
					
							<div class="col-lg-12">
								<label>Patient Name:</label>						
							</div>
							<div class="col-lg-12">
								<label>Address:</label>						
							</div>
							<div class="col-lg-12">
								<label>Age:</label>						
							</div>
							<div class="col-lg-12">
								<label>Age Group:</label>						
							</div>
						 </div>
				  </div>
				</div>
			</div>	

		</div>

		<div class="col-lg-8">
			<div class="container-fl " >
				<div class="panel panel-default table-responsive">
				  <div class="panel-body">
						 <ul class="nav nav-tabs">
						  <li role="presentation" class="active"><a data-toggle="tab" href="#visits">Visits</a></li>
						  <li role="presentation"><a data-toggle="tab" href="#admission">Admissions</a></li>
						  <li role="presentation"><a data-toggle="tab" href="#vitals">Vitals</a></li>
						</ul>
				 <div class="tab-content"> <!--tab content -->

<! /VISITS TAB -->
				 	<div class="tab-pane active" id="visits"  > 
				 			<table class="table table-bordered table-hover table-striped table-fixed ">
						<thead id="patient_table">
								<th> Patient ID </th>
								<th> Name</th>
								<th> Surname </th>
								<th> Action </th>
							
						</thead>		
			 				<tbody>
	 							<tr>
	 								<td #patient>13010231 </td>
	 								<td #patient> Steeve </td>
	 								<td #patient> Wilder </td>
	 							
	 								<td>
										<a type="button" class="btn btn-primary" href="#" >View Profile</a> 
	 								</td>
	 							</tr>				
	 						</tbody>
				</table>
				 	</div>
<!-- ADMISSION TAB -->

						<div class="tab-pane " id="admission" > 
				 			<table class="table table-bordered table-hover table-striped table-responsive ">
						<thead id="patient_table">
								<th> Patient ID </th>
								<th> Name</th>
								<th> Surname </th>
								<th> Action </th>
							
						</thead>		
			 				<tbody>
	 							<tr>
	 								<td #patient>13010231 </td>
	 								<td #patient> Steeve </td>
	 								<td #patient> Wilder </td>
	 							
	 								<td>
										<a type="button" class="btn btn-primary" href="#" >View Profile</a> 
	 								</td>
	 							</tr>				
	 						</tbody>
				</table>
				 	</div>

<!-- / VITALS TAB -->

					<div class="tab-pane " id="vitals" > 
				 			<table class="table table-bordered table-hover table-striped table-responsive ">
						<thead id="patient_table">
								<th> Patient ID </th>
								<th> Name</th>
								<th> Surname </th>
								<th> Action </th>
							
						</thead>		
			 				<tbody>
	 							<tr>
	 								<td #patient>13010231 </td>
	 								<td #patient> Steeve </td>
	 								<td #patient> Wilder </td>
	 							
	 								<td>
										<a type="button" class="btn btn-primary" href="#" >View Profile</a> 
	 								</td>
	 							</tr>				
	 						</tbody>
				</table>
				 	</div>

				 </div>	<! End Tab Content -->


				  </div>
				</div>
			</div>	

		</div>
	</div>
</div>


@stop