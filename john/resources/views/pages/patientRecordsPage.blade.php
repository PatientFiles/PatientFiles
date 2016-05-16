@extends('layouts.masterLayout')


@section('content')


<section class="content-header">
 
      <h1>
              Patient Records
              <small>Patient Files</small>
            </h1>
        
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home -> List</a></li>
      </ol>
 </section>
	 
	<hr id="p_hr1">

	<div class="panel panel-default" >
  <div class="panel-body" >



<!-- CARD TABLE -->

             @foreach($patients as $patient)  
           <div class="row container"  id="patientListing"  data-reactid=".0.0.0.2.0.1.1.1">
             <ul style="padding:0;" class="patient-list-style" data-reactid=".0.0.0.2.0.1.1.1.0">                 
                <li style="list-style: none;" data-reactid=".0.0.0.2.0.1.1.1.0.$0" >
                  <div class="row" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0">
                  <div class="col-md-3" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.0"><img   class="img-circle" src="/img/generic.png" style="width: 50%" >
                  </div>
                  <div class="col-md-9" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1">
                  <div class="col-md-8" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0">
                  <h3 data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.0"><strong data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.0.0">{{ $patient['user']['firstname']." ".$patient['user']['lastname']}}</strong>
                  </h3>
                  <div style="color:#848688;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.1"><small data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.1.0"><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.1.0.0">Patient ID </span><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.1.0.1">{{ $patient['id'] }}</span></small>
                  </div>
                   @if ($patient['user']['gender'] == 0)  
                  <div style="color:#848688;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.2"><small data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.2.0">{{ "Female" }}</small>
                  </div>
                   @endif
                    @if ($patient['user']['gender'] == 1)  
                  <div style="color:#848688;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.2"><small data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.2.0">  <b data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.0">Gender: &nbsp</b>{{ "Male" }}</small>
                  </div>
                   @endif
                  <div style="color:#848688;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.2"><small data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.2.0">  <b data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.0">Birth Date:</b>{{$patient['user']['birthdate']}}</small>
                  </div>
                  <div style="color:#848688;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3"><small data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0">
                  <b data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.0">Date Created:</b><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.1"> </span><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.2">{{$patient['user']['created_at']}}</span><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.3"> </span></small><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.1">&nbsp;</span><small data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.2"><b data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.2.0">Last Visit:</b><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.2.1"> </span><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.2.2">{{$patient['user']['created_at']}}</span><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.2.3"> </span></small>
                  </div>
                  </div>
                  <div  class="col-md-4" style="padding-top:4rem;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.1"><a class="btn btn-primary" href="patientProfile" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.1.0">View Profile</a>
                  </div>
                  </div>
                  </div>
                </li>
                </ul>
                <hr>
                </div>

              @endforeach   
          <!-- END CARD TABLE -->    
            
       </div>
</div>     


@stop