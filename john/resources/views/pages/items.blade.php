@extends('layouts.masterLayout')



@section('title', 'Maintenance | Pedix')

@section('content')
 <style type="text/css">
    .fixed-table-body {
      overflow-x: auto;
      overflow-y: auto;
      height: 300px;
    }
    th {
      padding: 8px; 
      line-height: 24px; 
      vertical-align: top; 
      overflow: hidden; 
      text-overflow: ellipsis; 
      white-space: nowrap;
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
<hr>

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
                        </div>
                    </div>

                  </form>
                  </div>

                 <div class="col-lg-6">
                  <div class="container-fluid">
                    <label>List of Medicines</label>
                    <table id="table_med"  data-toggle="table"
       data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
        id="example2" class="table table-bordered table-hover dataTable" >
                      <thead >
                        <tr>
                          <th style="padding: 8px; line-height: 24px; vertical-align: top; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" >Medicine Name</th>
                          <th style="padding: 8px; line-height: 24px; vertical-align: top; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" >Action</th>
                        </tr>
                      </thead>
                      <tbody id="medicine_body">
                      @foreach ($medicine as $med)
                        <tr class="data_med" id="med-{{$med['id']}}">
                          <td >{{$med['medicine_name']}}</td>
                          <td > 
                          <a href="#" class="editMedModal" data-toggle="modal" data-id="{{$med['id']}}" data-medname="{{$med['medicine_name']}}" data-target="#editMedicine"> <span class="glyphicon glyphicon-edit "></span> &nbsp </a> | 
                          <a class="deleteModal" href="#" data-toggle="modal" data-id="{{$med['id']}}" data-medname="{{$med['medicine_name']}}" data-target="#deleteMedsConfirm"> &nbsp <span class="glyphicon glyphicon-trash"> </span> </a></td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                      <!--EDIT MEDICINE MODAL-->
                         <div id="editMedicine" data-name="" class="modal fade editMed" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                                <div class="modal-content" >
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title" style="color: white">Edit Medicine</h4>
                                  </div>
                                      <form class="submitEditMed" action="#" method="POST" role="form">
                                      <div class="modal-body">
                                         <label>Medicine Name</label>
                                         {!! csrf_field() !!}
                                         <input id="medicine_name_edit" class="form-control" name="medicine_name" type="text" required/>
                                      </div>
                                      <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary saveMed" value="Save Changes"></a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                      </div>
                                  </form>
                                </div>
                            </div>
                          </div>
                          <!--end modal-->

                        <!--CONFIRM DELETE MODAL-->
                         <div id="deleteMedsConfirm" data-name="" class="modal fade delmed" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                                <div class="modal-content" >
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title" style="color: white">Confirm Deletion</h4>
                                  </div>
                                  <div class="modal-body">
                                     Delete medicine: <span id="medName"></span>
                                  </div>
                                  <div class="modal-footer">
                                    <a href="#" class="btn btn-primary js-ajax-delete">Yes</a>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <!--end modal-->
                  
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
                                  </div>
                            </div>
                          </form>
                          </div>
                         <div class="col-lg-6">
                          <div class="container-fluid">
                          <label>List of Vaccines</label>
                                <br>
                            <table id="table_vac"  data-toggle="table"
       data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
        id="example2" class="table table-bordered table-hover dataTable"  >
                              <thead>
                                <tr>
                                  <th style="padding: 8px; line-height: 24px; vertical-align: top; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" >Vaccine Name</th>
                                  <th style="padding: 8px; line-height: 24px; vertical-align: top; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" >Purpose</th>
                                  <th style="padding: 8px; line-height: 24px; vertical-align: top; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" >Schedule</th>
                                  <th style="padding: 8px; line-height: 24px; vertical-align: top; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" >Action</th>
                                </tr>
                              </thead>
                              <tbody id="vac_body">
                              @foreach ($vaccine as $vac)
                                <tr class="data_vac" id="vac-{{$vac['id']}}">
                                  <td>{{$vac['vaccine_name']}}</td>
                                  <td>{{$vac['vaccine_for']}}</td>
                                  <td>{{$vac['schedule']}}</td>
                                  <td> 
                                    <a href="#" class="editVacModal" data-toggle="modal" data-id="{{$vac['id']}}" data-vacname="{{$vac['vaccine_name']}}" data-vacfor="{{$vac['vaccine_for']}}" data-sched="{{$vac['schedule']}}" data-target="#editVaccine"> <span class="glyphicon glyphicon-edit"></span> &nbsp </a> | 
                                    <a href="#" class="vacModal" data-toggle="modal" data-id="{{$vac['id']}}" data-vacname="{{$vac['vaccine_name']}}" data-target="#deleteVacConfirm"> &nbsp <span class="glyphicon glyphicon-trash"> </span> </a>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!--EDIT Vaccine MODAL-->
                         <div id="editVaccine" data-name="" class="modal fade editVac" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                                <div class="modal-content" >
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title" style="color: white">Edit Vaccine</h4>
                                  </div>
                                      <form class="submitEditVac" action="#" method="POST" role="form">
                                      <div class="modal-body">
                                         <div class="row container-fluid">
                                            <div class="col-lg-6">
                                               <label>Vaccine Name</label>
                                               <input class="form-control" type="text" name="vaccine_name" id="vaccine_name_edit" required/>
                                            </div>

                                            <div  class="col-lg-6">
                                              <label>Vaccine Purpose</label>
                                                <input type="text" name="vaccine_for" id="vaccine_for_edit" type="text" class="form-control"  required />
                                            </div>

                                            <div class="col-lg-12">
                                              <br>
                                               <label>Vaccine Schedule</label>
                                               <input class="form-control" name="schedule" id="schedule_edit" type="text" required/>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary saveVac" value="Save Changes"></a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                      </div>
                                  </form>
                                </div>
                            </div>
                          </div>
                          <!--end modal-->
                            <!--CONFIRM DELETE MODAL-->
                             <div id="deleteVacConfirm" data-name="" class="modal fade delvac" role="dialog">
                                <div class="modal-dialog">

                                  <!-- Modal content-->
                                    <div class="modal-content" >
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title" style="color: white">Confirm Deletion</h4>
                                      </div>
                                      <div class="modal-body">
                                         Delete vaccine: <span id="vacName"></span>
                                      </div>
                                      <div class="modal-footer">
                                        <a href="#" class="btn btn-primary delete_vac">Yes</a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                      </div>
                                    </div>
                                </div>
                              </div>
                          <!--end modal-->
                          
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
                                   <input class="form-control" name="lab_name" id="lab_name" type="text" placeholder="Lab Package" required />
                                </div>
                                <div class="col-lg-12">
                                  <br>
                                   <label>Description</label>
                                   <input class="form-control" name="lab_desc" id="lab_desc" type="text" placeholder="Description" required />
                                </div>
                                 <div class="col-lg-6">
                                    <br>
                                   <input class="form-control btn btn-primary " type="submit" value="Add Laboratory Package"   />
                                </div>
                            </div>

                          </form>
                          </div>

                         <div class="col-lg-6">
                          <div class="container-fluid">
                          <label>List of Laboratory Packages</label>
                                <br>
                            <table id="table_lab"  data-toggle="table"
       data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
        id="example2" class="table table-bordered table-hover dataTable"   >
                              <thead>
                                <tr>
                                  <th style="padding: 8px; line-height: 24px; vertical-align: top; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" >Lab Package</th>
                                  <th style="padding: 8px; line-height: 24px; vertical-align: top; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" >Description</th>
                                  <th style="padding: 8px; line-height: 24px; vertical-align: top; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" >Action</th>
                                </tr>
                              </thead>
                              <tbody id="lab_body">
                              @foreach ($lab as $labs)
                                <tr>
                                  <td>{{$labs['lab_name']}}</td>
                                  <td>{{$labs['lab_desc']}}</td>
                                  <td>
                                      <a href="#" class="editLabModal" data-toggle="modal" data-id="{{$labs['id']}}" data-labname="{{$labs['lab_name']}}" data-labdesc="{{$labs['lab_desc']}}" data-target="#editLab"> <span class="glyphicon glyphicon-edit "></span> &nbsp </a> | 
                                      <a class="labModal" href="#" data-toggle="modal" data-id="{{$labs['id']}}" data-labname="{{$labs['lab_name']}}" data-target="#deleteLabConfirm"> &nbsp <span class="glyphicon glyphicon-trash"> </span> </a>
                                  </td>
                                </tr>
                              @endforeach
                              </tbody>
                            </table>
                            <!--EDIT Vaccine MODAL-->
                         <div id="editLab" data-name="" class="modal fade editLab" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                                <div class="modal-content" >
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title" style="color: white">Edit Vaccine</h4>
                                  </div>
                                      <form class="submitEditLab" action="#" method="POST" role="form">
                                      <div class="modal-body">
                                        <div class="row container-fluid">
                                            <div class="col-lg-12">
                                               <label>Laboratory Package</label>
                                               <input class="form-control" name="lab_name" id="lab_name_edit" type="text" required />
                                            </div>
                                            <div class="col-lg-12">
                                              <br>
                                               <label>Description</label>
                                               <input class="form-control" name="lab_desc" id="lab_desc_edit" type="text" required />
                                            </div>
                                        </div> 
                                      </div>
                                      <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary saveLab" value="Save Changes"></a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                      </div>
                                  </form>
                                </div>
                            </div>
                          </div>
                          <!--end modal-->
                          <!--CONFIRM DELETE MODAL-->
                             <div id="deleteLabConfirm" data-name="" class="modal fade dellab" role="dialog">
                                <div class="modal-dialog">

                                  <!-- Modal content-->
                                    <div class="modal-content" >
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title" style="color: white">Confirm Deletion</h4>
                                      </div>
                                      <div class="modal-body">
                                         Delete Lab Package: <span id="labName"></span>
                                      </div>
                                      <div class="modal-footer">
                                        <a href="#" class="btn btn-primary delete_lab">Yes</a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                      </div>
                                    </div>
                                </div>
                              </div>
                          <!--end modal-->
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