@extends('layouts.masterLayout')

@section('title', 'Visit Process | Pedix')
  <style type="text/css">


           /* ------------------------------------------------------------------- 

/* USER PROFILE PAGE */
 .card {
    margin-top: 20px;
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 1);
}
.card.hovercard .card-background {
    height: 130px;
}
.card-background img {
    -webkit-filter: blur(25px);
    -moz-filter: blur(25px);
    -o-filter: blur(25px);
    -ms-filter: blur(25px);
    filter: blur(25px);
    margin-left: -100px;
    margin-top: -200px;
    min-width: 130%;
}
.card.hovercard .useravatar {
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
}
.card.hovercard .useravatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}
.card.hovercard .card-info {
    position: absolute;
    bottom: 14px;
    left: 0;
    right: 0;
}
.card.hovercard .card-info .card-title {
    padding:0 5px;
    font-size: 20px;
    line-height: 1;
    color: #262626;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.card.hovercard .card-info {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.btn-pref .btn {
    -webkit-border-radius:0 !important;
}

      ---------------------------------------------------------------------*/
  </style>

<body class="sidebar-mini fixed  skin-purple pace-done sidebar-collapse">




@section('content')


                                                     <!-- Main content -->  


      @if(session('success'))
          <small style=" padding-top: 5px;color: white;background-color: red;font-style: italic;" class="box-title alert alert-{{session ('success.type')}} form-control" >
                                    {{session('success.text')}}
          </small>
      @endif

     
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="/img/prof_pic.png">
        </div>
        <div class="card-info"> <span class="card-title">John Benedict De Castro</span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Consultation</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Past Visits</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Basic Information</div>
            </button>
        </div>
    </div>

<div class="panel panel-default">
  <div class="panel-body">
     <div class="tab-content">
      
        <div class="tab-pane fade in active" id="tab1">
         
          <div id="vitals" > 
            <form role="form" action="/saveVitals/{{$prof->id}}" method="POST">   <!-- VITALS -->
                   <div class="container-fluid">
                      <h3>Vitals</h3>
          <a  href="#" class="btn btn-success">Past Vital</a>

                  </div>

                  <div>
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
             </form>  <!--END VItals -->   
            </div> 
                  <hr>
                    

                  <div id="prescription" class="row" > <!-- PRESCRIPTION -->
                         <div class="container-fluid">
                            <h3>Prescription</h3>
                        </div>    

                          <div class="col-lg-6">
                              <form action="/consultation/prescription" method="POST" id="prescription_submit">
                                <div class="row container-fluid">
                                   <div class="row container-fluid">
                                    <div class="col-lg-9" >
                                         <label>Medicine</label>  
                                             <select id="select_generic" class="demo-default"  placeholder="Medicine Name" name="select_generic" required>
                                                <option value disabled selected>None</option>
                                                @foreach ($medicine as $med)
                                                  <option value="{{$med['id']}}">{{$med['medicine_name']}}</option>
                                                @endforeach

                                            </select>
                                    </div>
                                     <div class="col-lg-3">
                                       <label>Quantity</label>
                                       <input class="form-control" type="number"  name="quantity" required/>
                                    </div>
                                    <div class="col-lg-12">
                                       <label>Sig</label>
                                       <input class="form-control" type="text" placeholder="Sig" name="sig" required />
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
                                 <a href="/printPrescription/{{Session::get('patient_appoint')}}" target="_blank" class="btn btn-primary "> Print Prescription</a>
                              </div>    
                          </div>
                        
                  </div>  <!-- END PRESCRIPTION -->
                         <hr>
                  <div id="diagnosis" class="row" > <!-- DIAGNOSIS -->
                         <div class="container-fluid">
                            <h3>Diagnosis</h3>
                        </div>
                        <div class="col-lg-6">
                          <form action="/consultation/diagnosis" method="POST" role="form" id="diagnosis_submit">
                            <div class="row container-fluid">
                                <div class="col-lg-12">
                                    <label for="number">Result</label>
                                    <textarea name="result" class="form-control" rows="5" placeholder="Result" type="text" required></textarea>
                                </div>
                                <div class="col-lg-12">
                                   <label>Remarks</label>
                                   <input class="form-control" type="text" name="remarks" placeholder="Remarks" />
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
                                  <div class="row container-fluid">
                                      <div class="col-lg-12">
                                          <label for="number">Assessment</label>
                                          <textarea disabled id="assessment" name="assessment" class="form-control" rows="5"></textarea>
                                      </div>
                                       </div>    
                                  </div>
                          </div>
                     
                    </div>  <!-- END DIAGNOSIS -->
                          <hr>
                    <div id="vaccination" class="row" >  <!-- VACCINATION -->
                       <div class="container-fluid">
                            <h3>Vaccination</h3>
                        </div>
                      <div class="col-lg-6">
                          <form action="/consultation/vaccination" method="POST" role="form" id="vac_submit">
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
                                   <input class="form-control" type="text" name="vac_date" id="vac_date" placeholder="Vaccination Date" required />
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
                                    <tbody id="vaccination_tbody">
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
                      </div>  <!-- END VACCINATION -->
                        
        </div> <!-- END TAB 1 -->






