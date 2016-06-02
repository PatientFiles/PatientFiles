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

<!-- CARD TABLE -->
    

             @foreach($patients as $patient)  
           <div  class="row container-fluid"    id="patientListing" >
             <ul style="padding:0;" class="patient-list-style">      <!-- START UL -->           
                <li style="list-style: none;"  > <!-- START LI -->   
                    <div class="row"> <!-- START ROW -->   
                      <div class="col-md-3 " > <!-- START IMG -->
                          <img   class="img-circle" src="/img/generic.png" style="width: 160px" >
                      </div> <!-- END IMG -->
                      
                   
                      <div class="col-md-9" > <!--Start 9 COLUMNS -->
                         <div class="row"> 
                              <div class="col-md-6" > <!-- START 8 COLUMNS -->
                                  <h3 ><strong >{{ $patient->user->firstname." ".$patient->user->lastname}}</strong>
                                  </h3>
                                  <div style="color:#848688;" ><small ><b >Patient ID: &nbsp</b><span >{{ $patient->id }}</span></small>
                                  </div>
                                   @if ($patient->user->gender == 0)  
                                  <div style="color:#848688;" ><small >{{ "Male" }}</small>
                                  </div>
                                   @endif
                                    @if ($patient->user->gender == 1)  
                                  <div style="color:#848688;" ><small >  <b >Gender: &nbsp</b>{{ "Female" }}</small>
                                  </div>
                                   @endif
                                  <div style="color:#848688;"><small >  <b >Birth Date:&nbsp</b>{{date('F d, Y',strtotime($patient->user->birthdate))}}</small>
                                  </div>
                                  <div style="color:#848688;" ><small >
                                  <b >Date Registered:</b><span > </span><span >{{date('F d, Y',strtotime($patient->user->created_at))}}</span><span > </span></small><span>&nbsp;</span><small ><b >Last Visit:</b><span > </span><span >{{$patient->user->created_at}}</span><span > </span></small>
                                  </div>
                              </div> <!-- END 8 COLUMNS -->
                                
                                     <div class="col-lg-6 container-fluid"  style="padding-top: 40px"> <!-- START cl4 -->
                                          <div class="btn-group" role="group">      
                                            <a class="btn btn-default" href="patientProfile/{{$patient->id}}" >View Profile</a>



                                            <a class="btn btn-primary" href="#"  data-toggle="modal" data-target="#Modal">Patient Visit</a>


                                            <a class="btn btn-default" href="#"  data-toggle="modal" data-target="#Modal">Edit Profile</a>

                                          </div>        
                                     </div>  <!-- END cl 4 -->
                                 
                          </div>                            
                      </div> <!--END 9 Columns -->
                    </div> <!-- END ROW -->
                 </li>  <!-- END LI -->
               </ul> <!-- END UL -->   
           </div>  <!-- END WHOLE ROW -->
      
      
      

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
        <a href="/consultation/{{$patient->id}}" type="button" class="btn btn-default">Save</a>
      </div>
    </div>

  </div>
</div>
  <hr>
              @endforeach   
          <!-- END CARD TABLE -->    
            

             <div > 
                  <a style="color: black" href="/prev" class="btn btn-default"> Previous </a> 
                  <a style="color: black" href="/next" class="btn btn-default pull-right"> Next </a> 
             </div>

       </div>


</div>     



@stop