@extends('layouts.masterLayout')



@section('content')

<br>

<div class="container-fluid" >
	<div class="row">
		<div class="col-lg-4">
					
				<div class="container-fl">
				<div class="panel panel-default">
				  <div class="panel-body">
						 <div class="row" style="padding: 40px;">
							<div class="col-lg-12" align="center">
								<img src="img/prof_pic.png  " class="img-circle" style="box-shadow: 0 0 20px #D0D0D0;">	
										<hr>					
							</div>
					
							<div class="col-lg-12" style="text-align: center; font-size: 18px;">
								<label>John Benedict de Castro</label>
								<hr>						
							</div>
							<div class="col-lg-12">
								<label>Address:</label>	
								<p>Sandigan</p>					
							</div>
							<div class="col-lg-12">
								<label>Age:</label>	
								<p>14 years old</p>					
							</div>
							<div class="col-lg-12">
								<label>Age Group:</label>	
								<p>Infant</p>					
							</div>
							<div class="col-lg-12">
								<label>Birthday:</label>
								<p>November 1, 2002</p>						
							</div>
							<div class="col-lg-12">
								<label>Guardian:</label>
								<p>Mommy de Castro</p>						
							</div>
						 </div>
				  </div>
				</div>
			</div>	

		</div>

		<div class="col-lg-8">
			<div class="container-fl " >
				<div class="panel panel-default table-responsive">
				  <div class="panel-body">
						 <ul class="nav nav-tabs">
						  <li role="presentation" class="active"><a data-toggle="tab" href="#visits">Visits</a></li>
						  <li role="presentation"><a data-toggle="tab" href="#admission">Admissions</a></li>
						  <li role="presentation"><a data-toggle="tab" href="#vitals">Vitals</a></li>
						</ul>
				 <div class="tab-content"> <!--tab content -->

<! /VISITS TAB -->
	<div class="tab-pane active" id="visits"  > 
		<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Visits History</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 177px;">Rendering engine</th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Browser</th>
                          
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 205px;">Platform(s)</th>
                          
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 152px;">Engine version</th>
                          
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">CSS grade</th></tr>
                    </thead>
                    <tbody>
                    <tr role="row" class="odd">
                        <td class="sorting_1">Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                      </tr><tr role="row" class="even">
                        <td class="sorting_1">Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr><tr role="row" class="odd">
                        <td class="sorting_1">Gecko</td>
                        <td>Firefox 2.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr><tr role="row" class="even">
                        <td class="sorting_1">Gecko</td>
                        <td>Firefox 3.0</td>
                        <td>Win 2k+ / OSX.3+</td>
                        <td>1.9</td>
                        <td>A</td>
                      </tr><tr role="row" class="odd">
                        <td class="sorting_1">Gecko</td>
                        <td>Camino 1.0</td>
                        <td>OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr><tr role="row" class="even">
                        <td class="sorting_1">Gecko</td>
                        <td>Camino 1.5</td>
                        <td>OSX.3+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr><tr role="row" class="odd">
                        <td class="sorting_1">Gecko</td>
                        <td>Netscape 7.2</td>
                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                        <td>1.7</td>
                        <td>A</td>
                      </tr><tr role="row" class="even">
                        <td class="sorting_1">Gecko</td>
                        <td>Netscape Browser 8</td>
                        <td>Win 98SE+</td>
                        <td>1.7</td>
                        <td>A</td>
                      </tr><tr role="row" class="odd">
                        <td class="sorting_1">Gecko</td>
                        <td>Netscape Navigator 9</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr><tr role="row" class="even">
                        <td class="sorting_1">Gecko</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1</td>
                        <td>A</td>
                      </tr></tbody>
                    <tfoot>
                      <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                    </tfoot>
                  </table>
                  </div>
                  </div>
                  <div class="row">
                  	<div class="col-sm-5">
                  		<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
                  	</div>
                  </div>
                  <div class="col-sm-7">
                  	<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                  		<ul class="pagination">
                  			<li class="paginate_button previous disabled" id="example1_previous">
                  				<a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>
                  			</li>
                  			<li class="paginate_button active">
                  				<a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>
                  			</li>
                  			<li class="paginate_button ">
                  				<a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a>
                  			</li>
                  			<li class="paginate_button ">
                  				<a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a>
                  			</li>
                  			<li class="paginate_button ">
                  				<a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a>
                  			</li>
                  			<li class="paginate_button ">
                  				<a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a>
                  			</li>
                  			<li class="paginate_button ">
                  				<a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a>
                  			</li>
                  			<li class="paginate_button next" id="example1_next">
                  				<a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a>
                  			</li>
                  		</ul>
                  	</div>
                  </div>
                  </div>
                  </div>
                </div><!-- /.box-body -->
              </div>	
				 	</div>
