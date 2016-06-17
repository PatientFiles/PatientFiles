@extends('layouts.masterLayout')
@section('title', 'Consultation | Pedix')
@section('content')
<style type="text/css">
 .fixed-table-body {
   overflow-x: auto;
   overflow-y: auto;
   height: 350px;
}
</style>
<section class="content-header">
<input class="form-control" type="text" name="patient_id" id="patient_id" placeholder="Vaccination Date" value="{{$prof->id}}" />
<input class="form-control" type="text" name="appointment_id" id="appointment_id" value="{{Session::get('appoint')}}" />
          <h1>
           Consultation
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">consultation</a></li>
          </ol>
      </section>
      <hr>
      @if(session('success'))
          <small style=" padding-top: 5px;color: white;background-color: red;font-style: italic;" class="box-title alert alert-{{session ('success.type')}} form-control" >
                                    {{session('success.text')}}
          </small>
      @endif
<div class="row">
  <div class="col-lg-12">
      <!-- Widget: user widget style 1 -->
              <div class="box box-widget widget-user container">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-aqua-active row">
             <div class="col-lg-1 col-sm-12">
                <img class="img-circle" src="/img/prof_pic.png " alt="User profile picture" style="width: 90px" />
              </div>
              <div class="col-lg-4 col-sm-4">  
              <br>
                  <h3 class="widget-user-username">&nbsp {{$prof->user->firstname.' '.$prof->user->lastname}} </h3>
                  <h5 class="widget-user-desc">&nbsp &nbsp</h5>
              </div>    
                </div>
                <div class="box-footer" style="padding-top: 10px;">
                  <div class="row">
                    <div class="col-sm-4 border-right">
                      <div class="description-block">
                      @if ($prof->user->gender == 1)
                          <h5 class="description-header">Male</h5>
                        @else
                          <h5 class="description-header">Female</h5>
                      @endif
                        <span class="description-text">Gender</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-4 border-right">
                      <div class="description-block">
                        <h5 class="description-header">{{date('F d,Y',strtotime($prof->user->birthdate))}}</h5>
                        <span class="description-text">Birth Date</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-4">
                      <div class="description-block">
                          <a href="/end_visit" class="btn btn-info active">End Visit</a>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div>
              </div><!-- /.widget-user -->
