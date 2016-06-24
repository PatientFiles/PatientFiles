@extends('layouts.masterLayout')
@section('title', 'Patient Profile | Patient Files')
@section('content')
        <section class="content-header">
          <h1>
           Patient Profile
          </h1>
          <ol class="breadcrumb">
            @if ($consult == null)
              <a class="btn btn-primary" href="#"  data-toggle="modal" data-target="#newVisit">New Patient Visit</a>
            @endif
            @if (! $consult == null)
              <a class="btn btn-primary" href="#"  data-toggle="modal" data-target="#patientVisit">Patient Visit</a>
            @endif
          </ol>
        </section>
        <hr>
        <!--start visit modal-->
          <div id="newVisit" class="modal fade" role="dialog">
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
            <input type="hidden" name="patient_id" class="form-control" placeholder="Chief Complaint" aria-describedby="basic-addon1" value="{{ $prof->id }}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <input type="submit" class="btn btn-primary" value="Start Visit" />
        </div>
      </div>
    </form>
  </div>
</div>
<div id="patientVisit" class="modal fade" role="dialog">
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
                    <option value disabled selected>Select...</option>
                    <option value="2">Old Patient Consult</option>
                    <option value="3">Follow-up Consult</option>
             </select>
      </div>
      <div class="modal-body">
                  <strong>Chief Complaints<span style="color: red">*</span></strong>
                  @if($errors->has('chief_complaints'))
                          <span class="error" style="color: red">{{ $errors->first('chief_complaints') }}</span>
                      @endif
                    <input type="text" name="chief_complaints" class="form-control" placeholder="Chief Complaint" aria-describedby="basic-addon1" value="">                  
                    <input type="hidden" name="patient_id" class="form-control" placeholder="Chief Complaint" aria-describedby="basic-addon1" value="{{ $prof->id }}">
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-primary" value="Start Visit" />
      </div>
    </div>
</form>
  </div>
