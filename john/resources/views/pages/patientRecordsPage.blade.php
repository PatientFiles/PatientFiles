@extends('layouts.masterLayout')




@section('title', 'Patient List | Patient Files')

<style type="text/css">
  
div#patientListing:hover
  {

     background-color: #E3E3E3;

  }


</style>

@section('content')


<section class="content-header">
 
      <h1>
              Patient List
              <small>Patient Files</small>
            </h1>
        
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Patient List</a></li>
      </ol>
 </section>
	 
	<hr id="p_hr1">


	<div class="panel panel-default" >
  <div class="panel-body" >
      
       <div class="input-group pull-right" style="width: 50%" >           
             <input  type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
      </div>
      <br>
      <br>
      <hr>

<!-- MODAL -->

<div id="Modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Patient Visit</h4>
      </div>
      <div class="modal-body">
              <strong>Purpose<span style="color: red">*</span></strong>
              @if($errors->has('gender'))
                      <span class="error" style="color: red">{{ $errors->first('gender') }}</span>
                  @endif
              <select class="form-control" name="purpose_id" style="height: 34px; width:100%" required="">
                    <option value="" disabled="" selected="">Select...</option>
                    <option value="1">New Patient Consult</option>
                    <option value="2">Old Patient Consult</option>
                    <option value="3">Follow-up Consult</option>
                    <option value="4">Annual Physical Examination</option>
                    <option value="5">Pre-employment Physical Examination</option>
                    <option value="6">Laboratory (Request from FamilyDOC)</option>
                    <option value="7">Laboratory (Request from other doctors or facilities)</option>
                    <option value="8">Laboratory (Sponsored program)</option>
                    <option value="9">Imaging (Request from FamilyDOC)</option>
                    <option value="10">Imaging (Request from other doctors or facilities)</option>
                    <option value="11">Imaging (Sponsored program)</option>
             </select>
      </div>
      <div class="modal-body">
                  <strong>Purpose<span style="color: red">*</span></strong>
                  @if($errors->has('efname'))
                          <span class="error" style="color: red">{{ $errors->first('efname') }}</span>
                      @endif
                    <input type="text" name="efname" class="form-control" placeholder="Chief Complaint" aria-describedby="basic-addon1" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <a href="/consultation" type="button" class="btn btn-default">Save</a>
      </div>
    </div>

  </div>
</div>
<!-- CARD TABLE -->
    

             @foreach($patients as $patient)  
           <div  class="row container-fluid"    id="patientListing"   data-reactid=".0.0.0.2.0.1.1.1">
             <ul style="padding:0;" class="patient-list-style" data-reactid=".0.0.0.2.0.1.1.1.0">                 
                <li style="list-style: none;" data-reactid=".0.0.0.2.0.1.1.1.0.$0" >
                  <div class="row" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0">
                  <div class="col-md-3 " data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.0"><img   class="img-circle" src="/img/generic.png" style="width: 50%" >
                  </div>
                  <div class="col-md-9" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1">
                  <div class="col-md-8" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0">
                  <h3 data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.0"><strong data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.0.0">{{ $patient->user->firstname." ".$patient->user->lastname}}</strong>
                  </h3>
                  <div style="color:#848688;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.1"><small data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.1.0"><b data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.1.0.0">Patient ID: &nbsp</b><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.1.0.1">{{ $patient->id }}</span></small>
                  </div>
                   @if ($patient->user->gender == 0)  
                  <div style="color:#848688;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.2"><small data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.2.0">{{ "Male" }}</small>
                  </div>
                   @endif
                    @if ($patient->user->gender == 1)  
                  <div style="color:#848688;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.2"><small data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.2.0">  <b data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.0">Gender: &nbsp</b>{{ "Female" }}</small>
                  </div>
                   @endif
                  <div style="color:#848688;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.2"><small data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.2.0">  <b data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.0">Birth Date:&nbsp</b>{{date('F d, Y',strtotime($patient->user->birthdate))}}</small>
                  </div>
                  <div style="color:#848688;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3"><small data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0">
                  <b data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.0">Date Registered:</b><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.1"> </span><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.2">{{date('F d, Y',strtotime($patient->user->created_at))}}</span><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.3"> </span></small><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.1">&nbsp;</span><small data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.2"><b data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.2.0">Last Visit:</b><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.2.1"> </span><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.2.2">{{$patient->user->created_at}}</span><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.2.3"> </span></small>
                  </div>
                  </div>
              @if(! $patient->patient_appointments)
                  <div  class="col-md-4" style="padding-top:4rem;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.1"><a class="btn btn-primary" href="#" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.1.0" data-toggle="modal" data-target="#Modal">New Visit</a>
              @endif
              @if($patient->patient_appointments)
              <div class="row container-fluid">
                  <div  class="col-md-4" style="padding-top:4rem;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.1"><a class="btn btn-primary" href="patientProfile/{{$patient->id}}" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.1.0" >View Profile</a>
                  </div>
                  <div  class="col-md-4" style="padding-top:4rem;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.1"><a class="btn btn-default" href="#" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.1.0" data-toggle="modal" data-target="#Modal">Patient Visit</a>
                  </div>
              </div>
              @endif
                  </div>
                  </div>
                </li>
                </ul>
              
                </div>
  <hr>
              @endforeach   
          <!-- END CARD TABLE -->    
            

             <div > 
                  <a style="color: black" href="#" class="btn btn-default"> Previous </a> 
                  <a style="color: black" href="#" class="btn btn-default pull-right"> Next </a> 
             </div>

       </div>


</div>     







@stop