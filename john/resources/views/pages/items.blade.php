@extends('layouts.masterLayout')



@section('title', 'Maintenance | Pedix')

@section('content')
 <style type="text/css">
  .fixed-table-body {
    overflow-x: auto;
    overflow-y: auto;
    height: 300px;
}


</style>
<section class="content-header">
          <h1>
          Maintenance
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Maintenance</a></li>
          </ol>
      </section>
  

  <div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="panel panel-default">
          <div class="panel-body">  
                          <!-- Nav tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="active">
                    <a data-toggle="tab" href="#medicine" role="tab">Add Medicine</a>
                  </li>
                  <li class="nav-item">
                    <a data-toggle="tab" href="#vaccine" role="tab">Add Vaccine</a>
                  </li>
                  <li class="nav-item">
                    <a data-toggle="tab" href="#lab" role="tab">Laboratory Packages</a>
                  </li>
                </ul>

 <!-- Tab panes -->
             <div class="tab-content">
                  <div class="tab-pane active" id="medicine" role="tabpanel">
                    <h3>Medicine</h3>
                  <hr>
                 <div class="row">

                    <div class="col-lg-6">
                  <form id="medicine_form" method="POST" action="/items/add_medicine">

                    <div class="row container-fluid">
                        <div class="col-lg-12">
                           <label>Medicine Name</label>
                           {!! csrf_field() !!}
                           <input id="medicine_name" class="form-control" name="medicine_name" type="text" placeholder="Medicine Name" required/>
                        </div>
                         <div class="col-lg-4">
                            <br>
                           <input class="form-control btn btn-primary " type="submit" value="Add"   />
                                   <!-- <script>
                                      jQuery( document ).ready( function() {
                                            $( '#medicine_form' ).on( 'submit', function(e) {
                                              e.preventDefault(); 
                                            var data = $(this).serialize();
                                            $.ajax({
                                                  type: "POST",
                                                  url: '/items/add_medicine',
                                                  data: data,
                                                  success: function(msg,status) {
                                                      alert('Medicine successfully added!');
                                                      $("#medicine_form")[0].reset();
                                                  }
                                              }); 
                                         });
                                      });

                                      $(document).ready( function() {
                                          var medicine_table = $('#medicine_table');
                                          var url            = '/items/medicine_table';

                                          $.get(url, function(res){
                                            $(res).each(function(key,value){
                                              medicine_table.append("<tr><td></td></tr>");
                                            });
                                          };
                                      });
                                    </script>-->
                        </div>
                    </div>

                  </form>
                  </div>

                 <div class="col-lg-6">
                  <div class="container-fluid">
                    <label>List of Medicine</label>
                    <table id="table_med"  data-toggle="table"
       data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
        id="example2" class="table table-bordered table-hover dataTable" >
                      <thead>
                        <tr>
                          <th style="text-align: center;">Medicine Name</th>
                          <th style="text-align: center;">Action</th>
                        </tr>
                      </thead>
                      <tbody id="medicine_body">
                      @foreach ($medicine as $med)
                        <tr>
                          <td align="center">{{$med['medicine_name']}}</td>
                          <td align="center"> <a href="#"> <span class="glyphicon glyphicon-edit"></span> &nbsp </a>| <a href="#"> &nbsp <span class="glyphicon glyphicon-trash"> </span> </a></td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  
                  </div>    
                      <br><br>
                     
                  </div>

                     </div>
                   </div>

                   <div class="tab-pane" id="vaccine" role="tabpanel">
                            <h3>Vaccine</h3>
                          <hr>
                         <div class="row">

                            <div class="col-lg-6">
                          <form id="vaccine_form" method="POST" action="/items/add_vaccine">

                            <div class="row container-fluid">
                                <div class="col-lg-6">
                                   <label>Vaccine Name</label>
                                   <input class="form-control" type="text" name="vaccine_name" id="vaccine_name" placeholder="Vaccine Name" required/>
                                </div>

                                <div  class="col-lg-6">
                                  <label>Vaccine Purpose</label>
                                    <input type="text" name="vaccine_for" id="vaccine_for" type="text" class="form-control" placeholder="Vaccinate Purpose" required />
                                </div>

                                <div class="col-lg-12">
                                  <br>
                                   <label>Vaccine Schedule</label>
                                   <input class="form-control" name="schedule" id="schedule" type="text" placeholder="Vaccine Schedule" required/>
                                </div>

                                  <div class="container col-lg-12">
                                  <br>
                                    <input type="submit" class="btn btn-primary" value="Add Vaccine" />
                                    <script>            
                                      jQuery( document ).ready( function() {
                                            $( '#vaccine_form' ).on( 'submit', function(e) {
                                              e.preventDefault(); 
                                            var data = $(this).serialize();
                                            var name = $('#vaccine_name').val();
                                            var v_for = $('#vaccine_for').val();
                                            var sched = $('#schedule').val();
                                            $.ajax({
                                                  type: "POST",
                                                  url: '/items/add_vaccine',
                                                  data: data,
                                                  success: function(msg,status) {
                                                      toastr.options.positionClass = 'toast-bottom-center';
                                                      toastr.options.showMethod        = 'slideDown';
                                                      toastr.options.hideMethod        = 'slideUp';
                                                      toastr.success('Vaccine successfully added!');
                                                      $("#vaccine_form")[0].reset();
                                                      $('#vac_body').append('<tr><td>'+name+'</td><td>'+v_for+'</td><td>'+sched+'</td><td align="center"> <a href="#"> <span class="glyphicon glyphicon-edit"></span> &nbsp </a>| <a href="#"> &nbsp <span class="glyphicon glyphicon-trash"> </span> </a></td></tr>');
                                                  }
                                              }); 
                                         });
                                      });
                                    </script>
                                  </div>
                            </div>
                          </form>
                          </div>
                         <div class="col-lg-6">
                          <div class="container-fluid">
                                <br>
                            <table id="table_med"  data-toggle="table"
       data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
        id="example2" class="table table-bordered table-hover dataTable"  >
                              <thead>
                                <tr>
                                  <th>Vaccine Name</th>
                                  <th>Purpose</th>
                                  <th>Schedule</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody id="vac_body">
                              @foreach ($vaccine as $vac)
                                <tr>
                                  <td>{{$vac['vaccine_name']}}</td>
                                  <td>{{$vac['vaccine_for']}}</td>
                                  <td>{{$vac['schedule']}}</td>
                                  <td align="center"> <a href="#"> <span class="glyphicon glyphicon-edit"></span> &nbsp </a>| <a href="#"> &nbsp <span class="glyphicon glyphicon-trash"> </span> </a></td>
                                </tr>
                              @endforeach
                              </tbody>
                            </table>
                          
                          </div>    
                              <br><br>
                     
                          </div>

                             </div>
                     </div>


                     <div class="tab-pane" id="lab" role="tabpanel">
                            <h3>Laboratory types</h3>
                          <hr>
                                 <div class="row">

                            <div class="col-lg-6">
                          <form action="/items/add_lab" method="POST" id="lab_form">

                            <div class="row container-fluid">
                                <div class="col-lg-12">
                                   <label>Laboratory Package</label>
                                   <input class="form-control" name="lab_name" id="lab_name" type="text" placeholder="Lab Package" />
                                </div>
                                <div class="col-lg-12">
                                  <br>
                                   <label>Description</label>
                                   <input class="form-control" name="lab_desc" id="lab_desc" type="text" placeholder="Description" />
                                </div>
                                 <div class="col-lg-6">
                                    <br>
                                   <input class="form-control btn btn-primary " type="submit" value="Add Laboratory Package"   />
                                   <script>            
                                      jQuery( document ).ready( function() {
                                            $( '#lab_form' ).on( 'submit', function(e) {
                                              e.preventDefault(); 
                                            var data = $(this).serialize();
                                            var lab_name = $('#lab_name').val();
                                            var lab_desc = $('#lab_desc').val();
                                            $.ajax({
                                                  type: "POST",
                                                  url: '/items/add_lab',
                                                  data: data,
                                                  success: function(msg,status) {
                                                      toastr.options.positionClass = 'toast-bottom-center';
                                                      toastr.options.showMethod        = 'slideDown';
                                                      toastr.options.hideMethod        = 'slideUp';
                                                      toastr.success('Laboratory package successfully added');
                                                      $("#lab_form")[0].reset();
                                                      $('#lab_body').append('<tr><td>'+lab_name+'</td><td>'+lab_desc+'</td><td align="center"> <a href="#"> <span class="glyphicon glyphicon-edit"></span> &nbsp </a>| <a href="#"> &nbsp <span class="glyphicon glyphicon-trash"> </span> </a></td></tr>');
                                                  }
                                              }); 
                                         });
                                      });
                                    </script>
                                </div>
                            </div>

                          </form>
                          </div>

                         <div class="col-lg-6">
                          <div class="container-fluid">
                                <br>
                            <table id="table_med"  data-toggle="table"
       data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
        id="example2" class="table table-bordered table-hover dataTable"   >
                              <thead>
                                <tr>
                                  <th style="text-align: center;">Lab Package</th>
                                  <th style="text-align: center;">Description</th>
                                  <th style="text-align: center;">Action</th>
                                </tr>
                              </thead>
                              <tbody id="lab_body">
                              @foreach ($lab as $labs)
                                <tr>
                                  <td>{{$labs['lab_name']}}</td>
                                  <td>{{$labs['lab_desc']}}</td>
                                  <td  align="center"> <a href="#"> <span class="glyphicon glyphicon-edit"></span> &nbsp </a>| <a href="#"> &nbsp <span class="glyphicon glyphicon-trash"> </span> </a></td>
                                </tr>
                              @endforeach
                              </tbody>
                            </table>
                          
                          </div>    
                              <br><br>
                             
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