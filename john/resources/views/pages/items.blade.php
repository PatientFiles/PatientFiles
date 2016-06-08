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
                          </ul>
 <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane active" id="vaccine" role="tabpanel">
        <h3>Vaccine</h3>
      <hr>
     <div class="row">

        <div class="col-lg-6">
      <form>

        <div class="row container-fluid">
            <div class="col-lg-12">
               <label>Vaccine Name</label>
               <input class="form-control" type="text" placeholder="Vaccine Name" />
            </div>
             <div class="col-lg-4">
                <br>
               <input class="form-control btn btn-primary " value="Add"   />

            </div>
        </div>

      </form>
      </div>

     <div class="col-lg-6">
      <div class="container-fluid">
            
        <table class="table table-hover table-responsive">
          <thead>
            <tr>
              <th>Vaccine Name</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Paracetamol</td>
            </tr>
          </tbody>
        </table>
      
      </div>    
          <br><br>
          <a href="/pdf" target="_blank" class="btn btn-primary "> Save </a>
      </div>

         </div>
       </div>

         <div class="tab-pane active" id="medicine" role="tabpanel">
        <h3>Medicine</h3>
      <hr>
     <div class="row">

        <div class="col-lg-6">
      <form>

        <div class="row container-fluid">
            <div class="col-lg-12">
               <label>Medicine Name</label>
               <input class="form-control" type="text" placeholder="Medicine Name" />
            </div>
             <div class="col-lg-4">
                <br>
               <input class="form-control btn btn-primary " value="Add"   />

            </div>
        </div>

      </form>
      </div>

     <div class="col-lg-6">
      <div class="container-fluid">
            
        <table class="table table-hover table-responsive">
          <thead>
            <tr>
              <th>Medicine Name</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Paracetamol</td>
            </tr>
          </tbody>
        </table>
      
      </div>    
          <br><br>
          <a href="/pdf" target="_blank" class="btn btn-primary "> Save </a>
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