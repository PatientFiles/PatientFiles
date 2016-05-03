@extends('layouts.masterLayout')



@section('content')
	<section class="content-header">
          <h1>
            Dashboard
            <small>Patient Files</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>
	 
  
        <div class="container-fluid">
        	<div class="row">  <! Start // ROW  -->
        		<div class="col-lg-6 col-xs-12">	 <! FIRST TABLE  -->
        			<div> 	<!-- TITLE **** --> 
						<h3> Recent Consultation </h3>
					</div>	<! end title 1 //>

					<!-- TABLE RECENT CONSULTATION /  -->
						<table class="table table-bordered table-hover table-responsive table-striped table-fixed ">
								<thead id="patient_table">
										<th> Patient ID </th>
										<th> Name</th>
									
										<th> Menu </th>
								</thead>		
			 				<tbody>
	 							<tr>
	 								<td #patient>13010231 </td>
	 								<td #patient> Steeve </td>
	 								<td>
										<a type="button" class="btn btn-primary" href="#" >View Profile</a> 
	 								</td>
	 							</tr>				
	 						</tbody>
						</table>		
				</div>

				<div class="col-lg-6 col-xs-12">	 <! SECOND TABLE  -->
        			<div> 	<!-- TITLE 1 **** --> 
						<h3> Alerts / Reminders </h3>
					</div>	<! end title 2 //>

					<!-- TABLE RECENT CONSULTATION /  -->
						<table class="table table-bordered table-hover table-responsive table-striped table-fixed">
								<thead id="patient_table">
										<th> Patient ID </th>
										<th> Name</th>
									
										<th> Menu </th>
								</thead>		
			 				<tbody>
	 							<tr>
	 								<td #patient>13010231 </td>
	 								<td #patient> Steeve </td>
	 								<td>
										<a type="button" class="btn btn-primary" href="#" >View Profile</a> 
	 								</td>
	 							</tr>				
	 						</tbody>
						</table>		
				</div>

						

        	</div>	<! END CLASS ROW ///  >
        </div>

     
			
	
            
@stop