<!-- ADMISSION TAB -->

	<div class="tab-pane " id="admission" > 
		<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Admission History</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 177px;">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Browser</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 205px;">Platform(s)</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 152px;">Engine version</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">CSS grade</th></tr>
                    </thead>
                    <tbody>
                    <tr role="row" class="odd">
                        <td class="sorting_1">Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                      </tr><tr role="row" class="even">
                        <td class="sorting_1">Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr><tr role="row" class="odd">
                        <td class="sorting_1">Gecko</td>
                        <td>Firefox 2.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr><tr role="row" class="even">
                        <td class="sorting_1">Gecko</td>
                        <td>Firefox 3.0</td>
                        <td>Win 2k+ / OSX.3+</td>
                        <td>1.9</td>
                        <td>A</td>
                      </tr><tr role="row" class="odd">
                        <td class="sorting_1">Gecko</td>
                        <td>Camino 1.0</td>
                        <td>OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr><tr role="row" class="even">
                        <td class="sorting_1">Gecko</td>
                        <td>Camino 1.5</td>
                        <td>OSX.3+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr><tr role="row" class="odd">
                        <td class="sorting_1">Gecko</td>
                        <td>Netscape 7.2</td>
                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                        <td>1.7</td>
                        <td>A</td>
                      </tr><tr role="row" class="even">
                        <td class="sorting_1">Gecko</td>
                        <td>Netscape Browser 8</td>
                        <td>Win 98SE+</td>
                        <td>1.7</td>
                        <td>A</td>
                      </tr><tr role="row" class="odd">
                        <td class="sorting_1">Gecko</td>
                        <td>Netscape Navigator 9</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr><tr role="row" class="even">
                        <td class="sorting_1">Gecko</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1</td>
                        <td>A</td>
                      </tr></tbody>
                    <tfoot>
                      <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                    </tfoot>
                  </table>
                  </div>
                  </div>
                  <div class="row">
                  	<div class="col-sm-5">
                  		<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
                  	</div>
                  </div>
                  <div class="col-sm-7">
                  	<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                  		<ul class="pagination">
                  			<li class="paginate_button previous disabled" id="example1_previous">
                  				<a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>
                  			</li>
                  			<li class="paginate_button active">
                  				<a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>
                  			</li>
                  			<li class="paginate_button ">
                  				<a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a>
                  			</li>
                  			<li class="paginate_button ">
                  				<a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a>
                  			</li>
                  			<li class="paginate_button ">
                  				<a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a>
                  			</li>
                  			<li class="paginate_button ">
                  				<a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a>
                  			</li>
                  			<li class="paginate_button ">
                  				<a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a>
                  			</li>
                  			<li class="paginate_button next" id="example1_next">
                  				<a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a>
                  			</li>
                  		</ul>
                  	</div>
                  </div>
                  </div>
                  </div>
                </div><!-- /.box-body -->
              </div>		
	</div>

<!-- / VITALS TAB -->

	           <div class="tab-pane " id="vitals" > 
		             
                      <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
   
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Layout Options</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                <li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
              </ul>
            </li>
            <li>
              <a href="../widgets.html">
                <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Charts</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                <li class=""><a href="morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                <li><a href="flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                <li><a href="inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>UI Elements</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
              </ul>
            </li>
            <li>
              <a href="../calendar.html">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
                <small class="label pull-right bg-red">3</small>
              </a>
            </li>
            <li>
              <a href="../mailbox/mailbox.html">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Examples</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <li><a href="../examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                <li><a href="../examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                <li><a href="../examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                <li><a href="../examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                <li><a href="../examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                <li><a href="../examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                <li><a href="../examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li>
            <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            
          </ul>
        </section>
        <!-- /.sidebar -->
     
              </div>	
	</div>

				 </div>	<! End Tab Content -->


				  </div>
				</div>
			</div>	

		</div>
	</div>



 
@stop