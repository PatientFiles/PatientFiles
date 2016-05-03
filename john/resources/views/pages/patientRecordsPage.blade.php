@extends('layouts.masterLayout')


@section('content')
<section class="content-header">
      <h1>
        Patient Records
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
 </section>
	 
	<div class="container" align="center">
		<div class="btn-group" role="group" aria-label="..." >
			  <button type="button" class="btn btn-lg btn-default">All</button>
			  <button type="button" class="btn btn-lg btn-default">Newly Confined</button>
			  <button type="button" class="btn btn-lg btn-default">Under Treatment</button>
			  <button type="button" class="btn btn-lg btn-default">Released</button>
		 </div>
	</div>	

	<hr id="p_hr1">

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-sm-12 table-responsive">	
				<table class="table table-bordered table-hover table-striped table-fixed ">
						<thead id="patient_table">
								<th> Patient ID </th>
								<th> Name</th>
								<th> Surname </th>
								<th> Room </th>
								<th> Dicease </th>
								<th> Doctor </th>
								<th> Menu </th>
						</thead>		
			 				<tbody>
	 							<tr>
	 								<td #patient>13010231 </td>
	 								<td #patient> Steeve </td>
	 								<td #patient> Wilder </td>
	 								<td #patient> C401 </td>
	 								<td #patient> Cancer Stage 4 </td>
	 								<td #patient> Dr. John Benedict De Castor MD. </td>
	 								<td>
										<a type="button" class="btn btn-primary" href="#" >View Profile</a> 
	 								</td>
	 							</tr>				
	 						</tbody>
				</table>
			</div>
		</div>
	</div>


@stop