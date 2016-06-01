@extends('layouts.masterLayout')




@section('title', 'Consultation | Patient Files')
@section('content')

<section class="content-header">
          <h1>
           Consultation
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">consultation</a></li>
          </ol>
      </section>
      <hr>
<div class="row">
  <div class="col-xs-3">
   <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="/img/prof_pic.png" alt="User profile picture">
                  <h3 class="profile-username text-center"> </h3>
                  <p class="text-muted text-center"></p>

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Patient ID</b> <a class="pull-right badge bg-blue"></a>
                    </li>
                    <li class="list-group-item">
                      <b>Nickname</b> <a class="pull-right badge bg-blue"></a>
                    </li>
                    <li class="list-group-item">
                      <b>Birth Date</b> <a class="pull-right badge bg-blue"></a>
                    </li>
                    <li class="list-group-item">
                      <strong>Address:</strong><a class="pull-right badge bg-blue"></a>
                    </li>
                    </ul>
                    <br>
                    <div>
                          <input type="button" data-toggle="modal" data-target="#vitalsModal" class="btn btn-primary pull-left" value="New Visit" />
                    </div>
                    <div>
                          <input type="button" data-toggle="modal" data-target="#vitalsModal" class="btn btn-primary pull-right" value="Add Vitals" />
                    </div>
            </div>
            </div>

              <!-- About Me Box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Patient Latest Vitals</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                      <strong><i class="fa fa-book margin-r-5"></i>  Vitals</strong>
                 <h5> Height (cm): <p class="pull-right"></p> </h5>
                 <h5> Weight (kg): <p class="pull-right"></p> </h5>
                 <h5> BMI : <p class="pull-right"></p> </h5>
                 <h5> Pulse Rate : <p class="pull-right"></p> </h5>
                 <h5> Respiratory Rate : <p class="pull-right"></p> </h5>
                 <h5> Body Temperature (c): <p class="pull-right"></p> </h5>
                 <h5> Blood Pressure : <p class="pull-right"></p> </h5>

                 <hr>

                 <strong><i class="fa fa-file-text-o margin-r-5"></i> Doctor's Notes</strong>
                 <p></p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
</div>

<div class="col-xs-9">
    
 <div class="panel panel-default">
  <div class="panel-body">  
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Messages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#try" role="tab">TRY</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane active" id="home" role="tabpanel">1</div>
      <div class="tab-pane" id="profile" role="tabpanel">2</div>
      <div class="tab-pane" id="messages" role="tabpanel">3</div>
      <div class="tab-pane" id="settings" role="tabpanel">4</div>
      <div class="tab-pane" id="try" role="tabpanel">5</div>
    </div>

  </div>
  </div>
</div>


</div> <!-- END ROW --> 


@stop