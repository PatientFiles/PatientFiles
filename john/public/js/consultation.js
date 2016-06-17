
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
                  $('#vaccination_body').prepend('<tr><td>'+name+'</td><td> <a href="#" class="editMedModal" data-toggle="modal" data-id="'+vfor+'" data-medname="'+date+'" data-target="#editMedicine"> <span class="glyphicon glyphicon-edit "></span> &nbsp </a> |  </span> </a></td></tr>');
              }
              error: function(err){
                console.log(err);
              }
          }); 
         });

});
