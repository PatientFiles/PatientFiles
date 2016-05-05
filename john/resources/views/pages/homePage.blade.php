@extends('layouts.masterLayout')



@section('content')

	<section class="content-header">
	          <h1>
	            Dashboard
	            <small>Patient Files</small>
	          </h1>
	          <ol class="breadcrumb">
	            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	         
	          </ol>
	</section>

<br>

  
       
        	<div class="row">  <!-- Start // ROW  -->
        		<div class="col-lg-6 col-xs-12  " >	 
        		<!-- FIRST TABLE  -->
        			

					<!-- TABLE RECENT CONSULTATION /  -->
                <div class="box table-hover table-responsive" >
                
                        <div class="box">
          
            <br>
              <div class="row"> 
                  <div class="box-header">
                      <div class="col-lg-6">
                         <h3 class="box-title" style="padding: 5px">Recent Consultation</h3>
                      </div> 
                  <div class="col-lg-6">  
                    <div class="input-group" >
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                      </span>
                    </div><!-- /input-group -->
                  </div>    
                  </div><!-- /.box-header -->
                  <br>
              </div> 
                
                
                <div class="box-body">
                  <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead>
                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Patient Name</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Procedure</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Observation</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Date</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Time</th></tr>
                    </thead>
                    <tbody>

                      
                    <tr role="row" class="odd">
                        <td class="sorting_1">Geckooooooooooooooooooooo</td>
                        <td>Firefox 1.ddddddddddddd0</td>
                        <td>Win 98+ / OdddddddddddSX.2+</td>
                        <td>1dddddddd.7</td>
                        <td>Addddddddddddddddddd</td>
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
                    
                  </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
                </div><!-- /.box-body -->
              </div>
                    
              </div>	
				</div>

				<div class="col-lg-6 col-xs-12 ">	 <!-- SECOND TABLE  -->
        			

					<!-- TABLE RECENT CONSULTATION /  -->
                    
                        <div class="box table-responsive">

               <br>
               <div class="row"> 
                  <div class="box-header">
                      <div class="col-lg-6">
                         <h3 class="box-title" style="padding: 5px">Recent Consultation</h3>
                      </div> 
                  <div class="col-lg-6">  
                    <div class="input-group" >
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                      </span>
                    </div><!-- /input-group -->
                  </div>    
                  </div><!-- /.box-header -->
                  <br>
              </div> 


                <div class="box-body">
                  <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead>
                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Patient ID</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Patient Name</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Age Group</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Procedure</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Time</th></tr>
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
                   
                  </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
                </div><!-- /.box-body -->
              </div>
                
						
              </div>		
				</div>

						

       

     


			
	
            
@stop