<div class="tab-pane fade in" id="tab2">

               <div>                  
                           @if(session('success'))
                            <small style=" padding-top: 5px;color: white;background-color: red;font-style: italic;" class="box-title alert alert-{{session ('success.type')}} form-control" >
                                    {{session('success.text')}}
                                  </small>
                              @endif
              </div>


              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  
                  <li class="active"> <a href="#vitals1" data-toggle="tab">Vitals Records</a></li>
                  <li><a href="#vaccine1" data-toggle="tab">Consultation Records</a></li>
                </ul>

            <div class=" tab-content">   <!-- START TAB CONTENT -->
                  
                <!-- START VITALS TAB -->
                     <div class="active tab-pane" id="vitals1">
                      <div class="panel panel-default" >
                          <div class="panel-body" >
                       

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
                      </tr>
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

                  </table>

                  
                  </div> 
                  </div>
                </div><!-- END VITALS TAB --> 




                <!-- START CONSULTATION TAB -->
                <div class="tab-pane" id="vaccine1">

                   <div >
                  <!-- search form (Optional) -->
          <form action="/searchResult" method="post" class="col-lg-4"  >
            <div class="input-group" style="margin-top: 8px" align="right">
              <input type="text" name="q" class="form-control" placeholder="Search..." required>
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
             </div>

               <div id="accordion" role="tablist" aria-multiselectable="true" style="padding: 65px">

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Date
        </a>
      </h4>
    </div>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      
               <div class="container-fluid"> <h3> Vaccine </h3> </div>  
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

                <div class="container-fluid"> <h3> Pescription </h3> </div>
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

                <div class="container-fluid"> <h3> Diagnosis </h3> </div>
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
                   

                 <div class="container-fluid"> <h3> Lab Request </h3> </div>
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
    </div>
   </div> <!-- END CONSULTATION TAB -->    
  </div> 
</div>
</div>  <!-- END TAB 2 -->



<div class="tab-pane fade in" id="tab3">
          <!-- ###########################################333 -->
          @if(session('message'))
                            <p style="padding-top: 5px;color: white;background-color: red;font-style: italic;" class="alert alert-{{session ('message.type')}} form-control" >
                                    {{session('message.text')}} <a href="/patientRecords" class="primary pull-right">Go to Patient List?</a>
                            </p>
                        @endif
