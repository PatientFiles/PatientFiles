
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
                var date = res.data.date;
                console.log(name);
                console.log(vfor);
                console.log(date);
              	toastr.options.positionClass = 'toast-top-center';
              	toastr.success('Vaccination successfully added!');
            		toastr.options.showMethod        = 'slideDown';
            		toastr.options.hideMethod        = 'slideUp';
                  $("#vac_submit")[0].reset();
                  $("vaccination_tbody").prepend('<tr><td>'+ name +'</td><td>'+ vfor +'</td><td>'+date+'</td><td><span class="glyphicon glyphicon-trash"></span> <a href="#">Delete</a> </td></tr>');
              }
          }); 
         });

});
