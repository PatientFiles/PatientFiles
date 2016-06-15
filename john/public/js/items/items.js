
jQuery( document ).ready( function() {

        /*--------------------------------
        |
        |add a medicine
        |
        |--------------------------------
        */
        $( '#medicine_form' ).on( 'submit', function(e) {
          e.preventDefault(); 
        var data = $(this).serialize();
        var med_name= $('#medicine_name').val();
        $.ajax({
              type: "POST",
              url: '/items/add_medicine',
              data: data,
              success: function(res) {
                console.log(res);
                var id = res.data.id;
                var medname = res.data.medicine_name;
              	toastr.options.positionClass = 'toast-top-center';
              	toastr.success('Medicine successfully added!');
            		toastr.options.showMethod        = 'slideDown';
            		toastr.options.hideMethod        = 'slideUp';
                  $("#medicine_form")[0].reset();
                  //$( "#table_med" ).load( "/items #table_med" );
                  $('#medicine_body').prepend('<tr><td>'+med_name+'</td><td> <a href="#" class="editMedModal" data-toggle="modal" data-id="'+id+'" data-medname="'+medname+'" data-target="#editMedicine"> <span class="glyphicon glyphicon-edit "></span> &nbsp </a> | <a href="#" data-id="'+id+'" class="deleteModal" data-medname="'+medname+'" data-toggle="modal" data-target="#deleteMedsConfirm"> &nbsp <span class="glyphicon glyphicon-trash"> </span> </a></td></tr>');
              }
          }); 
         });

        /*--------------------------------
        |
        |delete a medicine
        |
        |--------------------------------
        */
        $('.js-ajax-delete').on('click', function(e)
        {
            e.preventDefault(); 
            // Get delete URL
            var deleteUrl = $(this).attr('href');
            var modal = $(this).attr('href');
            // Close modal
            $('.delmed').modal('hide');

            // Do delete
            $.post(deleteUrl, {"_method" : "DELETE"}, function(response) {
                // This is a callback. Do stuff here if you want.
              console.log('testing');
              toastr.options.positionClass = 'toast-top-center';
              toastr.success('Medicine successfully deleted!');
              toastr.options.showMethod        = 'slideDown';
              toastr.options.hideMethod        = 'slideUp';
              toastr.options.closeDuration     = 100;
              $( "#table_med" ).load( "/items #table_med" );
            });
        });


      $(document).on('click', '.deleteModal', function(e){
        console.log(e);
        var id = $(this).data('id');
        var medName = $(this).data('medname');

        console.log(id);
        console.log(medName);
        $('#medName').text(medName);
        $('.js-ajax-delete').attr('href', '/items/delete_medicine/'+id);

      });

        /*--------------------------------
        |
        |update a medicine
        |
        |--------------------------------
        */
      $(document).on('click', '.editMedModal', function(e){
        console.log(e);
        var id = $(this).data('id');
        var medName = $(this).data('medname');

        console.log(id);
        console.log(medName);
        $('#medicine_name_edit').attr('value', medName);
        $('.submitEditMed').attr('action', '/items/edit_medicine/'+id);

      });

      $( '.submitEditMed' ).on( 'submit', function(e) {
          e.preventDefault(); 
        var data = $(this).serialize();
        var url = $('.submitEditMed').prop('action');
        $.ajax({
              type: "POST",
              url: url,
              data: data,
              success: function(res) {
                console.log(res);
                toastr.options.positionClass = 'toast-top-center';
                toastr.success('Medicine successfully updated!');
                toastr.options.showMethod        = 'slideDown';
                toastr.options.hideMethod        = 'slideUp';
                toastr.options.closeDuration     = 100;
                var $modal = $('#editMedicine');
                $modal.modal('hide');
                $( "#table_med" ).load( "/items #table_med" );
                }
          }); 
         });

        

        /*--------------------------------
        |
        |add a vaccine
        |
        |--------------------------------
        */
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
                success: function(res) {
                  console.log(res);
                  var id    = res.data.id;
                  var name  = res.data.vaccine_name;
                  var v_for = res.data.vaccine_for;
                  var sched = res.data.schedule;
                    toastr.options.positionClass = 'toast-top-center';
                    toastr.options.showMethod        = 'slideDown';
                    toastr.options.hideMethod        = 'slideUp';
                    toastr.success('Vaccine successfully added!');
                    $("#vaccine_form")[0].reset();
                    var table = document.getElementById ("table_vac");
                    //table.refresh();
                    $('#vac_body').prepend('<tr><td>'+name+'</td><td>'+v_for+'</td><td>'+sched+'</td><td> <a href="#" class="editVacModal" data-toggle="modal" data-id="'+id+'" data-vacname="'+name+'" data-vacfor="'+v_for+'" data-sched="'+sched+'" data-target="#editVaccine"> <span class="glyphicon glyphicon-edit"></span> &nbsp </a> | <a href="#" class="vacModal" data-toggle="modal" data-id="'+id+'" data-vacname="'+name+'" data-target="#deleteVacConfirm"> &nbsp <span class="glyphicon glyphicon-trash"> </span> </a></td></tr>');
                }
            }); 
       });

      /*--------------------------------
      |
      |delete a vaccine
      |
      |--------------------------------
      */
      $('.delete_vac').on('click', function(e)
        {
            e.preventDefault(); 
            // Get delete URL
            var deleteUrl = $(this).attr('href');
            var modal = $(this).attr('href');
            // Close modal
            $('.delvac').modal('hide');

            // Do delete
            $.post(deleteUrl, {"_method" : "DELETE"}, function(response) {
                // This is a callback. Do stuff here if you want.
              console.log('testing');
              toastr.options.positionClass = 'toast-top-center';
              toastr.success('Vaccine successfully deleted!');
              toastr.options.showMethod        = 'slideDown';
              toastr.options.hideMethod        = 'slideUp';
              toastr.options.closeDuration     = 100;
              $( "#table_vac" ).load( "/items #table_vac" );
            });
        });

      $(document).on('click', '.vacModal', function(e){
        console.log(e);
        var id = $(this).data('id');
        var vacName = $(this).data('vacname');

        console.log(id);
        console.log(vacName);
        $('#vacName').text(vacName);
        $('.delete_vac').attr('href', '/items/delete_vaccine/'+id);

      });

        /*--------------------------------
        |
        |update a vaccine
        |
        |--------------------------------
        */
      $(document).on('click', '.editVacModal', function(e){
        console.log(e);
        var id = $(this).data('id');
        var vacName = $(this).data('vacname');
        var vacFor = $(this).data('vacfor');
        var vacSched = $(this).data('sched');

        console.log(id);
        console.log(vacName);
        console.log(vacFor);
        console.log(vacSched);
        $('#vaccine_name_edit').attr('value', vacName);
        $('#vaccine_for_edit').attr('value', vacFor);
        $('#schedule_edit').attr('value', vacSched);
        $('.submitEditVac').attr('action', '/items/edit_vaccine/'+id);

      });

      $( '.submitEditVac' ).on( 'submit', function(e) {
          e.preventDefault(); 
        var data = $(this).serialize();
        var url = $('.submitEditVac').prop('action');
        $.ajax({
              type: "POST",
              url: url,
              data: data,
              success: function(res) {
                console.log(res);
                toastr.options.positionClass = 'toast-top-center';
                toastr.success('Vaccine successfully updated!');
                toastr.options.showMethod        = 'slideDown';
                toastr.options.hideMethod        = 'slideUp';
                toastr.options.closeDuration     = 100;
                var $modal = $('#editVaccine');
                $modal.modal('hide');
                $( "#table_vac" ).load( "/items #table_vac" );
                }
          }); 
         });

      /*--------------------------------
        |
        |add a lab
        |
        |--------------------------------
        */
        $( '#lab_form' ).on( 'submit', function(e) {

        e.preventDefault(); 

          var data = $(this).serialize();
          $.ajax({
                type: "POST",
                url: '/items/add_lab',
                data: data,
                success: function(res) {
                  console.log(res);
                  var id    = res.data.id;
                  var lab_name  = res.data.lab_name;
                  var lab_desc = res.data.lab_desc;
                    toastr.options.positionClass = 'toast-top-center';
                    toastr.options.showMethod        = 'slideDown';
                    toastr.options.hideMethod        = 'slideUp';
                    toastr.success('Lab package successfully added!');
                    $("#lab_form")[0].reset();
                    $('#lab_body').prepend('<tr><td>'+lab_name+'</td><td>'+lab_desc+'</td><td><a href="#" class="editLabModal" data-toggle="modal" data-id="'+id+'" data-labname="'+lab_name+'" data-labdesc="'+lab_desc+'" data-target="#editLab"> <span class="glyphicon glyphicon-edit "></span> &nbsp </a> | <a class="labModal" href="#" data-toggle="modal" data-id="'+id+'" data-labname="'+lab_name+'" data-target="#deleteLabConfirm"> &nbsp <span class="glyphicon glyphicon-trash"> </span> </a></td></tr>');
                }
            }); 
       });

      /*--------------------------------
      |
      |delete a lab
      |
      |--------------------------------
      */
      $('.delete_lab').on('click', function(e)
        {
            e.preventDefault(); 
            // Get delete URL
            var deleteUrl = $(this).attr('href');
            var modal = $(this).attr('href');
            // Close modal
            $('.dellab').modal('hide');

            // Do delete
            $.post(deleteUrl, {"_method" : "DELETE"}, function(response) {
                // This is a callback. Do stuff here if you want.
              console.log('testing');
              toastr.options.positionClass = 'toast-top-center';
              toastr.success('Laboratory package successfully deleted!');
              toastr.options.showMethod        = 'slideDown';
              toastr.options.hideMethod        = 'slideUp';
              toastr.options.closeDuration     = 100;
              $( "#table_lab" ).load( "/items #table_lab" );
            });
        });

      $(document).on('click', '.labModal', function(e){
        console.log(e);
        var id = $(this).data('id');
        var labName = $(this).data('labname');

        console.log(id);
        console.log(labName);
        $('#labName').text(labName);
        $('.delete_lab').attr('href', '/items/delete_lab/'+id);

      });

      /*--------------------------------
        |
        |update a lab
        |
        |--------------------------------
        */
      $(document).on('click', '.editLabModal', function(e){
        console.log(e);
        var id = $(this).data('id');
        var labName = $(this).data('labname');
        var labDesc = $(this).data('labdesc');

        console.log(id);
        console.log(labName);
        console.log(labDesc);
        $('#lab_name_edit').attr('value', labName);
        $('#lab_desc_edit').attr('value', labDesc);
        $('.submitEditLab').attr('action', '/items/edit_lab/'+id);

      });

      $( '.submitEditLab' ).on( 'submit', function(e) {
          e.preventDefault(); 
        var data = $(this).serialize();
        var url = $('.submitEditLab').prop('action');
        $.ajax({
              type: "POST",
              url: url,
              data: data,
              success: function(res) {
                console.log(res);
                toastr.options.positionClass = 'toast-top-center';
                toastr.success('Lab successfully updated!');
                toastr.options.showMethod        = 'slideDown';
                toastr.options.hideMethod        = 'slideUp';
                toastr.options.closeDuration     = 100;
                var $modal = $('#editLab');
                $modal.modal('hide');
                $( "#table_lab" ).load( "/items #table_lab" );
                }
          }); 
         });
});
