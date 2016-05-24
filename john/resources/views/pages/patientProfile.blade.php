@extends('layouts.masterLayout')


@section('title', 'Patient Profile | Patient Files')
@section('content')

        <section class="content-header">
          <h1>
           Patient Profile
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">User profile</li>
          </ol>
        </section>




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
                      <b>Patient ID</b> <a class="pull-right">{{$prof->id}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Nickname</b> <a class="pull-right">{{$prof->user->nickname}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Birth Date</b> <a class="pull-right">{{ $prof->user->birthdate }}</a>
                    </li>
                  </ul>

                  
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- About Me Box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Patient Info</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                      <strong><i class="fa fa-book margin-r-5"></i>  Vitals</strong>
                 <h5> Height (cm): <p class="pull-right">{{$recentVitals->height}}</p> </h5>
                 <h5> Weight (kg): <p class="pull-right">{{$recentVitals->weight}}</p> </h5>
                 <h5> BMI : <p class="pull-right">{{$bmi}}</p> </h5>
                 <h5> Pulse Rate : <p class="pull-right">{{$recentVitals->pulserate}}</p> </h5>
                 <h5> Respiratory Rate : <p class="pull-right">{{$recentVitals->respiratoryrate}}</p> </h5>
                 <h5> Body Temperature (c): <p class="pull-right">{{$recentVitals->bodytemperature}}</p> </h5>
                 <h5> Blood Pressure : <p class="pull-right">{{$recentVitals->bloodpressure_sys.'/'.$recentVitals->bloodpressure_dia}}</p> </h5>


                 <hr>

                 <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>
                 <p class="text-muted">{{$address}}</p>

                 <hr>

                 <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
                 <p>{{$recentVitals->notes}}</p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->






            <div class="col-md-9">  <!-- COLUMN FOR TABLES (TABS) -->
            
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#visits" data-toggle="tab">Visit</a></li>
                  <li><a href="#admission" data-toggle="tab">Admission</a></li>
                  <li><a href="#vitals" data-toggle="tab">Vitals</a></li>
                    <li><a href="#treatment" data-toggle="tab">Treatment Record</a></li>
                
                </ul>
                  
                  
            <div class=" tab-content">   <!-- START TAB CONTENT -->
               
                     <div class="active tab-pane" id="visits">  <!--  START OF VISITS TAB -->
          
                      <div class="panel panel-default" >
                          <div class="panel-body" >
                            <div class="row container-fluid" > 
                                
           
                      <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table data-toggle="table"
                       data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
                    
                       data-search="true"
                       data-show-refresh="true"
                       data-show-toggle="true"
                       data-show-columns="true" id="table2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                      <h3 class="box-title pull-left" >Visit History</h3> 
                      <thead>
                      <tr role="row">
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Consultation Date</th>
                      <th class="sorting_asc" tabindex="0" aria-controlsne: activate to sort column descending style="width: 177px;" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engi">Reason</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Subjective</th>
                      
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 152px;">Objective</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Assessment</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Plan</th>
                      
                    </thead>
                    <tbody>
                      @foreach ($consult as $appoint)
                          @if (! is_object($appoint->consultation))

                          @else
                          <tr role = "row">
                            <td><b>{{date('F d, Y', strtotime($appoint->appointment_date))}}</b></td>
                            <td>{{$appoint->chief_complaints}}</td>
                            <td>{{$appoint->consultation->subjective}}</td>
                            <td>{{$appoint->consultation->objective}}</td>
                            <td>{{$appoint->consultation->assessment}}</td>
                            <td>{{$appoint->consultation->plan}}</td>
                          
                          </tr>
                          @endif
                      @endforeach
                    </tbody>    

                

                  </table></div></div></div>
              
                                
                            </div>
                          </div>          
                      </div>    
                    
                </div><!-- END VISITS TAB -->
                    
                  
                <!-- START ADMISSION TAB -->
                        
                     <div class="tab-pane" id="admission">
          
                      <div class="panel panel-default" >
                          <div class="panel-body" >
                            <div class="row container-fluid" >  
                                
     
                      <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table data-toggle="table"
                       data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
                       data-search="true"
                       data-show-refresh="true"
                       data-show-toggle="true"
                       data-show-columns="true" id="table2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                      <h3 class="box-title pull-left" >Admission Record</h3> 
                      <thead>
                      <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controlsne: activate to sort column descending style="width: 177px;" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engi">Height</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Weight</th>
                      
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 152px;">Pulserate</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Respiratory</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Body Temperature</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Blood Presure</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Doctor Notes</th>
                      
                    </thead>

                

                  </table></div></div></div>
              
                                
                            </div>
                          </div>          
                      </div>    
                    
                </div><!-- END ADMISSION TAB -->
                    
               
                     <div class="tab-pane" id="vitals">
          
                      <div class="panel panel-default" >
                          <div class="panel-body" >
                            <div class="row container-fluid" >   
                                <div>@if(session('message'))
                            <p style="padding-top: 5px;color: white;background-color: red;font-style: italic;" class="alert alert-{{session ('message.type')}} form-control" >
                                    {{session('message.text')}}
                            </p>

                        @endif
                                     <input type="button" style="width: 200px" data-toggle="modal" data-target="#vitalsModal" class="btn btn-primary pull-right" value="Add Vitals" />
                                </div>
                        
              
             <!-- ADD VITALS MODAL -->
                             
                <div class="modal fade" id="vitalsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 style="color:white;" class="modal-title" id="myModalLabel">Add New Vital</h4>
                      </div>
                    
                      
                        
                      <form role="form" action="/saveVitals/{{$prof->id}}" method="POST">

                      <div class="modal-body">
                          {!! csrf_field() !!}
                        <div class="form-group">
                          <label for="number">Height:</label>
                          <input type="number" name="height" class="form-control" placeholder="Height in centimeters">
                        </div>
                        <div class="form-group">
                          <label for="number">Weight:</label>
                          <input type="number" name="weight" class="form-control" placeholder="Weight in kilograms">
                        </div>
                        <div class="form-group">
                          <label for="number">Pulse Rate:</label>
                          <input type="number" name="pulse" class="form-control" placeholder="Pulse Rate (Pulse per minute)">
                        </div>
                        <div class="form-group">
                          <label for="number">Respiratory Rate:</label>
                          <input type="number" name="respiratory" class="form-control" placeholder="Respiratory Rate">
                        </div>
                        <div class="form-group">
                          <label for="number">Body Temperature:</label>
                          <input type="number" name="temp" class="form-control" placeholder="Temperature in Celsius">
                        </div>
                        <div class="form-group">
                          <label for="number">Blood Pressure (Systolic):</label>
                          <input type="number" name="sys" class="form-control" placeholder="Systolic Value">
                        </div>
                        <div class="form-group">
                          <label for="number">Blood Pressure (Diastolic):</label>
                          <input type="number" name="dia" class="form-control" placeholder="Diastolic Value">
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="mens">Last Menstrual:</label>
                            <input style="z-index: 100000;" name="mens" type="text" name="idTourDateDetails" id="idTourDateDetails" readonly="readonly" class="form-control" placeholder="Click here to pick date of last menstruation">
                        </div>
                        <div class="form-group">
                          <label for="number">Doctor Notes:</label>
                          <input type="text" name="notes" class="form-control" placeholder="Doctors vital notes">
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="saveVitals" class="btn btn-primary">Save</button>
                      </div>
                     </form>
                      
                    </div>
                  </div>
                </div>  <!-- END VITALS MODAL -->
                      <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table data-toggle="table"
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
                    </tbody>
                    

                  </table></div></div></div>
              
                                
                            </div>
                          </div>          
                      </div>    
                    
                </div><!-- END VITALS TAB -->
                    
                  
                  
                  
              <!-- START TRATMENT MODAL -->
                
               
                     <div class="tab-pane" id="treatment">
          
                      <div class="panel panel-default" >
                          <div class="panel-body" >
                            <div class="row container-fluid" >   
                                <div>
                                     <input type="button" style="width: 200px" data-toggle="modal" data-target="#treatmentModal" class="btn btn-primary pull-right" value="Add New Treatment Plan" />
                                </div>
                    
             <!-- ADD TREATMENT MODAL -->
                             
                <div class="modal fade" id="treatmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 style="color:white;" class="modal-title" id="myModalLabel">New Treatment</h4>
                      </div>
                       <form role="form">
                      <div class="modal-body">



                        <div class="form-group" id="sandbox-container">
                          <label for="number">Date:</label>
                          <input type="number" class="form-control" placeholder="mm/dd/yyyy">
                        </div>
                        <div class="form-group">
                          <label for="number">Procedure:</label>
                          <input type="number" class="form-control" placeholder="Procedure">
                        </div>
                        <div class="form-group">
                          <label for="number">Remarks:</label>
                          <input type="number" class="form-control" placeholder="Remarks">
                        </div>
                        <div class="form-group">
                          <label for="number">Amount Charge :</label>
                          <input type="number" class="form-control" placeholder="00.00">
                        </div>
   
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Finish</button>
                      </div>
                           </form>
                      
                    </div>
                  </div>
                </div>  <!-- END TREATMENT MODAL -->
                                
                                
                                
                      <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table data-toggle="table"
                       data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
                       data-search="true"
                       data-show-refresh="true"
                       data-show-toggle="true"
                       data-show-columns="true" id="table2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                      <h3 class="box-title pull-left" >Treatment Record</h3> 
                      <thead>
                      <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controlsne: activate to sort column descending style="width: 177px;" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engi">Height</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Weight</th>
                      
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 152px;">Pulserate</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Respiratory</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Body Temperature</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Blood Presure</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Doctor Notes</th>
                      
                    </thead>

                

                  </table></div></div></div>
              
                                
                            </div>
                          </div>          
                      </div>    
                    
                </div><!-- END TREATMENT TAB --> 
                    
                    
                    
              </div><!-- END TAB CONTENT -->
            </div><!-- End NAV TABS -->
          </div><!-- /.row  col-lg-9  -->
            </div> <!-- END MAIN ROW -->
        </section><!-- /.content -->


@stop
