
      jQuery( document ).ready( function() {
            $( '#medicine_form' ).on( 'submit', function(e) {
              e.preventDefault(); 
            var data = $(this).serialize();
            var med_name= $('#medicine_name').val();
            $.ajax({
                  type: "POST",
                  url: '/items/add_medicine',
                  data: data,
                  success: function(msg,status) {
                  	toastr.options.positionClass = 'toast-bottom-center';
                  	toastr.success('Medicine successfully added!');
            		toastr.options.showMethod        = 'slideDown';
            		toastr.options.hideMethod        = 'slideUp';
                      $("#medicine_form")[0].reset();
                      $('#medicine_body').append('<tr><td align="center">'+med_name+'</td><td align="center"> <a href="#"> <span class="glyphicon glyphicon-edit"></span> &nbsp </a>| <a href="#"> &nbsp <span class="glyphicon glyphicon-trash"> </span> </a></td></tr>');
                  }
              }); 
         });
      });
