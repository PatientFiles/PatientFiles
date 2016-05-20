@extends('layouts.masterLayout')

@section('title', 'Search Result | Patient Files')
@section('content')

<section class="content-header">
		<h1>Search Results : {{$total}} Found</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Search</a></li>
        <li class="active">Search Results</li>
      </ol>
 </section>
	 
<hr id="p_hr1">

<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-sm-12 table-responsive">	
				<div class="box">
                <div class="box-body">


                		<table  data-toggle="table"
       data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
       data-search="true"
       data-show-refresh="true"
       data-show-toggle="true"
       data-show-columns="true">
      <thead>
                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 177px;">Patient ID</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Patient Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 205px;">Gender</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 152px;">Birthdate</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 152px;">Action</th></tr>
                    </thead>



                     <tbody>
	                    @foreach($result as $patient) 
		                    <tr role="row" class="even">
		                        <td class="sorting_1">{{ $patient->id }}</td>
		                        <td>{{ $patient->user->firstname." ".$patient->user->lastname}}</td>
		                        @if ($patient->user->gender == 0)  
		                        	<td>Male</td>
		                        @endif
		                        @if ($patient->user->gender == 1)  
		                        	<td>Female</td>
		                        @endif
		                        <td>{{date('F d, Y', strtotime($patient->user->birthdate))}}</td>
		                        <td>
		                        	<a type="button" class="btn btn-primary" href="patientProfile/{{$patient->id}}" >View Profile</a> 
		                        </td>
		                    </tr>
	                    @endforeach
	                    
                    </tbody>
</table>


                </div><!-- /.box-body -->
              </div>	
			</div>
		</div>
	</div>

	

@stop