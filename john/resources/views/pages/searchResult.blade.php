@extends('layouts.masterLayout')


@section('content')

<div class="container-fluid">
	<div>
		<h4> 208 Result </h4>
	</div>
</div>


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
										<a type="button" class="btn btn-primary" href="#" >View Patient</a> 
	 								</td>
	 							</tr>				
	 						</tbody>
				</table>
			</div>
		</div>
	</div>

	


@stop