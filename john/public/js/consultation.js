
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
        $.ajax({
              type: "POST",
              url: '/consultation/diagnosis',
              data: data,
              success: function(res) {
                console.log(res);
                var result = res.data.diagnosis_result;
                var remarks = res.data.diagnosis_remarks;
                toastr.options.positionClass = 'toast-top-center';
                toastr.success('Diagnosis successfully added!');
                toastr.options.showMethod        = 'slideDown';
                toastr.options.hideMethod        = 'slideUp';
                  $("#diagnosis_submit")[0].reset();
                  $('#assessment').text('Diagnosis result:\n          '+result+'\nRemarks:\n          '+remarks);
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
              }
          }); 
         });
});
