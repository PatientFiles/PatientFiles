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
                <label>Jb De Castro</label>
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
                      <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 177px;">Date</th>
                          
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Time</th>
                          
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 205px;">Procedure</th>
                          
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 152px;">Observetion</th>
                          
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Total Ammount</th></tr>
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

  <div class="tab-pane table-responsive" id="admission" > 
     <table class="table table-bordered table-hover ">
        <thead>      
            <th> Date Admitted </th>
            <th>Time in</th>
            <th> Procedure</th>
            <th> Observartion</th>
            <th> Time out</th>
            <th> Date out</th>
            <th> Payment Details</th>  
        </thead>
          
        <tbody>
                <tr>
                  <td>Jan. 21 , 2016</td>                 
                  <td>12:30 am</td>
                   <td>Tuli</td>
                    <td>Pogi</td>
                     <td>3:00pm</td>
                      <td>Jan. 2 , 2016</td>
                       <td style="text-align: center;"><button style="width: 90%" class="btn btn-primary">View Payment</button></td>
                </tr>
                
        </tbody>

    </table>
        
  </div>

<!-- / VITALS TAB -->

  <div class="tab-pane " id="vitals" > 
    <table class="table table-bordered table-hover ">
        <thead>      
            <th> Height </th>
            <th>Weight</th>
            <th> Pulse Rate</th>
            <th> Respiratory Rate</th>
            <th>Body Temperature</th>
            <th> Blood Pressure</th>
            <th>Doctors Note</th>  
        </thead>
          
        <tbody>
                <tr>
                  <td>Jan. 21 , 2016</td>                 
                  <td>12:30 am</td>
                   <td>Tuli</td>
                    <td>Pogi</td>
                     <td>3:00pm</td>
                      <td>Jan. 2 , 2016</td>
                       <td style="text-align: center;"><button style="width: 90%" class="btn btn-primary">View Payment</button></td>
                </tr>
                
        </tbody>

    </table>               


  </div>

         </div> <! End Tab Content -->


          </div>
        </div>
    



 
@stop