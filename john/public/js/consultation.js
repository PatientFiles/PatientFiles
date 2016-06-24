
jQuery( document ).ready( function() {

        /*--------------------------------
        |
        |add a vaccination
        |
        |--------------------------------
        */
        $( '#vac_submit' ).on( 'submit', function(e) {
          e.preventDefault(); 
        var data = $(this).serialize();
        $.ajax({
              type: "POST",
              url: '/consultation/vaccination',
              data: data,
              success: function(res) {
                console.log(res);
                var name = res.v.vaccine.vaccine_name;
                var vfor = res.v.vaccine.vaccine_for;
                var date = res.data.date;
                console.log(name);
                console.log(vfor);
                console.log(date);
              	toastr.options.positionClass = 'toast-top-center';
              	toastr.success('Vaccination successfully added!');
            		toastr.options.showMethod        = 'slideDown';
            		toastr.options.hideMethod        = 'slideUp';
                  $("#vac_submit")[0].reset();
                  $('#vacs_t').append('<tr><td>'+name+'</td><td>'+vfor+'</td><td>'+date+'</td><td><span class="glyphicon glyphicon-trash"></span> <a href="#">Delete</a> </td></tr>');
              }
          }); 
         });

      /*--------------------------------
      |
      |add a medicine
      |
      |--------------------------------
      */
      $( '#diagnosis_submit' ).on( 'submit', function(e) {
          e.preventDefault(); 
        var data = $(this).serialize();
        var a = $("#remarks").val();
        var b = $("#result").val();
        console.log(a);
        $.ajax({
              type: "POST",
              url: '/consultation/diagnosis',
              data: data,
              success: function(res) {
                toastr.options.positionClass = 'toast-top-center';
                toastr.success('Diagnosis successfully added!');
                toastr.options.showMethod        = 'slideDown';
                toastr.options.hideMethod        = 'slideUp';
                  $("#diagnosis_submit")[0].reset();
                  $('#assessment').text('Diagnosis result:\n          '+b+'\nRemarks:\n          '+a);
              }
          }); 
         });

      /*--------------------------------
      |
      |add a lab request
      |
      |--------------------------------
      */
      $( '#lab_submit' ).on( 'submit', function(e) {
          e.preventDefault(); 
        var data = $(this).serialize();
        $.ajax({
              type: "POST",
              url: '/consultation/labrequest',
              data: data,
              success: function(res) {
                console.log(res);
                var rems = res.data.remarks;
                var name = res.labs.lab.lab_name;
                toastr.options.positionClass = 'toast-top-center';
                toastr.success('Lab Request successfully added!');
                toastr.options.showMethod        = 'slideDown';
                toastr.options.hideMethod        = 'slideUp';
                  $("#lab_submit")[0].reset();
                  $('#labs_visit').append('<tr><td>'+name+'</td><td>'+rems+'</td><td><span class="glyphicon glyphicon-trash"></span> <a href="#">Delete</a> </td></tr>');

              }
          }); 
         });

      /*--------------------------------
      |
      |add a prescription
      |
      |--------------------------------
      */
      $( '#prescription_submit' ).on( 'submit', function(e) {
          e.preventDefault(); 
        var data = $(this).serialize();
        $.ajax({
              type: "POST",
              url: '/consultation/prescription',
              data: data,
              success: function(res) {
                console.log(res);
                var name = res.presc.prescription.medicine_name;
                var qty = res.data.quantity;
                var sig = res.data.sig;
                console.log(name);
                console.log(qty);
                console.log(sig);
                toastr.options.positionClass = 'toast-top-center';
                toastr.success('Prescription successfully added!');
                toastr.options.showMethod        = 'slideDown';
                toastr.options.hideMethod        = 'slideUp';
                  $("#prescription_submit")[0].reset(); 
                  $('#presc_t').append('<tr><td>'+name+'</td><td>'+qty+'</td><td>'+sig+'</td><td><span class="glyphicon glyphicon-trash"></span> <a href="#">Delete</a> </td></tr>');

              }
          }); 
         });

      /*--------------------------------
      |
      |finish a vaccination
      |
      |--------------------------------
      */
      $( '.finish_vac_button' ).on('click', function(e) {
          e.preventDefault(); 
          var deleteUrl = $(this).attr('href');
          $('.finishVacsConfirm').modal('hide');
          $.post(deleteUrl, {"_method" : "POST"}, function(response) {
                // This is a callback. Do stuff here if you want.
              console.log('testing');
              toastr.options.positionClass = 'toast-top-center';
              toastr.success('Patient successfully vaccinated!');
              toastr.options.showMethod        = 'slideDown';
              toastr.options.hideMethod        = 'slideUp';
              toastr.options.closeDuration     = 100;
              $( "#remind_table" ).load( "/home #remind_table" );
            });
         });

      $(document).on('click', '.fModal', function(e){
        console.log(e);
        var id = $(this).data('id');
        var patName = $(this).data('patname');
        var finish_vaccination_name = $(this).data('vaccinationname');

        console.log(id);
        console.log(patName);
        $('#pat_name').text(patName);
        $('#vaccination_name').text(finish_vaccination_name);
        $('.finish_vac_button').attr('href', '/finish_vaccine/'+id);
      });

      /*--------------------------------
      |
      |delete in pediatrician
      |
      |--------------------------------
      */
      $(document).on('click', '.deletePedModal', function(e){
        console.log(e);
        var id = $(this).data('id');
        var patName = $(this).data('pedname');

        console.log(id);
        console.log(patName);
        $('#ped_name').text(patName);
        $('.delete_ped_button').attr('href', '/delete_account/'+id);
      });

});