<form role="form" method="POST" action="/edit_patient">
<div class="panel panel-default" > <!-- Start PANEL -->
 <div class="panel-body"> <!-- Start PANEL -->
  <h4 style="font-weight: bold;">Personal Information<small><i>&nbsp(Fields with <span style="color: red">*</span> are &nbsprequired)</i></small></h4>
  
  <br>
 <div class="row form-group">
  <input type="hidden" name="patient_id" class="form-control" placeholder="First Name" aria-describedby="basic-addon1" value="{{$prof->id}}" required>
  <div class="col-lg-3">
    <strong>First Name:<span style="color: red">*</span></strong>
    @if($errors->has('fname'))
            <span class="error" style="color: red">{{ $errors->first('fname') }}</span>
        @endif
    <input type="text" name="fname" class="form-control" placeholder="First Name" aria-describedby="basic-addon1" value="{{$prof->user->firstname}}" required>
    {{ csrf_field() }}
  </div>
  <div class="col-lg-3">
    <strong>Middle Name:</strong>
    @if($errors->has('mname'))
            <span class="error" style="color: red">{{ $errors->first('mname') }}</span>
        @endif
    <input type="text" name="mname" class="form-control" placeholder="Middle Name" aria-describedby="basic-addon1" value="{{$prof->user->middlename}}">
  </div>
  <div class="col-lg-3">
    <strong>Last Name:<span style="color: red">*</span></strong>
    @if($errors->has('lname'))
            <span class="error" style="color: red">{{ $errors->first('lname') }}</span>
        @endif
    <input type="text" name="lname" class="form-control" placeholder="Last Name" aria-describedby="basic-addon1" value="{{$prof->user->lastname}}" required>
  </div>
  <div class="col-lg-3">
    <strong>NickName:</strong>
    @if($errors->has('nickname'))
            <span class="error" style="color: red">{{ $errors->first('nickname') }}</span>
        @endif
    <input type="text" name="nickname" class="form-control" placeholder="Nickname" aria-describedby="basic-addon1" value="{{$prof->user->nickname}}">
  </div>
 </div>
 <div class="row form-group">
  <div id="sandbox-container" class="col-lg-6">
    <strong>Birthdate:<span style="color: red">*</span></strong>
    @if($errors->has('bdate'))
            <span class="error" style="color: red">{{ $errors->first('bdate') }}</span>
        @endif
      <input type="text" name="bdate" type="text" class="form-control" placeholder="Birth Date" value="{{$prof->user->birthdate}}" required />
  </div>
  <div class="col-lg-6">
    <strong>Gender:<span style="color: red">*</span></strong>
    @if($errors->has('gender'))
            <span class="error" style="color: red">{{ $errors->first('gender') }}</span>
        @endif
    <select class="form-control" name="gender" style="height: 34px; width:100%" required="">
      <option @if ($prof->user->gender == 'null') {{'selected="selected" disabled'}}@endif>Select Gender ...</option>
      <option value="1" @if ($prof->user->gender == '1') {{'selected="selected"'}}@endif>Male</option>
      <option value="0" @if ($prof->user->gender == '0') {{'selected="selected"'}}@endif>Female</option>
    </select>
  
  </div>
  
  
 </div>
 <div class="row form-group ">
  <div class="col-lg-6">
    <strong>Government Type ID:</strong>
    <select class="form-control" name="govt" style="height: 34px; width:100%">
    @if (! $prof->user->user_government_id)
      <option value disabled selected> Select Government Type ID</option>
      <option value="1 " > Driver's License</option>
        <option value="2 " > Postal ID</option>
        <option value="3 " > Social Security System (SSS ID)</option>
        <option value="4 " > Government Service Insurance System (GSIS ID)</option>
            <option value="5 " > Tax Identification Number (TIN ID)</option>
            <option value="6 " > Professional Regulation Commission (PRC ID)</option>
            <option value="7 " > National Statistics Office (NSO) Birth Certificate</option>
            <option value="8 " > Marriage Certificate (NSO Authenticated)</option>
            <option value="9 " > National Bureau of Investigation (NBI) Clearance</option>
        <option value="10" > Police Clearance</option>
            <option value="11" > Barangay Clearance/Certificate</option>
            <option value="12" > Senior Citizen's ID Card</option>
            <option value="13" > PhilHealth Identification Card (PIC)</option>
          <option value="14" > Alien Certificate of Registration (ACR I-Card)</option>
          <option value="15" > Consular ID</option>
          <option value="16" > Permit to Carry Firearms</option>
          <option value="17" > Passport</option>
          <option value="18" > Company/Office ID</option>
            <option value="19" > Student's ID or School ID</option>
        <option value="20" > OFW ID</option>
          <option value="21" > Seaman's Book</option>
            <option value="22" > Armed Forces of the Philippines (AFP) ID</option>
            <option value="23" > Home Development Mutual Fund (HMDF) or PAG-IBIG ID</option>
            <option value="24" > Philippine Overseas Employment Association (POEA) ID</option>
            <option value="25" > Certification from the National Council for the Welfare of Disabled Persons (NCWDP)</option>
            <option value="26" > PRA Special Resident Retiree Visa (SRRV) ID</option>
            <option value="27" > Department of Social Welfare and Development (DSWD) ID</option>
            <option value="28" > Overseas Worker's Welfare Administration (OWWA) ID</option>
            <option value="29" > Unified Multi-Purpose ID (UMID)</option>
            <option value="30" > Voter's ID</option>
    @else
      <option value="1 " @if ($prof->user->user_government_id->government_id_type_id == '1') {{'selected="selected"'}}@endif> Driver's License</option>
      <option value="2 " @if ($prof->user->user_government_id->government_id_type_id == '2') {{'selected="selected"'}}@endif> Postal ID</option>
      <option value="3 " @if ($prof->user->user_government_id->government_id_type_id == '3') {{'selected="selected"'}}@endif> Social Security System (SSS ID)</option>
      <option value="4 " @if ($prof->user->user_government_id->government_id_type_id == '4') {{'selected="selected"'}}@endif> Government Service Insurance System (GSIS ID)</option>
          <option value="5 " @if ($prof->user->user_government_id->government_id_type_id == '5') {{'selected="selected"'}}@endif> Tax Identification Number (TIN ID)</option>
          <option value="6 " @if ($prof->user->user_government_id->government_id_type_id == '6') {{'selected="selected"'}}@endif> Professional Regulation Commission (PRC ID)</option>
          <option value="7 " @if ($prof->user->user_government_id->government_id_type_id == '7') {{'selected="selected"'}}@endif> National Statistics Office (NSO) Birth Certificate</option>
          <option value="8 " @if ($prof->user->user_government_id->government_id_type_id == '8') {{'selected="selected"'}}@endif> Marriage Certificate (NSO Authenticated)</option>
          <option value="9 " @if ($prof->user->user_government_id->government_id_type_id == '9') {{'selected="selected"'}}@endif> National Bureau of Investigation (NBI) Clearance</option>
      <option value="10" @if ($prof->user->user_government_id->government_id_type_id == '10') {{'selected="selected"'}}@endif> Police Clearance</option>
          <option value="11" @if ($prof->user->user_government_id->government_id_type_id == '11') {{'selected="selected"'}}@endif> Barangay Clearance/Certificate</option>
          <option value="12" @if ($prof->user->user_government_id->government_id_type_id == '12') {{'selected="selected"'}}@endif> Senior Citizen's ID Card</option>
          <option value="13" @if ($prof->user->user_government_id->government_id_type_id == '13') {{'selected="selected"'}}@endif> PhilHealth Identification Card (PIC)</option>
        <option value="14" @if ($prof->user->user_government_id->government_id_type_id == '14') {{'selected="selected"'}}@endif> Alien Certificate of Registration (ACR I-Card)</option>
        <option value="15" @if ($prof->user->user_government_id->government_id_type_id == '15') {{'selected="selected"'}}@endif> Consular ID</option>
        <option value="16" @if ($prof->user->user_government_id->government_id_type_id == '16') {{'selected="selected"'}}@endif> Permit to Carry Firearms</option>
        <option value="17" @if ($prof->user->user_government_id->government_id_type_id == '17') {{'selected="selected"'}}@endif> Passport</option>
        <option value="18" @if ($prof->user->user_government_id->government_id_type_id == '18') {{'selected="selected"'}}@endif> Company/Office ID</option>
          <option value="19" @if ($prof->user->user_government_id->government_id_type_id == '19') {{'selected="selected"'}}@endif> Student's ID or School ID</option>
      <option value="20" @if ($prof->user->user_government_id->government_id_type_id == '20') {{'selected="selected"'}}@endif> OFW ID</option>
        <option value="21" @if ($prof->user->user_government_id->government_id_type_id == '21') {{'selected="selected"'}}@endif> Seaman's Book</option>
          <option value="22" @if ($prof->user->user_government_id->government_id_type_id == '22') {{'selected="selected"'}}@endif> Armed Forces of the Philippines (AFP) ID</option>
          <option value="23" @if ($prof->user->user_government_id->government_id_type_id == '23') {{'selected="selected"'}}@endif> Home Development Mutual Fund (HMDF) or PAG-IBIG ID</option>
          <option value="24" @if ($prof->user->user_government_id->government_id_type_id == '24') {{'selected="selected"'}}@endif> Philippine Overseas Employment Association (POEA) ID</option>
          <option value="25" @if ($prof->user->user_government_id->government_id_type_id == '25') {{'selected="selected"'}}@endif> Certification from the National Council for the Welfare of Disabled Persons (NCWDP)</option>
          <option value="26" @if ($prof->user->user_government_id->government_id_type_id == '26') {{'selected="selected"'}}@endif> PRA Special Resident Retiree Visa (SRRV) ID</option>
          <option value="27" @if ($prof->user->user_government_id->government_id_type_id == '27') {{'selected="selected"'}}@endif> Department of Social Welfare and Development (DSWD) ID</option>
          <option value="28" @if ($prof->user->user_government_id->government_id_type_id == '28') {{'selected="selected"'}}@endif> Overseas Worker's Welfare Administration (OWWA) ID</option>
          <option value="29" @if ($prof->user->user_government_id->government_id_type_id == '29') {{'selected="selected"'}}@endif> Unified Multi-Purpose ID (UMID)</option>
          <option value="30" @if ($prof->user->user_government_id->government_id_type_id == '30') {{'selected="selected"'}}@endif> Voter's ID</option>
          @endif
          </select>
  
  </div>
  
  <div class="col-lg-6">
    <strong>Government ID Number:</strong>
    @if($errors->has('govtnum'))
            <span class="error" style="color: red">{{ $errors->first('govtnum') }}</span>
        @endif
    <input type="text" name="govtnum" class="form-control" placeholder="Government ID Number" aria-describedby="basic-addon1" value="@if (! $prof->user->user_government_id){{''}}@else{{$prof->user->user_government_id->number}}@endif">
  </div>
  
