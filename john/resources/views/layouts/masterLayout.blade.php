
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
   
    <!-- Theme style -->
      <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
      <link rel="stylesheet" href="/css/loading.css">
      <link rel="stylesheet" href="/css/loading2.css">
      <link rel="stylesheet" href="/css/bootstrap-table.css">
      <link rel="stylesheet" href="/css/datepicker3.css">
      <link rel="stylesheet" href="/css/kendo.common.min.css">
      <link rel="stylesheet" href="/css/kendo.default.min.css">

      <link rel="stylesheet" href="/css/offline-theme-slide.css">
      <link rel="stylesheet" href="/css/offline-language-english.css">
      <link rel="stylesheet" href="/css/selectize.css">
       <link rel="stylesheet" href="/css/selectize.default.css">

      
          
   
 <!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="/css/fullcalendar.css">
 

<script src="/js/vendor/jquery.js"></script> 
<script src="/js/kendo.web.min.js"></script> 

  <script src="//fast.eager.io/CAcQLdp-HA.js"></script>


  <script src="/js/offline.min.js"></script>  

  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
 <body class="hold-transition skin-blue sidebar-mini fixed">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header" >

        <!-- Logo -->
        <a href="/home" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>P</b>DX</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Ped</b>ix</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top " role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
             

              <!-- Notifications Menu -->
          
              <!-- Tasks Menu -->
            
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="/img/prof_pic.png" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">
                          {{'Dr. '. Session::get('fname').' '.Session::get('lname').', MD.'}}
                  </span>
                </a>

                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="/img/prof_pic.png" class="img-circle" alt="User Image">
                    <p>
                      <b>
                          {{'Dr. '. Session::get('fname').' '.Session::get('lname').', MD.'}}
                      </b>
                      <small>{{  Session::get('role') }}</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="" class="btn btn-default btn-flat"  data-toggle="modal" data-target="#profModal">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar" >

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/img/prof_pic.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>
                          {{'Dr. '. Session::get('fname').' '.Session::get('lname').', MD.'}}
              </p>
              <small>{{  Session::get('role') }}</small>
              <!-- Status -->
              
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action="/searchResult" method="post" class="sidebar-form">
          {{csrf_field()}}
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu" >
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="/home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
              <a href=""><i class="fa fa-black-tie"></i> <span>Patient</span> <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="/patientRecords"><i class="fa fa-users"></i>Patient List</a></li>
                         <li><a href="/register"><i class="ion ion-person-add"></i>Add Patient</a></li>
                      </ul>
                      </li>
            <li ><a href="/scheduler"><i class="fa fa-calendar-check-o"></i> <span>Scheduler</span></a></li>
             <li ><a href="/accounts"><i class="fa fa-user-md"></i> <span>Pediatricians</span></a></li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
        <!-- Main content -->
  
      <section class="content">
     
      @yield('content') 

      </section>
          
         
            
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
       <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Get In Touch with Pedix!</h2>
                   
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">dev.pedix.ph</a></p>
                </div>
            </div>
        </div>
    </section>
    <hr class="primary">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Brought to you by MEDIX
        </div>
        <!-- Default to the left --> 
        <strong>Copyright &copy; 2016 <a href="fb.com/medixph" target="_blank">Pedix</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->


     
     
   
     
     
     
     <!-- MODAL PROFILE -->
  <div style="height: 100%" class="modal fade" id="profModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div  class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel" style="color: white;font-weight: bolder;">My Profile</h4>
                    </div>
                <div class="modal-body">
                    <div class="row" style="padding: 0px 57px;" >
                      <div class="col-lg-3">
                        <img src="/img/prof_pic.png" name="aboutme" width="100" height="100" border="0" class="img-circle">
                      </div>
                      <div class="col-lg-9 pull-left">
                        <h3 class="widget-user-username">
                          {{'Dr. '. Session::get('fname').' '.Session::get('lname').', MD.'}}
                        </h3>
                        <small>{{   Session::get('role')   }}</small>
                      </div>
                    </div>
                    
                <div class="container-fluid" >   
                   
                <div style="padding: 0px 40px;">

                   <div>
               <hr>
                      <div  >  
                        <h4 style="font-weight: bold; padding-left: 17px;" >PERSONAL INFORMATION</h4>
                      </div>
                     
               </div> 
               <div> 
              <ul class="nav nav-stacked">
                <li><a href="#">Birthdate <span class="pull-right badge bg-blue">{{ date('F d,Y', strtotime(Session::get('bday'))) }}</span></a></li>
                @if (Session::get('gender') == 0)
                <li><a href="#">Gender <span class="pull-right badge bg-aqua">Female</span></a></li>
                @endif
                @if (Session::get('gender') == 1)
                <li><a href="#">Gender <span class="pull-right badge bg-aqua">Male</span></a></li>
                @endif
              </ul></div>

                        
                        
                     <hr>
                        <div>
                           <div  >  
                            <h4 style="font-weight: bold; padding-left: 17px;">LICENSE INFORMATION</h4>
                          </div>
                    
                        </div>
                        <div> 
              <ul class="nav nav-stacked">
                <li><a href="#">PRC License <span class="pull-right badge bg-blue">{{Session::get('prc')}}</span></a></li>
                <li><a href="#">PTR License <span class="pull-right badge bg-red">{{Session::get('ptr')}}</span></a></li>
                <li><a href="#">S2 License <span class="pull-right badge bg-green">{{Session::get('ptr')}}</span></a></li>
              </ul></div>
                        
                      
              </div>
                    <br>   
                </div>
                
                <div class="modal-footer">
                   
                    <button type="button" class="btn btn-primary pull-right" data-dismiss="modal">Close</button>
                   
                </div>
            </div>
        </div>
    </div>
     
     
