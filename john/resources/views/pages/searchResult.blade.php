@extends('layouts.masterLayout')

@section('title', 'Search Result | Patient Files')
@section('content')

<section class="content-header">
		<h1>Search Results : {{$total}}</h1>
 </section>
	 
<hr id="p_hr1">
     @foreach($result as $patient)  
           <div   class="row container-fluid contact-name"    id="patientListing" >
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
                                  <div style="color:#848688;" ><small > <b >Gender: &nbsp</b>{{ "Male" }}</small>
                                  </div>
                                   @endif
                                    @if ($patient->user->gender == 1)  
                                  <div style="color:#848688;" ><small >  <b >Gender: &nbsp</b>{{ "Female" }}</small>
                                  </div>
                                   @endif
                                  <div style="color:#848688;"><small >  <b >Birth Date:&nbsp</b>{{date('F d, Y',strtotime($patient->user->birthdate))}}</small>
                                  </div>
                                  <div style="color:#848688;" >
                                    <small>
                                      <b >Date Registered:</b>
                                      <span >{{date('F d, Y',strtotime($patient->user->created_at))}}</span>
                                    </small>
                                    <span>&nbsp;</span>
                                    <small >
                                        <b >Last Visit:</b>
                                        @if (! $patient->patient_appointments)
                                          <span >
                                            No Visits Yet.
                                          </span>
                                              @else
                                              <span >
                                                  {{date('F d, Y', strtotime($patient->patient_appointments[count($patient->patient_appointments)-1]->appointment_date)).' '.$patient->patient_appointments[count($patient->patient_appointments)-1]->appointment_time}}
                                              </span>
                                        @endif
                                    </small>
                                  </div>
                              </div> <!-- END 8 COLUMNS -->
                                    @if (!$patient->patient_appointments)
                                    <div class="col-lg-6 container-fluid"  style="padding-top: 40px"> <!-- START cl4 -->
                                          <div class="btn-group" role="group">  
                                            <a class="btn btn-default" href="patientProfile/{{$patient->id}}" >View Patient</a>    
                                            <a class="btn btn-primary" href="#"  data-toggle="modal" data-target="#newVisit-{{$patient->id}}">New Visit</a>
                                            <a class="btn btn-default" href="patient/edit_patient/{{$patient->id}}" >Edit Patient</a>
                                          </div>        
                                     </div>
                                    @else
                                     <div class="col-lg-6 container-fluid"  style="padding-top: 40px"> <!-- START cl4 -->
                                          <div class="btn-group" role="group">      
                                            <a class="btn btn-default" href="patientProfile/{{$patient->id}}" >View Patient</a>
                                            <a class="btn btn-primary" href="#"  data-toggle="modal" data-target="#patientVisit-{{$patient->id}}">Patient Visit</a>
                                            <a class="btn btn-default" href="patient/edit_patient/{{$patient->id}}" >Edit Patient</a>
                                          </div>        
                                     </div>
                                     @endif  <!-- END cl 4 -->
                          </div>                            
                      </div> <!--END 9 Columns -->
                    </div> <!-- END ROW -->
                 </li>  <!-- END LI -->
               </ul> <!-- END UL -->   
           </div>  <!-- END WHOLE ROW -->   
           @endforeach
@stop