</div>
 <div class="row form-group">
  
  <div class="col-lg-6">
    <strong>Religion:</strong>
    <select class="form-control" name="religion" style="height: 34px; width:100%">
      <option @if ($prof->user->user_religion == 'null') {{'value disabled selected'}}@endif>Religion</option>
      <option value="1" @if ($prof->user->user_religion == '1') {{'selected="selected"'}}@endif>Roman Catholic</option>
        <option value="2" @if ($prof->user->user_religion == '2') {{'selected="selected"'}}@endif>Christian</option>
        <option value="3" @if ($prof->user->user_religion == '3') {{'selected="selected"'}}@endif>Iglesia ni Cristo</option>
        <option value="4" @if ($prof->user->user_religion == '4') {{'selected="selected"'}}@endif>Mormon</option>
        <option value="5" @if ($prof->user->user_religion == '5') {{'selected="selected"'}}@endif>Muslim</option>
        <option value="6" @if ($prof->user->user_religion == '6') {{'selected="selected"'}}@endif>Buddhist</option>
        <option value="7" @if ($prof->user->user_religion == '7') {{'selected="selected"'}}@endif>Agnostic</option>
        <option value="8" @if ($prof->user->user_religion == '8') {{'selected="selected"'}}@endif>Others</option>
    </select>
  
  </div>
  
  
  </div>
