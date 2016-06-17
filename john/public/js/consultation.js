
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
                var id = res.data.id;
                var medname = res.data.medicine_name;
              	toastr.options.positionClass = 'toast-top-center';
              	toastr.success('Medicine successfully added!');
            		toastr.options.showMethod        = 'slideDown';
            		toastr.options.hideMethod        = 'slideUp';
                  $("#medicine_form")[0].reset();
                  $('#medicine_body').prepend('<tr><td>'+med_name+'</td><td> <a href="#" class="editMedModal" data-toggle="modal" data-id="'+id+'" data-medname="'+medname+'" data-target="#editMedicine"> <span class="glyphicon glyphicon-edit "></span> &nbsp </a> | <a href="#" data-id="'+id+'" class="deleteModal" data-medname="'+medname+'" data-toggle="modal" data-target="#deleteMedsConfirm"> &nbsp <span class="glyphicon glyphicon-trash"> </span> </a></td></tr>');
              }
          }); 
         });

});
