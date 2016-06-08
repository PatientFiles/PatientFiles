@extends('layouts.masterLayout')

@section('title', 'Consultation Queue | Pedix')

@section('content')

<section class="content-header">
      <h1>Consultation Queue</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Consultation Queue</li>
      </ol>
 </section>
	 
<hr id="p_hr1">

<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-sm-12 table-responsive">	
				<div class="box">
                <div class="box-body">


                		<table  data-toggle="table"
       data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
       data-search="true"
       data-show-refresh="true"
       data-show-toggle="true"
       data-show-columns="true">
      <thead>
                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 177px;">Appointment ID</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Patient Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 205px;">Purpose</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 152px;">Chief Complaints</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 152px;">Action</th></tr>
                    </thead>



                     <tbody>
		                    <tr role="row" class="even">
		                        
		                    </tr>
							   
</table>


                </div><!-- /.box-body -->
              </div>	
			</div>
		</div>
	</div>

	

@stop