<div >
  <hr>
  <h4 style="font-weight: bold;">Contact Informations</h4>
  <br>
</div>
<div class="row form-group">
  
  <div class="col-lg-5">
    <strong>Email Address: </strong>
    @if($errors->has('email'))
            <span class="error" style="color: red">{{ $errors->first('email') }}</span>
        @endif
    <input type="text" name="email" class="form-control" placeholder="Email Address" aria-describedby="basic-addon1" value="@if($prof->user->user_emails){{$prof->user->user_emails[0]->email}}@else{{''}}@endif">
  </div>
  <div class="col-lg-2">
    <strong>Phonenumber Type:</strong>
    <select  name="mobile_type" class="form-control" style="height: 34px; width:100%">
    @if (! $prof->user->user_phone_numbers)
      <option value selected disabled>This patient has no number</option>
      <option value="1">Mobile Number</option>
      <option value="2">Landline Number</option>
    @else
      <option value="1" @if ($prof->user->user_phone_numbers[0]->phone_number_type_id == '1') {{'selected="selected"'}}@endif >Mobile Number</option>
      <option value="2" @if ($prof->user->user_phone_numbers[0]->phone_number_type_id == '2') {{'selected="selected"'}}@endif >Landline Number</option>
    @endif
    </select>
  </div>
  <div class="col-lg-5">
    <strong>Phone Number:</strong>
    <input type="text" name="mobile_num" placeholder="Mobile Number Eg. 0935 123-1234" class="form-control" aria-describedby="basic-addon1" value="@if (! $prof->user->user_phone_numbers){{''}}@else {{$prof->user->user_phone_numbers[0]->number}}@endif">
  </div>
