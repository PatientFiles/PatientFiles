@extends('layouts.masterLayout')

@section('title', 'Dashboard | Pedix')
@section('content')
<section class="content-header">
    <div class="row">
            <span style="font-size:21px; padding-top: 5px;" class="col-lg-10">
              <b>What's Happening?</b> - {{date('F d, Y',strtotime($time))}}      
            </span>
      <div class="col-lg-2" align="right">
            <a href="/register" style="color: white;font-weight: bold;" class="btn btn-success"> 
                <span class="glyphicon glyphicon-plus-sign"></span> 
                Add Patient
            </a>
      </div>
    </div>      
</section>

   
@if(session('visit'))
  <small style=" padding-top: 5px;color: white;background-color: red;font-style: italic;" class="box-title alert alert-{{session ('visit.type')}} form-control" >
                            {{session('visit.text')}}
  </small>
@endif
@if(session('message'))
  <p style="padding-top: 5px;color: white;background-color: red;font-style: italic;" class="alert alert-{{session ('message.type')}} form-control" >
        {{session('message.text')}}
  </p>
@endif

<div class="panel panel-default"  style="margin-top:20px;">
<div class="panel-body" >
<div class="row container-fluid"> 
                <div class="box-body table-responsive">
                    <table  data-toggle="table"
       data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
       data-show-refresh="true"
       data-show-toggle="true"
       data-show-columns="true"
       data-sort-order="asc">
       <h4 class="pull-left"><b>Visit Queue</b></h4>
      <thead>
                      <tr role="row"><th data-sortable="true" class="th-inner sortable both asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 177px;">Queue Number</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Patient Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 205px;">Purpose</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 152px;">Chief Complaints</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 152px;">Action</th></tr>
                    </thead>
                     <tbody>
                      @foreach ($queue as $consult)
                          @if (! $consult->patient_appointments)

                          @else
                            @if ($consult->patient_appointments[count($consult->patient_appointments) - 1]->status == 'active')
                            <tr role="row" class="even">
                                  <td align="center"><b>{{$consult->patient_appointments[count($consult->patient_appointments) - 1]->id}}</b></td>
                                  <td>{{$consult->user->firstname .' '. $consult->user->lastname}}</td>
                                  @if ($consult->patient_appointments[count($consult->patient_appointments) - 1]->purpose_id == 1)
                                      <td>New Patient Visit</td>
                                  @endif
                                  @if ($consult->patient_appointments[count($consult->patient_appointments) - 1]->purpose_id == 2)
                                      <td>Old Patient Visit</td>
                                  @endif
                                  @if ($consult->patient_appointments[count($consult->patient_appointments) - 1]->purpose_id == 3)
                                      <td>Follow-up Visit</td>
                                  @endif
                                  <td>{{$consult->patient_appointments[count($consult->patient_appointments) - 1]->chief_complaints}}</td>
                                  <td><a href="/consultation/{{$consult->id}}" class="btn btn-primary">Start Visit</a></td>
                            </tr>
                            @else

                            @endif
                          @endif 
                      @endforeach          
                  </table>


                </div><!-- /.box-body -->
    </div>
</div>
</div>

<br>
 <div class="panel panel-default"  >
  <div class="panel-body" >
        <div class="row container-fluid" >
        <form class="form-inline" style="padding: 0px 10px;">
          <div class="form-group"  style="float: right;padding-top: 13px">
          </div>
        </form>    
                <div class="box-body table-responsive" >
                  <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12">
                  <table class="table table-fixedheader table-bordered table-striped" id="remind_table"  data-toggle="table"
                   data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
                   data-search="true"
                   data-show-refresh="true"
                   data-show-toggle="true"
                   data-show-columns="true" id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
          <h4 class="pull-left"><b>Reminders (Vaccination)</b></h4>
          <thead>
            <tr role="row">
                <th style="padding: 8px; line-height: 24px; vertical-align: top; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Patient ID</th>
                <th style="padding: 8px; line-height: 24px; vertical-align: top; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Patient Name</th>
                <th style="padding: 8px; line-height: 24px; vertical-align: top; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Vaccine</th>
                <th style="padding: 8px; line-height: 24px; vertical-align: top; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Action</th>
            </tr>
          </thead>
                    <tbody>
                      @foreach ($reminder as $remind)
                        <tr>
                              <td>{{$remind['patient_id']}}</td>
                              <td>{{$remind['patient_name']}}</td>
                              <td>{{$remind['vaccine']['vaccine_name']}}</td>
                              <td><a class="fModal btn btn-primary" href="#" data-toggle="modal" data-id="{{$remind['id']}}" data-patname="{{$remind['patient_name']}}" data-vaccinationname="{{$remind['vaccine']['vaccine_name']}}" data-target="#finishVacsConfirm"><span class="fa fa-check-square-o">&nbsp</span>Mark as Finish</a></td>
                        </tr>
                      @endforeach
                    </tbody>

                    <!--CONFIRM DELETE MODAL-->
                        <div id="finishVacsConfirm" data-name="" class="modal fade finishVacsConfirm" role="dialog">
                          <div class="modal-dialog">
                            <!-- Modal content-->
                              <div class="modal-content" >
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title" style="color: white">Finish Vaccination ?</h4>
                                </div>
                                <div class="modal-body">
                                   <b>Finish Vaccination for:</b> <span id="pat_name"></span><br>
                                   <b>Vaccine:</b> <span id="vaccination_name"></span>  
                                </div>
                                <div class="modal-footer">
                                  <a href="#" class="btn btn-primary finish_vac_button">Yes</a>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                </div>
                              </div>
                          </div>
                        </div>
                    <!--end modal-->

                  </table></div></div></div>
                </div><!-- /.box-body -->
            </div>
       </div>
</div>     
<hr>
<!-- SECOND Table -->
   <div class="panel panel-default" >
  <div class="panel-body" >
        <div class="row container-fluid" >    
        <form class="form-inline" style="padding: 0px 10px;">
          <div class="form-group"  style="float: right;padding-top: 13px">
          </div>
        </form>    
                <div class="box-body table-responsive" >
                  <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12">
                  <table class="table table-fixedheader table-bordered table-striped" id="table" data-toggle="table"
       data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
       data-search="true"
       data-pagination="true"
       data-sort-name ="Checked In Date"
       data-sort-order ="desc"
       data-show-refresh="true"
       data-show-toggle="true"
       data-show-columns="true" id="table2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <h4 class="pull-left"><b>Recent Visits by Each Patients</b></h4>
                    <thead >
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Date Visited</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Patient ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Patient Name</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Chief Complaints</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Status</th></tr>
                    </thead>
                    <tbody>
                      @foreach($consults as $consult)
                          @if (! $consult->patient_appointments)
                          @else
                              <tr role="row">
                                <td><b>{{date('F d, Y' ,strtotime($consult->patient_appointments[count($consult->patient_appointments) - 1]->appointment_date))}}</b></td>
                                <td>{{$consult->id}}</td>
                                <td>{{$consult->user->firstname .' '. $consult->user->lastname}}</td>
                                <td>{{$consult->patient_appointments[count($consult->patient_appointments) - 1]->chief_complaints}}</td>
                                <td>{{$consult->patient_appointments[count($consult->patient_appointments) - 1]->status}}</td>
                              </tr>
                          @endif
                      @endforeach
                    </tbody>
                  </table></div></div>
                  </div>
                </div><!-- /.box-body -->
            </div>
       </div>
</div>     
@stop