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









<div id="scheduler">
            <div id="calendar" class="fc fc-ltr fc-unthemed"><div class="fc-toolbar"><div class="fc-left"></div><div class="fc-right"></div><div class="fc-center"><h2>May 2016</h2></div><div class="fc-clear"></div></div><div class="fc-view-container"><div class="fc-view fc-month-view fc-basic-view"><table><thead><tr><td class="fc-widget-header"><div class="fc-row fc-widget-header"><table><thead><tr><th class="fc-day-header fc-widget-header fc-sun">Sun</th><th class="fc-day-header fc-widget-header fc-mon">Mon</th><th class="fc-day-header fc-widget-header fc-tue">Tue</th><th class="fc-day-header fc-widget-header fc-wed">Wed</th><th class="fc-day-header fc-widget-header fc-thu">Thu</th><th class="fc-day-header fc-widget-header fc-fri">Fri</th><th class="fc-day-header fc-widget-header fc-sat">Sat</th></tr></thead></table></div></td></tr></thead><tbody><tr><td class="fc-widget-content"><div class="fc-day-grid-container"><div class="fc-day-grid"><div class="fc-row fc-week fc-widget-content" style="height: 73px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past ui-selectable" data-date="2016-05-01"></td><td class="fc-day fc-widget-content fc-mon fc-past ui-selectable" data-date="2016-05-02"></td><td class="fc-day fc-widget-content fc-tue fc-past ui-selectable" data-date="2016-05-03"></td><td class="fc-day fc-widget-content fc-wed fc-past ui-selectable" data-date="2016-05-04"></td><td class="fc-day fc-widget-content fc-thu fc-past ui-selectable" data-date="2016-05-05"></td><td class="fc-day fc-widget-content fc-fri fc-past ui-selectable" data-date="2016-05-06"></td><td class="fc-day fc-widget-content fc-sat fc-past ui-selectable" data-date="2016-05-07"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2016-05-01">1</td><td class="fc-day-number fc-mon fc-past" data-date="2016-05-02">2</td><td class="fc-day-number fc-tue fc-past" data-date="2016-05-03">3</td><td class="fc-day-number fc-wed fc-past" data-date="2016-05-04">4</td><td class="fc-day-number fc-thu fc-past" data-date="2016-05-05">5</td><td class="fc-day-number fc-fri fc-past" data-date="2016-05-06">6</td><td class="fc-day-number fc-sat fc-past" data-date="2016-05-07">7</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 73px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past ui-selectable" data-date="2016-05-08"></td><td class="fc-day fc-widget-content fc-mon fc-past ui-selectable" data-date="2016-05-09"></td><td class="fc-day fc-widget-content fc-tue fc-past ui-selectable" data-date="2016-05-10"></td><td class="fc-day fc-widget-content fc-wed fc-past ui-selectable" data-date="2016-05-11"></td><td class="fc-day fc-widget-content fc-thu fc-today fc-state-highlight ui-selectable" data-date="2016-05-12"></td><td class="fc-day fc-widget-content fc-fri fc-future ui-selectable" data-date="2016-05-13"></td><td class="fc-day fc-widget-content fc-sat fc-future ui-selectable" data-date="2016-05-14"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2016-05-08">8</td><td class="fc-day-number fc-mon fc-past" data-date="2016-05-09">9</td><td class="fc-day-number fc-tue fc-past" data-date="2016-05-10">10</td><td class="fc-day-number fc-wed fc-past" data-date="2016-05-11">11</td><td class="fc-day-number fc-thu fc-today fc-state-highlight" data-date="2016-05-12">12</td><td class="fc-day-number fc-fri fc-future" data-date="2016-05-13">13</td><td class="fc-day-number fc-sat fc-future" data-date="2016-05-14">14</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#f0ad4e;border-color:#f0ad4e;color:#FFFFFF"><div class="fc-content"><span class="fc-time">2:29p</span> <span class="fc-title">Jb</span></div></a></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 73px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future ui-selectable" data-date="2016-05-15"></td><td class="fc-day fc-widget-content fc-mon fc-future ui-selectable" data-date="2016-05-16"></td><td class="fc-day fc-widget-content fc-tue fc-future ui-selectable" data-date="2016-05-17"></td><td class="fc-day fc-widget-content fc-wed fc-future ui-selectable" data-date="2016-05-18"></td><td class="fc-day fc-widget-content fc-thu fc-future ui-selectable" data-date="2016-05-19"></td><td class="fc-day fc-widget-content fc-fri fc-future ui-selectable" data-date="2016-05-20"></td><td class="fc-day fc-widget-content fc-sat fc-future ui-selectable" data-date="2016-05-21"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-future" data-date="2016-05-15">15</td><td class="fc-day-number fc-mon fc-future" data-date="2016-05-16">16</td><td class="fc-day-number fc-tue fc-future" data-date="2016-05-17">17</td><td class="fc-day-number fc-wed fc-future" data-date="2016-05-18">18</td><td class="fc-day-number fc-thu fc-future" data-date="2016-05-19">19</td><td class="fc-day-number fc-fri fc-future" data-date="2016-05-20">20</td><td class="fc-day-number fc-sat fc-future" data-date="2016-05-21">21</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 73px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future ui-selectable" data-date="2016-05-22"></td><td class="fc-day fc-widget-content fc-mon fc-future ui-selectable" data-date="2016-05-23"></td><td class="fc-day fc-widget-content fc-tue fc-future ui-selectable" data-date="2016-05-24"></td><td class="fc-day fc-widget-content fc-wed fc-future ui-selectable" data-date="2016-05-25"></td><td class="fc-day fc-widget-content fc-thu fc-future ui-selectable" data-date="2016-05-26"></td><td class="fc-day fc-widget-content fc-fri fc-future ui-selectable" data-date="2016-05-27"></td><td class="fc-day fc-widget-content fc-sat fc-future ui-selectable" data-date="2016-05-28"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-future" data-date="2016-05-22">22</td><td class="fc-day-number fc-mon fc-future" data-date="2016-05-23">23</td><td class="fc-day-number fc-tue fc-future" data-date="2016-05-24">24</td><td class="fc-day-number fc-wed fc-future" data-date="2016-05-25">25</td><td class="fc-day-number fc-thu fc-future" data-date="2016-05-26">26</td><td class="fc-day-number fc-fri fc-future" data-date="2016-05-27">27</td><td class="fc-day-number fc-sat fc-future" data-date="2016-05-28">28</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 73px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future ui-selectable" data-date="2016-05-29"></td><td class="fc-day fc-widget-content fc-mon fc-future ui-selectable" data-date="2016-05-30"></td><td class="fc-day fc-widget-content fc-tue fc-future ui-selectable" data-date="2016-05-31"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future ui-selectable" data-date="2016-06-01"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future ui-selectable" data-date="2016-06-02"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future ui-selectable" data-date="2016-06-03"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future ui-selectable" data-date="2016-06-04"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-future" data-date="2016-05-29">29</td><td class="fc-day-number fc-mon fc-future" data-date="2016-05-30">30</td><td class="fc-day-number fc-tue fc-future" data-date="2016-05-31">31</td><td class="fc-day-number fc-wed fc-other-month fc-future" data-date="2016-06-01">1</td><td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2016-06-02">2</td><td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2016-06-03">3</td><td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2016-06-04">4</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 74px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future ui-selectable" data-date="2016-06-05"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future ui-selectable" data-date="2016-06-06"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future ui-selectable" data-date="2016-06-07"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future ui-selectable" data-date="2016-06-08"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future ui-selectable" data-date="2016-06-09"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future ui-selectable" data-date="2016-06-10"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future ui-selectable" data-date="2016-06-11"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-other-month fc-future" data-date="2016-06-05">5</td><td class="fc-day-number fc-mon fc-other-month fc-future" data-date="2016-06-06">6</td><td class="fc-day-number fc-tue fc-other-month fc-future" data-date="2016-06-07">7</td><td class="fc-day-number fc-wed fc-other-month fc-future" data-date="2016-06-08">8</td><td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2016-06-09">9</td><td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2016-06-10">10</td><td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2016-06-11">11</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
          </div>

            
@stop