@extends('layouts.masterLayout')




@section('title', 'Consultation | Pedix')
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
                  <h5 class="widget-user-desc">&nbsp &nbsp Patient</h5>
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
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" name="saveVitals" class="btn btn-primary">Save</button>
          </div>
         </form>
      </div>

      <div class="tab-pane" id="vaccine" role="tabpanel">2

      </div>

      <div class="tab-pane" id="prescription" role="tabpanel">


      <h3>Prescriptions</h3>
      <hr>
     <div class="row">

        <div class="col-lg-6">
      <form>

        <div class="row container-fluid">
            <div class="col-lg-4">
              <label>Generic</label>

                  <select id="select_generic"  multiple>
                
                  </select>
                 

            </div>
             <div class="col-lg-4">
               <label>Brand</label>

                <select id="select_brand" multiple>
                      
                  </select>

            </div>
             <div class="col-lg-2">
               <label>Dosage</label>
               <input class="form-control" type="text" placeholder="Dsg" />
            </div>
             <div class="col-lg-2">
               <label>Quantity</label>
               <input class="form-control" type="text" placeholder="Qty" />
            </div>
            <div class="col-lg-12">
               <label>Sig</label>
               <input class="form-control" type="text" placeholder="Sig" />
            </div>
             <div class="col-lg-4">
                <br>
               <input class="form-control btn btn-primary " value="Submit"   />

            </div>
        </div>

      </form>
      </div>

     <div class="col-lg-6">
      <div class="container-fluid">
            
        <table class="table table-hover table-responsive">
          <thead>
            <tr>
              <th>Generic Name</th>
              <th>Brand</th>
              <th>Dosage</th>
              <th>Quantity</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Bear Brand</td>
              <td>Bonakid</td>
              <td>500mg</td>
              <td>10pcs</td>
            </tr>
          </tbody>
        </table>
      
      </div>    
          <br><br>
          <a href="/pdf" target="_blank" class="btn btn-primary "> Create Prescription </a>
      </div>
      



  </div>


      </div>

      <div class="tab-pane" id="diagnosis" role="tabpanel">4

      </div>

      <div class="tab-pane" id="labrequest" role="tabpanel">5

      </div>
    </div>

  </div>
  </div>
</div>
</div>


</div> <!-- END ROW --> 




@stop