<script src="/js/selectize.js"></script>   
<script src="/js/bootstrap-formhelpers.js"></script>
<script src="/js/bootstrap-formhelpers.min.js"></script>
<script src="/js/bootstrap-formhelpers-phone.js"></script> 
<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap-table.js"></script>
<script src="/plugins/chartjs/Chart.min.js"></script>
<script src="/plugins/fastclick/fastclick.min.js"></script>
<script src="/dist/js/app.min.js"></script>
<script src='/plugins/chartjs/Chart.min.js'></script>
<script src='/plugins/chartjs/Chart.js'></script>
<script src="/js/pace.js"></script>
<script src="/js/bootstrap-datepicker.js"></script>
<script src="/dist/js/demo.js"></script>
<script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>


 <!-- CHART DONUT -->








 <script >
   $("#scrollButton").click(function () {
    scrollCalendarToCurrentTime();
});

function scrollCalendarToCurrentTime() {
    if ($('.k-scheduler-times').length > 0) {
        var formattedTime = '8:00 AM';
        
        $('th:not(.k-slot-cell), .k-scheduler-times:eq(1)').each(function () {
            if ($(this).text() == formattedTime) {
                var that = $(this);
                
                $('.k-scheduler-content').animate({
                    scrollTop: that.position().top
                });
                
                return false;
            }
        });
    }
}

$("#scheduler").kendoScheduler({
    date: new Date("2013/6/13"),
    startTime: new Date("2013/6/13 00:00 AM"),
    height: 600,
    views: [
        "day", {
            type: "week",
            selected: true
        },
        "month",
        "agenda"],
    timezone: "Etc/UTC",
    dataSource: {
        batch: true,
        transport: {
            read: {
                url: "http://demos.telerik.com/kendo-ui/service/tasks",
                dataType: "jsonp"
            },
            update: {
                url: "http://demos.telerik.com/kendo-ui/service/tasks/update",
                dataType: "jsonp"
            },
            create: {
                url: "http://demos.telerik.com/kendo-ui/service/tasks/create",
                dataType: "jsonp"
            },
            destroy: {
                url: "http://demos.telerik.com/kendo-ui/service/tasks/destroy",
                dataType: "jsonp"
            },
            parameterMap: function (options, operation) {
                if (operation !== "read" && options.models) {
                    return {
                        models: kendo.stringify(options.models)
                    };
                }
            }
        },
        schema: {
            model: {
                id: "taskId",
                fields: {
                    taskId: {
                        from: "TaskID",
                        type: "number"
                    },
                    title: {
                        from: "Title",
                        defaultValue: "No title",
                        validation: {
                            required: true
                        }
                    },
                    start: {
                        type: "date",
                        from: "Start"
                    },
                    end: {
                        type: "date",
                        from: "End"
                    },
                    startTimezone: {
                        from: "StartTimezone"
                    },
                    endTimezone: {
                        from: "EndTimezone"
                    },
                    description: {
                        from: "Description"
                    },
                    recurrenceId: {
                        from: "RecurrenceID"
                    },
                    recurrenceRule: {
                        from: "RecurrenceRule"
                    },
                    recurrenceException: {
                        from: "RecurrenceException"
                    },
                    ownerId: {
                        from: "OwnerID",
                        defaultValue: 1
                    },
                    isAllDay: {
                        type: "boolean",
                        from: "IsAllDay"
                    }
                }
            }
        },
        filter: {
            logic: "or",
            filters: [{
                field: "ownerId",
                operator: "eq",
                value: 1
            }, {
                field: "ownerId",
                operator: "eq",
                value: 2
            }]
        }
    },
    resources: [{
        field: "ownerId",
        title: "Status",
        dataSource: [{
            text: "Confirm",
            value: 1,
            color: "#51a0ed"
        }, {
            text: "Cancel",
            value: 2,
            color: "#f8a398"
        },]
    }]
});
 </script>


