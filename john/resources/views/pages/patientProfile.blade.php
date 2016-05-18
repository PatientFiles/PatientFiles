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
                  <h5> Height : <p class="pull-right"> 172cm </p> </h5>
                  <h5> Weight : <p class="pull-right"> 50kg </p> </h5>

                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                  <p class="text-muted">Quezon City, Philippines</p>

                  <hr>

                  <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab">Visit</a></li>
                  <li><a href="#timeline" data-toggle="tab">Admission</a></li>
                  <li><a href="#settings" data-toggle="tab">Vitals</a></li>
                </ul>
                <div class="tab-content">
   <!--Visit-->
                  <div class="active tab-pane" id="activity">
                   

  <div class="panel panel-default" >
  <div class="panel-body" >
        <div class="row container-fluid" >
          
        <form class="form-inline" style="padding: 0px 10px;">
        
          <div class="form-group"  style="float: right;padding-top: 13px">
            
               

          </div>
        </form>    


                <div class="box-body table-responsive" >
                  <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table data-toggle="table"
       data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
       data-search="true"
       data-show-refresh="true"
       data-show-toggle="true"
       data-show-columns="true" id="table2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                      <h3 class="box-title pull-left" >Visits</h3> 
                      <thead>
                      <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controlsne: activate to sort column descending" style="width: 177px;="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engi">Date</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Time</th>
                      
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 152px;">Procedure</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Observation</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Tota Amount</th>
                      </tr>
                    </thead>
                      
                    </tbody>

                  </table></div></div></div>
                </div><!-- /.box-body -->
            </div>
       </div>
</div> 
                  </div><!-- /.tab-pane -->
    <!--Admission-->
                  <div class="tab-pane" id="timeline">
                  
  <div class="panel panel-default" >
  <div class="panel-body" >
        <div class="row container-fluid" >
          
        <form class="form-inline" style="padding: 0px 10px;">
         
          <div class="form-group"  style="float: right;padding-top: 13px">
            
             

          </div>
        </form>    


                <div class="box-body table-responsive" >
                  <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table data-toggle="table"
       data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
       data-search="true"
       data-show-refresh="true"
       data-show-toggle="true"
       data-show-columns="true" id="table2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        
                       <h3 class="box-title pull-left" >Admission History</h3> 
                      <thead>
                      <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controlsne: activate to sort column descending" style="width: 177px;="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engi">Date In</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Time In</th>
                      
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 152px;">Procedure</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Observation</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Time Out</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Date Out</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Action</th>
                      </tr>
                    </thead>

                      
                    </tbody>

                  </table></div></div></div>
                </div><!-- /.box-body -->
            </div>
       </div>
</div> 
                  </div><!-- /.tab-pane -->
    <!--Vitals-->

                  <div class="tab-pane" id="settings">
          
  <div class="panel panel-default" >
  <div class="panel-body" >
        <div class="row container-fluid" >
          
        <form class="form-inline" style="padding: 0px 10px;">
         
          <div class="form-group"  style="float: right;padding-top: 13px">
            
              

          </div>
        </form>    


                <div class="box-body table-responsive" >
                  <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table data-toggle="table"
       data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
       data-search="true"
       data-show-refresh="true"
       data-show-toggle="true"
       data-show-columns="true" id="table2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                      <h3 class="box-title pull-left" >Admission History</h3> 
                      <thead>
                      <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controlsne: activate to sort column descending" style="width: 177px;="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engi">Height</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Weight</th>
                      
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 152px;">Pulserate</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Respiratory</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Body Temperature</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Blood Presure</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Doctor Notes</th>
                      
                    </thead>

                     
                    </tbody>

                  </table></div></div></div>
                </div><!-- /.box-body -->
            </div>
       </div>
</div> 
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->

@stop