@extends('layouts.masterLayout')




@section('title', 'Edit User Account | Pedix')

<style type="text/css">
  
div#patientListing:hover
  {

     background-color: #E3E3E3;

  }


</style>

@section('content')


<section class="content-header">
 
      <h1>
              Edit User Account
          
     </h1>
        
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Pediatricians -> Edit Account</a></li>
      </ol>
 </section>
	 
	<hr id="p_hr1"> 

    @if (session('added'))
          <small style=" padding-top: 5px;color: white;background-color: red;font-style: italic;" class="box-title alert alert-{{session ('added.type')}} form-control" >
                  {{session('added.text')}}
          </small> 
    @endif

  <div class="panel panel-default" >
      <div class="panel-body" >
                <form action="/account/edit_account" method="POST" role="form" class="form-horizontal">
                          {!! csrf_field() !!}
                          <div class="row form-group">
                            <div class="col-lg-4">
                                  <label for="text">Firstname:&nbsp<span style="color:red">*</span></label>
                      @if($errors->has('firstname'))
                          <span class="error" style="color: red">{{ $errors->first('firstname') }}</span>
                      @endif
                                  <input type="text" name="firstname" class="form-control" placeholder="Firstname" value="{{$account->firstname}}">
                            </div>

                            <div class="col-lg-4">
                                  <label for="text">Middlename:</label>
                      @if($errors->has('middlename'))
                          <span class="error" style="color: red">{{ $errors->first('middlename') }}</span>
                      @endif
                                  <input type="text" name="middlename" class="form-control" placeholder="Middlename" value="{{$account->middlename}}">
                            </div>
                            <div class="col-lg-4">
                                  <label for="text">Lastname:&nbsp<span style="color:red">*</span></label>
                      @if($errors->has('lastname'))
                          <span class="error" style="color: red">{{ $errors->first('lastname') }}</span>
                      @endif
                                  <input type="text" name="lastname" class="form-control" placeholder="Lastname" value="{{$account->lastname}}">
                            </div>
                          </div>   

                          <div class="row form-group">  
                              <div class="col-lg-6"> 
                                  <label for="text">Gender:&nbsp<span style="color:red">*</span></label>
                      @if($errors->has('gender'))
                          <span class="error" style="color: red">{{ $errors->first('gender') }}</span>
                      @endif
                                  <select type="text" class="form-control" name="gender">
                                    <option  @if ($account->gender == 'null') {{'selected="selected" disabled'}}@endif>Select Gender ...</option>
                                    <option value="1" @if ($account->gender == '1') {{'selected="selected"'}}@endif>Male</option>
                                    <option value="0" @if ($account->gender == '0') {{'selected="selected"'}}@endif>Female</option>
                                  </select>
                              </div>
                            <div class="col-lg-6">
                                  <label for="text">Birthdate:&nbsp<span style="color:red">*</span></label>
                      @if($errors->has('birthdate'))
                          <span class="error" style="color: red">{{ $errors->first('birthdate') }}</span>
                      @endif
                                  <div class="input-group">
                                    <input type="text" name="birthdate" readonly class="form-control" id="idTourDateDetails" placeholder="Click here to pick a birthdate" value="{{date('Y-m-d', strtotime($account->birthdate))}}">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                  </div>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="text">Email Address:&nbsp<span style="color:red">*</span></label>
                      @if($errors->has('email'))
                          <span class="error" style="color: red">{{ $errors->first('email') }}</span>
                      @endif
                                <input type="text" name="email" class="form-control" placeholder="Email Address" value="{{$account->user_emails[0]->email}}"><input type="hidden" name="ped_id" class="form-control" placeholder="Email Address" value="{{$account->id}}">
                            </div>
                          </div>
                          <br>
                          <div class="form-group row">
                            <div class="col-lg-6 pull-right">
                              <div class="col-lg-4 pull-right">
                                  <input type="submit" name="edit" class="form-control btn btn-primary" value="Save Changes">
                              </div>
                              <div class="col-lg-4 pull-right">
                                  <a href="/pediatrician" type="submit" name="cancel" class="form-control btn btn-default">Cancel</a>
                              </div>
                            </div>
                          </div>
              </form>
    </div>
</div>


@stop