<script >
  
$('#sandbox-container input').datepicker({
    autoclose: true
});

$('#sandbox-container input').on('show', function(e){
    console.debug('show', e.date, $(this).data('stickyDate'));
    
    if ( e.date ) {
         $(this).data('stickyDate', e.date);
    }
    else {
         $(this).data('stickyDate', null);
    }
});

$('#sandbox-container input').on('hide', function(e){
    console.debug('hide', e.date, $(this).data('stickyDate'));
    var stickyDate = $(this).data('stickyDate');
    
    if ( !e.date && stickyDate ) {
        console.debug('restore stickyDate', stickyDate);
        $(this).datepicker('setDate', stickyDate);
        $(this).data('stickyDate', null);
    }
});

</script>

<!-- SCHEDULER SCRIPT -->
        <script>
      $(function () {

        /* initialize the external events
         -----------------------------------------------------------------*/
        function ini_events(ele) {
          ele.each(function () {

            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
              title: $.trim($(this).text()) // use the element's text as the event title
            };

            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);

            // make the event draggable using jQuery UI
            $(this).draggable({
              zIndex: 1070,
              revert: true, // will cause the event to go back to its
              revertDuration: 0  //  original position after the drag
            });

          });
        }
        ini_events($('#external-events div.external-event'));

        /* initialize the calendar
         -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date();
        var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear();
        $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          buttonText: {
            today: 'today',
            month: 'month',
            week: 'week',
            day: 'day'
          },
          //Random default events
          events: [
            {
              title: 'All Day Event',
              start: new Date(y, m, 1),
              backgroundColor: "#f56954", //red
              borderColor: "#f56954" //red
            },
            {
              title: 'Long Event',
              start: new Date(y, m, d - 5),
              end: new Date(y, m, d - 2),
              backgroundColor: "#f39c12", //yellow
              borderColor: "#f39c12" //yellow
            },
            {
              title: 'Meeting',
              start: new Date(y, m, d, 10, 30),
              allDay: false,
              backgroundColor: "#0073b7", //Blue
              borderColor: "#0073b7" //Blue
            },
            {
              title: 'Lunch',
              start: new Date(y, m, d, 12, 0),
              end: new Date(y, m, d, 14, 0),
              allDay: false,
              backgroundColor: "#00c0ef", //Info (aqua)
              borderColor: "#00c0ef" //Info (aqua)
            },
            {
              title: 'Birthday Party',
              start: new Date(y, m, d + 1, 19, 0),
              end: new Date(y, m, d + 1, 22, 30),
              allDay: false,
              backgroundColor: "#00a65a", //Success (green)
              borderColor: "#00a65a" //Success (green)
            },
            {
              title: 'Click for Google',
              start: new Date(y, m, 28),
              end: new Date(y, m, 29),
              url: 'http://google.com/',
              backgroundColor: "#3c8dbc", //Primary (light-blue)
              borderColor: "#3c8dbc" //Primary (light-blue)
            }
          ],
          editable: true,
          droppable: true, // this allows things to be dropped onto the calendar !!!
          drop: function (date, allDay) { // this function is called when something is dropped

            // retrieve the dropped element's stored Event Object
            var originalEventObject = $(this).data('eventObject');

            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);

            // assign it the date that was reported
            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;
            copiedEventObject.backgroundColor = $(this).css("background-color");
            copiedEventObject.borderColor = $(this).css("border-color");

            // render the event on the calendar
            // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
              // if so, remove the element from the "Draggable Events" list
              $(this).remove();
            }

          }
        });

        /* ADDING EVENTS */
        var currColor = "#3c8dbc"; //Red by default
        //Color chooser button
        var colorChooser = $("#color-chooser-btn");
        $("#color-chooser > li > a").click(function (e) {
          e.preventDefault();
          //Save color
          currColor = $(this).css("color");
          //Add color effect to button
          $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
        });
        $("#add-new-event").click(function (e) {
          e.preventDefault();
          //Get value and make sure it is not null
          var val = $("#new-event").val();
          if (val.length == 0) {
            return;
          }

          //Create events
          var event = $("<div />");
          event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
          event.html(val);
          $('#external-events').prepend(event);

          //Add draggable funtionality
          ini_events(event);

          //Remove event from text input
          $("#new-event").val("");
        });
      });
    </script>
