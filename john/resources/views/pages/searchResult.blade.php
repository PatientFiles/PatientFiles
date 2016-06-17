@extends('layouts.masterLayout')

@section('title', 'Search Result | Patient Files')
@section('content')

<section class="content-header">
		<h1>Search Results : {{$total}} Found</h1>
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
                     	@if (! $result)

                     	@endif
                     	@if ($result)
	                    @foreach($result as $patient) 
		                    <tr role="row" class="even">
		                        <td class="sorting_1">{{ $patient->id }}</td>
		                        <td>{{ $patient->user->firstname." ".$patient->user->lastname}}</td>
		                        @if ($patient->user->gender == 1)  
		                        	<td>Male</td>
		                        @endif
		                        @if ($patient->user->gender == 0)  
		                        	<td>Female</td>
		                        @endif
		                        <td>{{date('F d, Y', strtotime($patient->user->birthdate))}}</td>
		                        <td>
		                        @if (! $patient->patient_appointments)
                                    <a class="btn btn-default" href="patientProfile/{{$patient->id}}" >View Profile</a>
		                        	<a class="btn btn-primary" data-toggle="modal" data-target="#newVisit-{{$patient->id}}">New Visit</a>
                                    <a class="btn btn-default" href="patient/edit_patient/{{$patient->id}}" >Edit Profile</a>
                                @else
                                    <a class="btn btn-default" href="patientProfile/{{$patient->id}}" >View Profile</a>
                                    <a class="btn btn-primary" href="#"  data-toggle="modal" data-target="#patientVisit-{{$patient->id}}">Patient Visit</a>
                                    <a class="btn btn-default" href="patient/edit_patient/{{$patient->id}}" >Edit Profile</a>
		                        @endif
		                        </td>
		                    </tr>
		                    <div id="newVisit-{{$patient->id}}" class="modal fade" role="dialog">
							  <div class="modal-dialog">
							    <!-- Modal content-->
							    <form action="/new_appointment" method="POST">
							      <div class="modal-content" >
							        <div class="modal-header">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title" style="color: white">Patient Visit</h4>
							        </div>
							        <div class="modal-body">
							            <strong>Chief Complaints<span style="color: red">*</span></strong>
							            @if($errors->has('chief_complaints'))
							                    <span class="error" style="color: red">{{ $errors->first('chief_complaints') }}</span>
							                @endif
							                {!! csrf_field() !!}
							            <input type="text" name="chief_complaints" class="form-control" placeholder="Chief Complaint" aria-describedby="basic-addon1" value="">

							            <input type="hidden" name="patient_id" class="form-control" placeholder="Chief Complaint" aria-describedby="basic-addon1" value="{{ $patient->id }}">
							        </div>
							        <div class="modal-footer">
							          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							          <input type="submit" class="btn btn-primary" value="Start Visit" />
							        </div>
							      </div>
							    </form>
							  </div>
							</div>
							<div id="patientVisit-{{$patient->id}}" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <form action="/old_appointment" method="POST" role="form">
							    <div class="modal-content" >
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title" style="color: white">Patient Visit</h4>
							      </div>
							      <div class="modal-body">
							              <strong>Purpose<span style="color: red">*</span></strong>
							              @if($errors->has('purpose_id'))
							                      <span class="error" style="color: red">{{ $errors->first('purpose_id') }}</span>
							                  @endif
							                {!! csrf_field() !!}
							              <select class="form-control" name="purpose_id" style="height: 34px; width:100%" required="">
							                    <option value="" disabled="" selected="">Select...</option>
							                    <option value="2">Old Patient Consult</option>
							                    <option value="3">Follow-up Consult</option>
							                    <option value="4">Annual Physical Examination</option>
							                    <option value="7">Laboratory (Request from other doctors or facilities)</option>
							                    <option value="8">Laboratory (Sponsored program)</option>
							                    <option value="10">Imaging (Request from other doctors or facilities)</option>
							                    <option value="11">Imaging (Sponsored program)</option>
							             </select>
							      </div>
							      <div class="modal-body">
							                  <strong>Chief Complaints<span style="color: red">*</span></strong>
							                  @if($errors->has('chief_complaints'))
							                          <span class="error" style="color: red">{{ $errors->first('chief_complaints') }}</span>
							                      @endif
							                    <input type="text" name="chief_complaints" class="form-control" placeholder="Chief Complaint" aria-describedby="basic-addon1" value="">
							                    
							                    <input type="hidden" name="patient_id" class="form-control" placeholder="Chief Complaint" aria-describedby="basic-addon1" value="{{ $patient->id }}">
							    </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							        <input type="submit" class="btn btn-primary" value="Start Visit" />
							      </div>
							    </div>
							</form>
							  </div>
							 
							</div>
	                    @endforeach
	                    @endif
                    </tbody>
</table>
                </div><!-- /.box-body -->
              </div>	
			</div>
		</div>
	</div>
@stop