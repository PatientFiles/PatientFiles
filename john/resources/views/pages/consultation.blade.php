@extends('layouts.masterLayout')

@section('title', 'Dashboard | Pedix')
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
  <h3>Consultation </h3>


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
            <img alt="" src="http://lorempixel.com/100/100/people/9/">
        </div>
        <div class="card-info"> <span class="card-title">Pamela Anderson</span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Stars</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Favorites</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Following</div>
            </button>
        </div>
    </div>


     <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
         
          <div id="vitals" style="background-color: lightblue;height: 600px"> 
            <form role="form" action="/saveVitals/{{$prof->id}}" method="POST">   <!-- VITALS -->
                   <div class="container-fluid">
                      <h3>Vitals</h3>
                  </div>

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
             </form>  <!--END VItals -->
            
            </div> 
                     
                  <div id="prescription" class="row" style="background-color: lightgreen; height: 600px"> <!-- PRESCRIPTION -->
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
                          <hr>
                  </div>  <!-- END PRESCRIPTION -->
                        
                  <div id="diagnosis" class="row" style="background-color: lightblue; height: 600px"> <!-- DIAGNOSIS -->
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
                             <hr>
                    </div>  <!-- END DIAGNOSIS -->
                         
                    <div id="vaccination" class="row" style="background-color: lightgreen; height: 600px">  <!-- VACCINATION -->
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
                          <a href="/end_visit" class="btn btn-primary"> END VISIT</a>
        </div>

           
        <div class="tab-pane fade in" id="tab2">
          <h3>This is tab 2</h3>
        </div>
          
        <div class="tab-pane fade in" id="tab3">
          <h3>This is tab 3</h3>
        </div>
      </div>
   


@stop