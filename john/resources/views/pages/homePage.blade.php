@extends('layouts.masterLayout')

@section('title', 'Dashboard | Patient Files')
@section('content')
<section class="content-header">
            <h1>
              Overview
            </h1>
            <ol class="breadcrumb">
             <a href="/register" style="color: white;font-weight: bold;" class="btn btn-success"> <span class="
glyphicon glyphicon-plus-sign"></span> Add Patient</a>        
            </ol>
  </section>

<hr>
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

<div class="box box-default container-fluid">
   <div class="box-header with-border">
                    <h3 class="box-title"><b>Clinic Analytics</b></h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                  </div>
           <div class="box-body chart-responsive">         
  <div class="row container-fluid">
          <p style="margin: 0 15px 10px;"><b>Patient Overview</b></p>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{$counts->totalPatients}}</h3>
                  <p >Registered Patients</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>{{$counts->avgPatientDaily}}</h3>
                  <p>Average Patient per Day </p>
                </div>
                <div class="icon">
                  <i class="ion ion-android-contact"></i>
                </div>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{{$counts->avgPatientAge}}</h3>
                  <p>Average Age of Patients </p>
                </div>
                <div class="icon">
                  <i class="ion ion-android-contacts"></i>
                </div>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>{{$counts->totalPractitioner}}</h3>
                  <p>Total Practitioners</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user-md"></i>
                </div>
              </div>
            </div><!-- ./col -->
          </div>
          <!-- DONUT CHART -->
            <div class="row container-fluid">
              <div class="col-xs-6">
                <div class=" box box-default">
                  <div class="box-header with-border">
                    <p><b>Services</b></p>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                  </div>
                  <div class="box-body chart-responsive">
                    <div class="chart" id="sales-chart2" style="height: 300px; position: relative;"></div>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div> 
               <div class="col-xs-6">
                <div class=" box box-default">
                  <div class="box-header with-border">
                    <p><b>Male to Female Patient Comparison</b></p>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                  </div>
                  <div class="box-body chart-responsive">
                    <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div>  
            </div>  
            
</div>
</div>
	<section class="content-header">
	          <h1>
	            What's Happening - {{date('F d, Y',strtotime($time))}}      
	          </h1>	       
	</section>
<br>
 <div class="panel panel-default"  >
  <div class="panel-body" >
        <div class="row container-fluid" >
        <form class="form-inline" style="padding: 0px 10px;">
          <div class="form-group"  style="float: right;padding-top: 13px">
          </div>
        </form>    
                <div class="box-body table-responsive" >
                  <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table class="table table-fixedheader table-bordered table-striped" id="table"  data-toggle="table"
       data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
       data-search="true"
       data-show-refresh="true"
       data-show-toggle="true"
       data-show-columns="true" id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                     <h4 class="pull-left">Reminders (Vaccination)</h4>
                     <thead>
                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Patient ID</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Patient Name</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Vaccine</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Date</th></tr>
                    </thead>
                    <tbody>
                      @foreach ($reminder as $remind)
                        <tr>
                              <td>{{$remind['patient_id']}}</td>
                              <td>{{$remind['patient_id']}}</td>
                              <td>{{$remind['vaccine']['vaccine_name']}}</td>
                              <td>{{date('F d,Y',strtotime($remind['date']))}}</td>
                        </tr>
                      @endforeach
                    </tbody>
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
       data-sort-name ="Checked In Date"
       data-sort-order ="desc"
       data-show-refresh="true"
       data-show-toggle="true"
       data-show-columns="true" id="table2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <h4 class="pull-left">Recent Visits by Each Patients</h4>
                    <thead >
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Patient ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Patient Name</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Chief Complaints</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Consultation Start</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Consultation End</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Status</th></tr>
                    </thead>
                    <tbody>
                      @foreach($consults as $consult)
                          @if (! $consult->patient_appointments)
                          @else
                            @if (strcasecmp($consult->patient_appointments[0]->type, 'consultation') == 0)
                              <tr role="row">
                                <td>{{$consult->id}}</td>
                                <td>{{$consult->user->firstname .' '. $consult->user->lastname}}</td>
                                <td>{{$consult->patient_appointments[0]->chief_complaints}}</td>
                                <td>{{$consult->patient_appointments[0]->consultation_start}}</td>
                                <td>{{$consult->patient_appointments[0]->consultation_end}}</td>
                                <td>{{$consult->patient_appointments[0]->status}}</td>
                              </tr>
                            @endif 
                          @endif
                      @endforeach
                    </tbody>
                  </table></div></div>
                  </div>
                </div><!-- /.box-body -->
            </div>
       </div>
</div>     
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="/plugins/morris/morris.min.js"></script>
 <script >
          var donut = new Morris.Donut({
          element: 'sales-chart2',
          resize: true,
          colors: ["#3c8dbc", "#f56954", "#05a65a", "#333"],
          data: [
            {label: "Consultations", value: {{$counts->totalConsultations}}},
            {label: "Laboratory", value: {{$counts->totalLaboratory}}},
            {label: "Imaging Processed", value: {{$counts->totalImaging}}}
          ],
          hideHover: 'auto'
        });
</script>
 <script >
          var male = {{$counts->totalMaleFemalePatient[0]->MALE}};
          var female = {{$counts->totalMaleFemalePatient[0]->FEMALE}};
          var total = male + female;
          var aveM =Math.round((male/total)*100);
          var aveF =Math.round((female/total)*100);
          var donut = new Morris.Donut({
          element: 'sales-chart',
          resize: true,
          colors: ["#00c0ef", "#ca87be", "#00a65a","#444"],
          data: [
            {label: "Male ("+aveM+"%)", value: {{$counts->totalMaleFemalePatient[0]->MALE}}},
            {label: "Female ("+aveF+"%)", value: {{$counts->totalMaleFemalePatient[0]->FEMALE}}},
          ],
          hideHover: 'auto'
        });
</script>
@stop