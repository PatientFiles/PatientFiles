@extends('layouts.masterLayout')
@section('title', 'Analytics | Pedix')
@section('content')


<section class="content-header">
  <h1>
    Clinic Analytics
  </h1>
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

<div class="box box-default container-fluid" style="margin-top:20px">
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