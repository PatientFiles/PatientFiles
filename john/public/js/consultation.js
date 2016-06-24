
jQuery( document ).ready( function() {

        /*--------------------------------
        |
        |add a medicine
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
                var name = res.data.vaccine.vaccine_name;
                var vfor = res.data.vaccine.vaccine_for;
                var date = res.date;
                console.log(name);
                console.log(vfor);
                console.log(date);
              	toastr.options.positionClass = 'toast-top-center';
              	toastr.success('Vaccination successfully added!');
            		toastr.options.showMethod        = 'slideDown';
            		toastr.options.hideMethod        = 'slideUp';
                  $("#vac_submit")[0].reset();
                  $('#vaccination_body').append('<tr><td>'+name+'</td><td> <a href="#" class="editMedModal" data-toggle="modal" data-id="'+vfor+'" data-medname="'+date+'" data-target="#editMedicine"> <span class="glyphicon glyphicon-edit "></span> &nbsp </a> |  </span> </a></td></tr>');
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
                var result = res.data.diagnosis_result;
                var remarks = res.data.diagnosis_remarks;
                toastr.options.positionClass = 'toast-top-center';
                toastr.success('Lab Request successfully added!');
                toastr.options.showMethod        = 'slideDown';
                toastr.options.hideMethod        = 'slideUp';
                  $("#lab_submit")[0].reset();
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
                var result = res.data.diagnosis_result;
                var remarks = res.data.diagnosis_remarks;
                toastr.options.positionClass = 'toast-top-center';
                toastr.success('Prescription successfully added!');
                toastr.options.showMethod        = 'slideDown';
                toastr.options.hideMethod        = 'slideUp';
                  $("#prescription_submit")[0].reset(); 
                  $( "#presc_table" ).load( "/home #presc_table" );
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
