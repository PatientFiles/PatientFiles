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
    @if (session('delete'))
          <small style=" padding-top: 5px;color: white;background-color: red;font-style: italic;" class="box-title alert alert-{{session ('delete.type')}} form-control" >
                  {{session('delete.text')}}
          </small> 
    @endif
    @if (session('added'))
          <small style=" padding-top: 5px;color: white;background-color: red;font-style: italic;" class="box-title alert alert-{{session ('added.type')}} form-control" >
                  {{session('added.text')}}
          </small> 
    @endif
    @if ($errors->has())
    <ul>
      @foreach($errors->all() as $error)
          <ul>
            <li style="list-style: none;">{{$error}}</li>
          </ul>
      @endforeach
      </ul>
    @endif


	<div class="panel panel-default" >
  <div class="panel-body" >
      <div class="input-group pull-left" style="width: 50%" > 
          <a href="/account/add_account" class="btn btn-primary"><span class="ion ion-person-add"></span> Add User Account</a>
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
                <form action="/add_account" method="POST" role="form">
                  {!! csrf_field() !!}
                  <div class="form-group">
                    <label for="text">Account Type:&nbsp<span style="color:red">*</span></label>
                    <select type="text" class="form-control" name="user_type_id" />
                      <option value selected disabled>Select Account Type ...</option>
                      <option value="1">Practitioner</option>
                      <option value="3">Staff</option>
                      <option value="4">Super Admin</option>
                      <option value="5">CCS</option>
                      <option value="6">Laboratory</option>
                      <option value="7">Clinic Manager</option>
                      <option value="8">Queue Accounts</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="text">Firstname:&nbsp<span style="color:red">*</span></label>
                      <input type="text" name="firstname" class="form-control" placeholder="Firstname">
                  </div>
                  <div class="form-group">
                      <label for="text">Middlename:</label>
                      <input type="text" name="middlename" class="form-control" placeholder="Middlename">
                  </div>
                  <div class="form-group">
                      <label for="text">Lastname:&nbsp<span style="color:red">*</span></label>
                      <input type="text" name="lastname" class="form-control" placeholder="Lastname">
                  </div>
                  <div class="form-group">
                      <label for="text">Gender:&nbsp<span style="color:red">*</span></label>
                    <select type="text" class="form-control" name="gender">
                      <option value selected disabled>Select Gender ...</option>
                      <option value="1">Male</option>
                      <option value="0">Female</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="text">Birthdate:&nbsp<span style="color:red">*</span></label>
                      <div class="input-group">
                        <input type="text" name="birthdate" readonly class="form-control" id="idTourDateDetails" placeholder="Birthdate">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="number">License Number:</label>
                      <input type="number" name="license_number" class="form-control" placeholder="License Number">
                  </div>
                  <div class="form-group">
                      <label for="number">PTR:</label>
                      <input type="number" name="ptr_number" class="form-control" placeholder="PTR License">
                  </div>
                  <div class="form-group">
                      <label for="number">S2 License Number:</label>
                      <input type="number" name="s2_license" class="form-control" placeholder="S2 License Number">
                  </div>
                  <div class="form-group">
                      <label for="text">Mobile Number:&nbsp<span style="color:red">*</span></label>
                      <input type="text" name="mobile_number"  placeholder="Mobile Number" class="form-control input-medium bfh-phone" data-format="dddd ddd-dddd" aria-describedby="basic-addon1" value="">
                  </div>
                  <div class="form-group">
                      <label for="text">Email Address:&nbsp<span style="color:red">*</span></label>
                      <input type="text" name="email" class="form-control" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                      <label for="password">Password:&nbsp<span style="color:red">*</span></label>
                      <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                      <label for="text">Specialty:&nbsp<span style="color:red">*</span></label>
                      <input type="text" name="specialties_name" class="form-control" placeholder="Specialty">
                  </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>&nbsp
                <input type="submit" class="btn btn-primary pull-right" value="Add User"/>
              </div>
              </form>
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
                  </div> </br>
                  <div style="color:#848688;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.2"><small data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.2.0">  <b data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.0">Birth Date:&nbsp</b>{{date('F d,Y',strtotime($user->birthdate))}}</small>
                  </div>
                  <div style="color:#848688;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3"><small data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0">
                  <b data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.0">Gender:</b><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.1">@if ($user->gender == 0) {{'Female'}} @else {{'Male'}}@endif</span><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.2"></span><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.0.3"> </span></small><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.1">&nbsp;</span><div style="color:#848688;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3"><small data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.2"><b data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.2.0">Date Registered:&nbsp</b><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.2.1">{{date('F d,Y',strtotime($user->created_at))}} </span><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.2.2"></span><span data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.0.3.2.3"> </span></small></div>
                  </div>
                  </div>
                  <div  class="col-md-4" style="padding-top:4rem;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.1"><a class="btn btn-primary" href="/account/edit_account" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.1.0">Edit Account</a>&nbsp | &nbsp
                  <a class="btn btn-danger" href="/delete_account/{{$user->id}}" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.1.0">Delete Account</a>
                  </div>

              <!--    <div  class="col-md-4" style="padding-top:4rem;" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.1"><a class="btn btn-danger" href="/delete_account/{{$user->id}}" data-reactid=".0.0.0.2.0.1.1.1.0.$0.0.1.1.0">Delete Account</a>
                  </div>
                  -->
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