</div>
<div class="col-lg-12 col-sm-12">  
 <div class="panel panel-default">
  <div class="panel-body">  
    <!-- Nav tabs -->
    <div class="nav-tabs-custom">
    <ul class="nav nav-tabs" role="tablist">
      <li class="active">
        <a data-toggle="tab" href="#vitals" role="tab">Vitals</a>
      </li>
      <li class="nav-item">
        <a data-toggle="tab" href="#vaccine" role="tab">Vaccine</a>
      </li>
      <li class="nav-item">
        <a data-toggle="tab" href="#prescription" role="tab">Prescription</a>
      </li>
      <li class="nav-item">
        <a data-toggle="tab" href="#diagnosis" role="tab">Diagnosis</a>
      </li>
       <li class="nav-item">
        <a data-toggle="tab" href="#labrequest" role="tab">Lab Request</a>
      </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane active" id="vitals" role="tabpanel">
          <form role="form" action="/saveVitals/{{$prof->id}}" method="POST">
          <div class="modal-body">
              {!! csrf_field() !!}
              <div class="row form-group">
                  <div class="col-lg-6">
                      <label for="number">Height:</label>
                      <input max="999" type="number" name="height" class="form-control" placeholder="Height in centimeters">
                  </div>
                  <div class="col-lg-6">
                      <label for="number">Weight:</label>
                      @if($errors->has('weight'))
                          <span class="error" style="color: red">{{ $errors->first('weight') }}</span>
                      @endif
                      <input max="999" type="number" name="weight" class="form-control" placeholder="Weight in kilograms">
                  </div>
              </div>
              <div class="row form-group">
                  <div class="col-lg-6">
                    <label for="number">Pulse Rate:</label>
                      @if($errors->has('pulse'))
                          <span class="error" style="color: red">{{ $errors->first('pulse') }}</span>
                      @endif
                    <input max="999" type="number" name="pulse" class="form-control" placeholder="Pulse Rate (Pulse per minute)">
                  </div>
                  <div class="col-lg-6">
                    <label for="number">Respiratory Rate:</label>
                      @if($errors->has('respiratory'))
                          <span class="error" style="color: red">{{ $errors->first('respiratory') }}</span>
                      @endif
                    <input max="999" type="number" name="respiratory" class="form-control" placeholder="Respiratory Rate">
                  </div>
              </div>
              <div class="row form-group">
                  <div class="col-lg-6">
                    <label for="number">Body Temperature:</label>
                      @if($errors->has('temp'))
                          <span class="error" style="color: red">{{ $errors->first('temp') }}</span>
                      @endif
                    <input max="999" type="number" name="temp" class="form-control" placeholder="Temperature in Celsius">
                  </div>
                  <div class="col-lg-6">
                    <label class="control-label" for="mens">Last Menstrual:</label>
                      @if($errors->has('mens'))
                          <span class="error" style="color: red">{{ $errors->first('mens') }}</span>
                      @endif
                      <div class="input-group">
                          <input name="mens" type="text" name="idTourDateDetails" id="idTourDateDetails" readonly="readonly" class="form-control" placeholder="Click here to pick date of last menstruation">
                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                      </div>
                  </div>
              </div>
              <div class="row form-group">
                  <div class="col-lg-6">
                    <label for="number">Blood Pressure (Systolic):</label>
                      @if($errors->has('sys'))
                          <span class="error" style="color: red">{{ $errors->first('sys') }}</span>
                      @endif
                    <input max="999" type="number" name="sys" class="form-control" placeholder="Systolic Value">
                  </div>
                  <div class="col-lg-6">
                    <label for="number">Blood Pressure (Diastolic):</label>
                      @if($errors->has('dia'))
                          <span class="error" style="color: red">{{ $errors->first('dia') }}</span>
                      @endif
                    <input max="999" type="number" name="dia" class="form-control" placeholder="Diastolic Value">
                  </div>
              </div>
              <div class="form-group">
                <label for="number">Doctor Notes:</label>
                      @if($errors->has('notes'))
                          <span class="error" style="color: red">{{ $errors->first('notes') }}</span>
                      @endif
                <textarea name="notes" class="form-control" rows="5" placeholder="Doctors vital notes"></textarea>
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" name="saveVitals" class="btn btn-primary pull-left">Save</button>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
          </div>
         </form>
      </div>
      <div class="tab-pane" id="vaccine" role="tabpanel">
         <h3>Vaccine</h3>
      <hr>
     <div class="row">
        <div class="col-lg-6">
      <form action="#" method="POST" role="form" id="vac_submit">
        <div class="row container-fluid">
            <div class="col-lg-6" >
                  <label>Vaccine Name</label>
                  <select id="select_vaccine" name="select_vaccine" class="demo-default" data-placeholder="Vaccine Name" required>
                    <option disabled selected value>None</option>

                    @foreach ($vaccine as $vac)
                    <option value="{{$vac['id']}}">{{$vac['vaccine_name']}}</option>
                    @endforeach

                  </select>
            </div>
            <div class="col-lg-6" id="sandbox-container" >
               <label>Vaccination Date </label>
               <input class="form-control" type="text" name="vac_date" id="vac_date" placeholder="Vaccination Date" />
            </div>
        </div>
           <div class="col-lg-4">  
           <br> 
           <br> 
             <input class="form-control btn btn-primary " value="Submit" type="submit"  />
          </div>
      </form>
      </div>
     <div class="col-lg-6">
      <div class="container-fluid">
           <br> 
        <table id="table_med"  data-toggle="table"
      data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
       id="example2" class="table table-bordered table-hover dataTable">
          <thead>
            <tr>
              <th>Vaccine Name</th>
              <th>Purpose</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Vaccine 101</td>
              <td>For H1N1 3 in 1P Plus 1</td>
              <td>Jun 13 , 2016</td>
              <td><span class="glyphicon glyphicon-trash"></span> <a href="#">Delete</a> </td>
            </tr>
          </tbody>
        </table>
      </div>    
      </div>
  </div>
