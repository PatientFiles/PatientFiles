@extends('layouts.masterLayout')



@section('content')


<h2>Overview</h2>


<!-- MODALS -->
<!-- Modal -->


<div class="modal modal-primary fade" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Modal Primary</h4>
                  </div>
                  <div class="modal-body">
                    <p>One fine body…</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline">Save changes</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div>

<div class="modal modal-success fade" id="myModal2">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Modal Primary</h4>
                  </div>
                  <div class="modal-body">
                    <p>One fine body…</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline">Save changes</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div>  
<div class="modal modal-warning fade" id="myModal3">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Modal Primary</h4>
                  </div>
                  <div class="modal-body">
                    <p>One fine body…</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline">Save changes</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div>                        
<div class="modal modal-danger fade" id="myModal4">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Modal Primary</h4>
                  </div>
                  <div class="modal-body">
                    <p>One fine body…</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline">Save changes</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div>  
<!-- END MODAL -->




<div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>150</h3>
                  <p>Medical Apparatus</p>
                </div>
                <div class="icon">
                  <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="#" class="small-box-footer " data-toggle="modal" data-target="#myModal">
                  More info <i class="fa fa-arrow-circle-right "></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>53,000</h3>
                  <p>Total Sales</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal2">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>44</h3>
                  <p>Patient Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal3">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>
                  <p>Patient Visits</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal4">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
          </div>



	<section class="content-header">
	          <h1>
	            What's Happening
	            <small>Patient Files</small>
	          </h1>
	          <ol class="breadcrumb">
	            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	         
	          </ol>
	</section>

<br>
 <div class="panel panel-default" >
  <div class="panel-body" >
        <div class="row container-fluid" >
          
        <form class="form-inline" style="padding: 0px 10px;">
          <div class="form-group">
                <h3 class="box-title" >Reminders</h3>
          </div>
          <div class="form-group"  style="float: right;padding-top: 13px">
            
               <div class="input-group" >
                      <input type="text" class="form-control" placeholder="Search for Reminders">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                      </span>
                    </div><!-- /input-group -->

          </div>
        </form>    


                <div class="box-body table-responsive" >
                  <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead>
                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Patient ID</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Patient Name</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Age Group</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Procedure</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Time</th></tr>
                    </thead>
                    <tbody>

                      <tr role="row" class="even">
                        <td class="sorting_1">PT13010231</td>
                        <td>Brey De Castro</td>
                        <td>Intermmediate</td>
                        <td>Checkup</td>
                        <td>08:29am</td>
                      </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1">PT13010231</td>
                        <td>Brey De Castro</td>
                        <td>Intermmediate</td>
                        <td>Checkup</td>
                        <td>08:29am</td>
                      </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1">PT13010231</td>
                        <td>Brey De Castro</td>
                        <td>Intermmediate</td>
                        <td>Checkup</td>
                        <td>08:29am</td>
                      </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1">PT13010231</td>
                        <td>Brey De Castro</td>
                        <td>Intermmediate</td>
                        <td>Checkup</td>
                        <td>08:29am</td>
                      </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1">PT13010231</td>
                        <td>Brey De Castro</td>
                        <td>Intermmediate</td>
                        <td>Checkup</td>
                        <td>08:29am</td>
                      </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1">PT13010231</td>
                        <td>Brey De Castro</td>
                        <td>Intermmediate</td>
                        <td>Checkup</td>
                        <td>08:29am</td>
                      </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1">PT13010231</td>
                        <td>Brey De Castro</td>
                        <td>Intermmediate</td>
                        <td>Checkup</td>
                        <td>08:29am</td>
                      </tr>
                  
                    



                      </tbody>
                  </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
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
          <div class="form-group">
                <h3 class="box-title" >Recent Consultation</h3>
          </div>
          <div class="form-group"  style="float: right;padding-top: 13px">
            
               <div class="input-group" >
                      <input type="text" class="form-control" placeholder="Search for Consultations">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                      </span>
                    </div><!-- /input-group -->

          </div>
        </form>    


                <div class="box-body table-responsive" >
                  <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead >
                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Patient Name</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Date</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Time</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Procedure</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Observation</th></tr>
                    </thead>
                    <tbody>

                      <tr role="row" class="even">
                        <td class="sorting_1">Brey De Castro</td>
                        <td>jan. 12 , 2016</td>
                        <td>11:30am</td>
                        <td>Checkup</td>
                        <td>Normal</td>
                      </tr>
                       <tr role="row" class="even">
                        <td class="sorting_1">Brey De Castro</td>
                        <td>jan. 12 , 2016</td>
                        <td>11:30am</td>
                        <td>Checkup</td>
                        <td>Normal</td>
                      </tr>
                       <tr role="row" class="even">
                        <td class="sorting_1">Brey De Castro</td>
                        <td>jan. 12 , 2016</td>
                        <td>11:30am</td>
                        <td>Checkup</td>
                        <td>Normal</td>
                      </tr>
                       <tr role="row" class="even">
                        <td class="sorting_1">Brey De Castro</td>
                        <td>jan. 12 , 2016</td>
                        <td>11:30am</td>
                        <td>Checkup</td>
                        <td>Normal</td>
                      </tr>
                       <tr role="row" class="even">
                        <td class="sorting_1">Brey De Castro</td>
                        <td>jan. 12 , 2016</td>
                        <td>11:30am</td>
                        <td>Checkup</td>
                        <td>Normal</td>
                      </tr>
                       <tr role="row" class="even">
                        <td class="sorting_1">Brey De Castro</td>
                        <td>jan. 12 , 2016</td>
                        <td>11:30am</td>
                        <td>Checkup</td>
                        <td>Normal</td>
                      </tr>
                       <tr role="row" class="even">
                        <td class="sorting_1">Brey De Castro</td>
                        <td>jan. 12 , 2016</td>
                        <td>11:30am</td>
                        <td>Checkup</td>
                        <td>Normal</td>
                      </tr>
                  
                    



                      </tbody>
                  </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
                </div><!-- /.box-body -->
            </div>
       </div>
</div>     











            
@stop