</div>
        <!--end visit modal-->
        <section class="content">
          <div class="row">
            <div class="col-md-3">
              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="/img/prof_pic.png" alt="User profile picture">
                  <h3 class="profile-username text-center">{{$prof->user->firstname." ".$prof->user->lastname}} </h3>
                  <p class="text-muted text-center">{{$prof->user->nickname}}</p>
                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Patient ID</b> <a class="pull-right badge bg-blue">{{$prof->id}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Nickname</b> <a class="pull-right badge bg-blue">{{$prof->user->nickname}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Birth Date</b> <a class="pull-right badge bg-blue">{{ $prof->user->birthdate }}</a>
                    </li>
                    <br>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              <!-- About Me Box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Patient Latest Vitals</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  @if ($recentVitals !== null)
                 <h5> <strong>Date Recorded:</strong> <p class="pull-right">{{date('F d, Y', strtotime($recentVitals->created_at))}}</p> </h5>
                 <h5> Height (cm): <p class="pull-right">{{$recentVitals->height}}</p> </h5>
                 <h5> Weight (kg): <p class="pull-right">{{$recentVitals->weight}}</p> </h5>
                 <h5> BMI : <p class="pull-right">{{$bmi}}</p> </h5>
                 <h5> Pulse Rate : <p class="pull-right">{{$recentVitals->pulserate}}</p> </h5>
                 <h5> Respiratory Rate : <p class="pull-right">{{$recentVitals->respiratoryrate}}</p> </h5>
                 <h5> Body Temperature (c): <p class="pull-right">{{$recentVitals->bodytemperature}}</p> </h5>
                 <h5> Blood Pressure : <p class="pull-right">{{$recentVitals->bloodpressure_sys.'/'.$recentVitals->bloodpressure_dia}}</p> </h5>
                 <hr>
                 <strong><i class="fa fa-file-text-o margin-r-5"></i> Doctor's Notes</strong>
                 <p>{{$recentVitals->notes}}</p>
                 @endif
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-9">  <!-- COLUMN FOR TABLES (TABS) -->
               <div >                  
                           @if(session('success'))
                            <small style=" padding-top: 5px;color: white;background-color: red;font-style: italic;" class="box-title alert alert-{{session ('success.type')}} form-control" >
                                    {{session('success.text')}}
                                  </small>
                              @endif
              </div>
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#vitals" data-toggle="tab">Vitals Records</a></li>
                  <li><a href="#vaccine" data-toggle="tab">Consultation Records</a></li>
                </ul>

            <div class=" tab-content">   <!-- START TAB CONTENT -->
                     
                <!-- START VITALS TAB -->
                     <div class="active tab-pane" id="vitals">
                      <div class="panel panel-default" >
                          <div class="panel-body" >
                            <div class="row container-fluid" >
                      <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12">
                      <table data-toggle="table"
                       data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
                       data-card-view="true"
                       data-search="true"
                       data-show-refresh="true"
                       data-show-toggle="true"
                       data-show-columns="true" id="table2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                      <h3 class="box-title pull-left" >Vitals Record</h3> 
                      <thead>
                      <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controlsne: activate to sort column descending style="width: 177px;" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engi">Date Recorded</th>
                      <th class="sorting_asc" tabindex="0" aria-controlsne: activate to sort column descending style="width: 177px;" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engi">Height</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Weight</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 152px;">Pulserate</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Respiratory</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Body Temperature</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Blood Presure</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Doctor Notes</th>
                    </thead>
                    <tbody>
                    @if($vitals !== null)
                      @foreach ($vitals as $vital)
                        <tr>
                          <td> <b>{{date('F d, Y', strtotime($vital->general->created_at))}} </b></td>
                           <td> {{$vital->general->height.' cm.'}} </td>
                           <td> {{$vital->general->weight.' kg.'}} </td>
                           <td> {{$vital->general->pulserate}} </td>
                           <td> {{$vital->general->respiratoryrate}} </td>
                           <td> {{$vital->general->bodytemperature}}&nbsp&deg c</td>
                           <td> {{$vital->general->bloodpressure_sys.'/'.$vital->general->bloodpressure_dia}} </td>
                           <td> {{$vital->general->notes}} </td>
                        </tr> 
                      @endforeach
                      @endif
                    </tbody>
                  </table></div></div></div>
                            </div>
                          </div>          
                      </div>    
                </div><!-- END VITALS TAB --> 


                <!-- START CONSULTATION TAB -->
                <div class="tab-pane" id="vaccine">
                <div id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Date
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="nav-tabs-custom">
<ul class="nav nav-pills">
  <li ><a class="nav-link" data-toggle="pill" href="#vaccinepill">Vaccine</a></li>
  <li ><a class="nav-link" data-toggle="pill" href="#prescriptionpill">Prescription</a></li>
  <li ><a class="nav-link" data-toggle="pill" href="#diagnosispill">Diagnosis</a></li>
  <li ><a class="nav-link" data-toggle="pill" href="#labpill">Lab Request</a></li>
</ul>
<div>
<div class=" tab-content">   <!-- START TAB CONTENT -->

          <div class=" tab-pane" id="vaccinepill">
                <table id="table_med"  data-toggle="table"
      data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
       id="example2" class="table table-bordered table-hover dataTable">
          <thead>
            <tr>
              <th>Vaccine Name</th>
              <th>Purpose</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>-</td>
              <td>-</td>
            </tr>
          </tbody>
        </table>
          </div>

           <div class=" tab-pane" id="prescriptionpill">
                <table id="table_med"  data-toggle="table"
      data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
       id="example2" class="table table-bordered table-hover dataTable">
          <thead>
            <tr>
              <th>Medicine Name</th>
              <th>Quantity</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>-</td>
              <td>-</td>
            </tr>
          </tbody>
        </table>
          </div>

           <div class=" tab-pane" id="diagnosispill">
                <table id="table_med"  data-toggle="table"
      data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
       id="example2" class="table table-bordered table-hover dataTable">
          <thead>
            <tr>
              <th>Result</th>
              <th>Remarks</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>-</td>
              <td>-</td>
            </tr>
          </tbody>
        </table>
          </div>

           <div class=" tab-pane" id="labpill">
                <table id="table_med"  data-toggle="table"
      data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
       id="example2" class="table table-bordered table-hover dataTable">
          <thead>
            <tr>
              <th>Type</th>
              <th>Remarks</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>-</td>
              <td>-</td>
            </tr>
          </tbody>
        </table>
          </div>


</div>  <!-- END TAB CONTENT -->
     </div>
    </div>
  </div>



 
</div> <!-- END CONSULTATION TAB -->

              </div><!-- END TAB CONTENT -->
            </div><!-- End NAV TABS -->
          </div><!-- /.row  col-lg-9  -->
            </div> <!-- END MAIN ROW -->
            </div>
            </div>
        </section><!-- /.content -->
@stop
