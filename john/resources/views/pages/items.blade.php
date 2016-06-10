@extends('layouts.masterLayout')




@section('title', 'Items | Pedix')
@section('content')

<section class="content-header">
          <h1>
          Items
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Items</a></li>
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
                    <a data-toggle="tab" href="#lab" role="tab">Laboratory Types</a>
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
                                    <script>
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
                                    </script>
                        </div>
                    </div>

                  </form>
                  </div>

                 <div class="col-lg-6">
                  <div class="container-fluid">
                        <br>
                    <table class="table table-hover table-responsive table-bordered">
                      <thead>
                        <tr>
                          <th style="text-align: center;">Medicine Name</th>
                          <th style="text-align: center;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td align="center">Paracetamol</td>
                          <td align="center"> <a href="#"> <span class="glyphicon glyphicon-edit"></span> &nbsp </a>| <a href="#"> &nbsp <span class="glyphicon glyphicon-trash"> </span> </a></td>
                        </tr>
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
                                            $.ajax({
                                                  type: "POST",
                                                  url: '/items/add_vaccine',
                                                  data: data,
                                                  success: function(msg,status) {
                                                      alert('Vaccine successfully added!');
                                                      $("#vaccine_form")[0].reset();
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
                            <table class="table table-hover table-responsive table-bordered">
                              <thead>
                                <tr>
                                  <th>Vaccine Name</th>
                                  <th>Purpose</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>AMR 1002</td>
                                  <td>Anti H1N1 3 in 1 Plus 1</td>
                                  <td align="center"> <a href="#"> <span class="glyphicon glyphicon-edit"></span> &nbsp </a>| <a href="#"> &nbsp <span class="glyphicon glyphicon-trash"> </span> </a></td>
                                </tr>
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
                                   <label>Type</label>
                                   <input class="form-control" name="lab_name" id="lab_name" type="text" placeholder="Type" />
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
                                            $.ajax({
                                                  type: "POST",
                                                  url: '/items/add_lab',
                                                  data: data,
                                                  success: function(msg,status) {
                                                      alert('Laboratory package successfully added!');
                                                      $("#lab_form")[0].reset();
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
                            <table class="table table-hover table-responsive table-bordered">
                              <thead>
                                <tr>
                                  <th style="text-align: center;">Type</th>
                                  <th style="text-align: center;">Description</th>
                                  <th style="text-align: center;">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td align="center">Type 101</td>
                                  <td align="center">Summer Slam</td>

                                  <td align="center"> <a href="#"> <span class="glyphicon glyphicon-edit"></span> &nbsp </a>| <a href="#"> &nbsp <span class="glyphicon glyphicon-trash"> </span> </a></td>
                                </tr>
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