</div>
  
  <hr>
</div>
  <div class="container">
    <h4 style="font-weight: bold;">Emergency Contact Person</h4>
  </div>
<div class="row form-group container-fluid">
  
  <div class="col-lg-4">
    <strong>First Name:</strong>
    @if($errors->has('efname'))
            <span class="error" style="color: red">{{ $errors->first('efname') }}</span>
        @endif
    <input type="text" name="efname" class="form-control" placeholder="First Name" aria-describedby="basic-addon1" value="@if (! $prof->user->user_emergency_contacts){{''}}@else {{$prof->user->user_emergency_contacts[0]->firstname}}@endif">
  </div>
  <div class="col-lg-4">
    <strong>Middle Name:</strong>
    @if($errors->has('emname'))
            <span class="error" style="color: red">{{ $errors->first('emname') }}</span>
        @endif
    <input type="text" name="emname" class="form-control" placeholder="Middle Name" aria-describedby="basic-addon1" value="@if (! $prof->user->user_emergency_contacts){{''}}@else {{$prof->user->user_emergency_contacts[0]->middlename}}@endif">
  </div>
  <div class="col-lg-4">
    <strong>Last Name:</strong>
    @if($errors->has('elname'))
            <span class="error" style="color: red">{{ $errors->first('elname') }}</span>
        @endif
    <input type="text" name="elname" class="form-control" placeholder="Surname" aria-describedby="basic-addon1" value="@if(! $prof->user->user_emergency_contacts){{''}}@else {{$prof->user->user_emergency_contacts[0]->lastname}}@endif">
  </div>
  