</div>
      <div class="tab-pane" id="prescription" role="tabpanel">
       <h3>Prescriptions</h3>
      <hr>
     <div class="row">

        <div class="col-lg-6">
      <form>
        <div class="row container-fluid">
           <div class="row container-fluid">
            <div class="col-lg-9" >
                 <label>Medicine</label>  
                     <select id="select_generic"  placeholder="Medicine Name">
                        <option value disabled selected>None</option>
                        @foreach ($medicine as $med)
                          <option value="{{$med['id']}}">{{$med['medicine_name']}}</option>
                        @endforeach

                    </select>
            </div>
             <div class="col-lg-3">
               <label>Quantity</label>
               <input class="form-control" type="number"  />
            </div>
            <div class="col-lg-12">
               <label>Sig</label>
               <input class="form-control" type="text" placeholder="Sig" />
            </div>
             <div class="col-lg-4">
                <br>
               <input class="form-control btn btn-primary " value="Submit" type="submit"  />
            </div>
        </div>
      </div>
      </form>
      </div>
     <div class="col-lg-6">
      <div class="container-fluid">
     <table id="table_med"  data-toggle="table"
      data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
       id="example2" class="table table-bordered table-hover dataTable">
          <thead>
            <tr>
              <th>Medicine Name</th>
              <th>Quantity</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Bear Brand</td>
              <td>10pcs</td>
              <td><span class="glyphicon glyphicon-trash"></span> <a href="#">Delete</a> </td>
            </tr>
          </tbody>
        </table>
          <br>
          <br>
         <a href="/pdf" target="_blank" class="btn btn-primary "> Print Prescription</a>
      </div>    
      </div>
  </div>
</div>
      <div class="tab-pane" id="diagnosis" role="tabpanel">
         <h3>Diagnosis</h3>
      <hr>
     <div class="row">
        <div class="col-lg-6">
      <form>
        <div class="row container-fluid">
            <div class="col-lg-12">
                <label for="number">Result</label>
                <textarea name="notes" class="form-control" rows="5" placeholder="Result"></textarea>
            </div>
            <div class="col-lg-12">
               <label>Remarks</label>
               <input class="form-control" type="text" placeholder="Remarks" />
            </div>
            <div class="col-lg-4">
                <br>
               <input class="form-control btn btn-primary " value="Submit"  type="submit" />
            </div>
        </div>
      </form>
      </div>
     <div class="col-lg-6">
      <div class="container-fluid">           
        <form>
        <div class="row container-fluid">
            <div class="col-lg-12">
                <label for="number">Assessment</label>
                <textarea name="notes" class="form-control" rows="5"></textarea>
            </div>
             </div>    
      </form>
        </div>
      </div>
    </div>
  </div>     
    <div class="tab-pane" id="labrequest" role="tabpanel">
        <h3>Lab Request</h3>
      <hr>
     <div class="row">
        <div class="col-lg-6">
      <form>
        <div class="row container-fluid">
            <div class="col-lg-12" >
                  <label>Laboratory Type</label>
                  <select id="select_lab"  placeholder="Laboratory Type"> 
                  <option value disabled selected> None </option>
                  @foreach ($lab as $labs)
                    <option value="{{$labs['id']}}">{{$labs['lab_name']}}</option>
                  @endforeach
                  </select>
            </div>
            <div class="col-lg-12" >
               <label>Remarks</label>
               <input class="form-control" type="text" placeholder="Remarks" />
            </div>
             <div class="col-lg-4">
                <br>
               <input class="form-control btn btn-primary " value="Add" type="submit"  />
            </div>
        </div>
      </form>
      </div>
     <div class="col-lg-6">
      <div class="container-fluid">  
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
              <td><span class="glyphicon glyphicon-trash"></span> <a href="#">Delete</a> </td>
            </tr>
          </tbody>
        </table>
        </div>
        </div>
      </div>
    </div>        
 </div>
  </div>
  </div>
</div>
</div>
</div> <!-- END ROW --> 
@stop