<!-- SCHEDULER SCRIPT --> 

<!-- DATEPICKER FOR MODAL SCRIPT --> 
  <script type="text/javascript">
       $('#idTourDateDetails').datepicker({
            dateFormat: 'dd-mm-yy',
            minDate: '+5d',
            changeMonth: true,
            changeYear: true,
            altField: "#idTourDateDetailsHidden",
            altFormat: "yy-mm-dd"
        });
  </script> 

<!-- toasterscript -->
<script type="text/javascript">
  $(function()
    {
      $('#addPatient').click(function () {

            toastr.options.showEasing        = 'swing';
            toastr.options.hideEasing        = 'linear';
            toastr.options.closeEasing       = 'linear';
            toastr.options.showMethod        = 'slideDown';
            toastr.options.hideMethod        = 'slideUp';
            toastr.options.hideMethod        = 1000;
            toastr.options.preventDuplicates = true;
    });
</script>  



<!-- SELECTICZE JS -->

  <!-- CONSULTAION GENERIC -->

<script >
  var options=[
    {id:0, name:"Generic 0"},
    {id:1, name:"Generic 1"},
    {id:2, name:"Generic 2"},
    {id:3, name:"Generic 3"},
];


$('#select_generic').selectize({
    plugins: ['remove_button'],
    valueField: 'id',
    labelField: 'name',
    searchField: ['name'],
    "options": options,
    delimiter: ',',
    persist: false,
    create: function (input) {
      return {
        id: input,
        name: input,
      };
    },
    hideSelected: true,
    openOnFocus: false,
});

$('#select_generic').change(function(){
$('#result').html("you select value="+$(this).val());
});
</script>

 <!-- CONSULTATION BRAND -->

<script >
  var options=[
    {id:0, name:"Brand "},
    {id:1, name:"Brand  1"},
    {id:2, name:"Brand  2"},
    {id:3, name:"Brand  3"},
];


$('#select_brand').selectize({
    plugins: ['remove_button'],
    valueField: 'id',
    labelField: 'name',
    searchField: ['name'],
    "options": options,
    delimiter: ',',
    persist: false,
    create: function (input) {
      return {
        id: input,
        name: input,
      };
    },
    hideSelected: true,
    openOnFocus: false,
});

$('#select_brand').change(function(){
$('#result').html("you select value="+$(this).val());
});
</script>



<!-- PATIENT RECORDS SEARCH -->

<script >
  $('.contact-name');
$('#search').click(function(){
    $('.contact-name').hide();
    var txt = $('#search-criteria').val();
    $('.contact-name').each(function(){
       if($(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1){
           $(this).show();
       }
    });
});
</script>


<script >
  $('.contact-name');
  $("#search-criteria").keyup(function(e){
    if(event.keyCode == 13){
        $("#search").click();


          $('.contact-name').hide();
    var txt = $('#search-criteria').val();
    $('.contact-name').each(function(){
       if($(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1){
           $(this).show();
       }
    });



    }
});
</script>
<!-- PEDIATRICIANS SEARCH -->

<script >
  $('.contact-name');
$('#search_ped').click(function(){
    $('.contact-name').hide();
    var txt = $('#search-pediatrician').val();
    $('.contact-name').each(function(){
       if($(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1){
           $(this).show();
       }
    });
});
</script>

<script >
  $('.contact-name');
  $("#search-pediatrician").keyup(function(event){
    if(event.keyCode == 13){
        $("#search_ped").click();


          $('.contact-name').hide();
    var txt = $('#search-pediatrician').val();
    $('.contact-name').each(function(){
       if($(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1){
           $(this).show();
       }
    });



    }
});
</script>