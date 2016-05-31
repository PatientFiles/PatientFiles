@extends('layouts.masterLayout')




@section('title', 'User Accounts | Pedix')

<style type="text/css">
  
div#patientListing:hover
  {

     background-color: #E3E3E3;

  }


</style>

@section('content')


<section class="content-header">
 
      <h1>
              List of User Accounts
          
     </h1>
        
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home -> List</a></li>
      </ol>
 </section>
	 
	<hr id="p_hr1">


	<div class="panel panel-default" >
  <div class="panel-body" >
      <div class="input-group pull-left" style="width: 50%" > 
          <button data-toggle="modal" data-target="#accountModal" class="btn btn-primary" type="button"><span class="ion ion-person-add"></span> Add User Account</button>
      </div>
      <div class="modal fade" id="accountModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 style="color:white;" class="modal-title" id="myModalLabel">Add New User Account</h4>
              </div>
              <div class="modal-body">
                <p>One fine body…</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>&nbsp
                <button type="button" class="btn btn-primary pull-right">Add User</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
       <div class="input-group pull-right" style="width: 50%" >           
             <input  type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
      </div>
      <br>
      <br>
      <hr>


<!-- CARD TABLE -->
    
          @foreach($users as $user) 
           <div  class="row container-fluid"    id="patientListing"   data-reactid=".0.0.0.2.0.1.1.1">
             <ul style="padding:0;" class="patient-list-style" data-reactid=".0.0.0.2.0.1.1.1.0">                 
                <li style="list-style: none;" data-reactid=".0.0.0.2.0.1.1.1.0.$0" >
                  <div class="row" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0">
                  <div class="col-md-3 " data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.0"><img   class="img-circle" src="/img/generic.png" style="width: 50%" >
                  </div>
                  <div class="col-md-9" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1">
                  <div class="col-md-8" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0">
                  <h3 data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.0"><strong data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.0.0">{{$user->firstname .' '. $user->middlename.' '.$user->lastname}}</strong>
                  </h3>
                  <div style="color:#848688;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.1"><small data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.1.0"><b data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.1.0.0">User ID: &nbsp</b><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.1.0.1">{{ $user->id }}</span></small>
                  </div> 
                  <div style="color:#848688;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.2"><small data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.2.0">  <b data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.0">Birth Date:&nbsp</b>{{date('F d,Y',strtotime($user->birthdate))}}</small>
                  </div>
                  <div style="color:#848688;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3"><small data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0">
                  <b data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.0">Gender:</b><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.1">@if ($user->gender == 0) {{'Female'}} @else {{'Male'}}@endif</span><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.2"></span><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.3"> </span></small><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.1">&nbsp;</span><small data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.2"><b data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.2.0">Date Registered:</b><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.2.1">{{date('F d,Y',strtotime($user->created_at))}} </span><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.2.2"></span><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.2.3"> </span></small>
                  </div>
                  </div>
                  <div  class="col-md-4" style="padding-top:4rem;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.1"><a class="btn btn-primary" href="#" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.1.0">Edit Account</a>
                  </div>
                  </div>
                  </div>
                </li>
                </ul>
              
                </div>
  <hr> 
  @endforeach
          <!-- END CARD TABLE -->    
            
       </div>
</div>     










@stop