</div>
<div class="row form-group container-fluid">
  
  <div class="col-lg-6">
    <strong>Emergency Contact Number: </strong>
    <input type="text" name="econtact"  placeholder="Mobile Number" class="form-control input-medium bfh-phone" data-format="dddd ddd-dddd" aria-describedby="basic-addon1" value="@if(! $prof->user->user_emergency_contacts){{''}}@elseif(! $prof->user->user_emergency_contacts[0]->emergency_phones){{''}} @else{{$prof->user->user_emergency_contacts[0]->emergency_phones[0]->contact_no}}@endif">
  </div>
  <div class="col-lg-6">
    <strong>Relationship: </strong>
    <select name="erelation" aria-invalid="false" class="form-control" style="height: 34px; width:100%">
    @if (! $prof->user->user_emergency_contacts)
      <option value disabled selected>Relationship</option>
            <option value="1">Father</option>
            <option value="2">Mother</option>
            <option value="3">Sibling</option>
            <option value="6">Guardian</option>
          @elseif (! $prof->user->user_emergency_contacts[0]->emergency_phones)
            <option value disabled selected>Relationship</option>
              <option value="1">Father</option>
              <option value="2">Mother</option>
              <option value="3">Sibling</option>
              <option value="6">Guardian</option> 
          @else
            <option @if ($prof->user->user_emergency_contacts[0]->emergency_phones[0]->emergency_relationship_id == '0') {{'value disabled selected'}}@endif>Relationship</option>
              <option value="1" @if ($prof->user->user_emergency_contacts[0]->emergency_phones[0]->emergency_relationship_id == '1') {{'selected="selected"'}}@endif>Father</option>
              <option value="2" @if ($prof->user->user_emergency_contacts[0]->emergency_phones[0]->emergency_relationship_id == '2') {{'selected="selected"'}}@endif>Mother</option>
              <option value="3" @if ($prof->user->user_emergency_contacts[0]->emergency_phones[0]->emergency_relationship_id == '3') {{'selected="selected"'}}@endif>Sibling</option>
              <option value="6" @if ($prof->user->user_emergency_contacts[0]->emergency_phones[0]->emergency_relationship_id == '6') {{'selected="selected"'}}@endif>Guardian</option>s
        @endif
            
        </select>
  </div>
  
</div>
<hr>
<div class="container">
  <h4 style="font-weight: bold;">Emergency Contact Person Address</h4>
</div>
  
<div class="row form-group container">    
    <div class="col-lg-8">
    <strong>Street:</strong>
      <input type="text" name="street" class="form-control" placeholder="Street" aria-describedby="basic-addon1" value="@if (! $prof->user->user_addresses){{''}}@else{{$prof->user->user_addresses[0]->street}}@endif">
    </div>  
</div>
<div class="row form-group container">
    
    <div class="col-lg-4">
    <strong>Barangay/District:</strong>
      <input type="text" name="brgy" class="form-control" placeholder="Barangay/District" aria-describedby="basic-addon1" value="@if (! $prof->user->user_addresses){{''}}@else{{$prof->user->user_addresses[0]->barangay}}@endif">
    </div>
    <div class="col-lg-4">
    <strong>City:</strong>
      <input type="text" name="city" class="form-control" placeholder="City" aria-describedby="basic-addon1" value="@if (! $prof->user->user_addresses){{''}}@else{{$prof->user->user_addresses[0]->municipality}}@endif">
    </div>
</div>
<div class="row form-group container">
    
    <div class="col-lg-4">
    <strong>Province:</strong>
      <input type="text" name="province" class="form-control" placeholder="Province" aria-describedby="basic-addon1" value="@if (! $prof->user->user_addresses){{''}}@else{{$prof->user->user_addresses[0]->province}}@endif">
    </div>
    <div class="col-lg-4">
    <strong>Zip Code:</strong>
    @if($errors->has('zip-code'))
            <span class="error" style="color: red">{{ $errors->first('zip-code') }}</span>
        @endif
      <input maxlength="4" type="text" name="zip_code" class="form-control" placeholder="Zip Code" aria-describedby="basic-addon1" value="@if (! $prof->user->user_addresses){{''}}@else{{$prof->user->user_addresses[0]->zip_code}}@endif">
    </div>
    
</div>
<hr>
<div class="row form-group container">
  <div class="col-lg-12 pull-right" style="float: right">
      <input type="submit" name="addPatient" id="addPatient" id="submit" value="Save Changes" class="btn btn-primary">
    </div>
</div>
</div> 

</form>

          <!-- #################################################### -->



</div> <!-- END TAB 3 -->




        </div> <!-- END TAB -->


      </div>

       <div class="panel-footer" style="padding-left: 33%">
          <a style="padding-left:23% ;padding-right: 23%" href="/end_visit" class="btn btn-success">END VISIT</a>
       </div>
     </div> 

        
 

@stop