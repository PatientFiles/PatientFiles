
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
                      alert('Medicine successfully added!');
                      $("#medicine_form")[0].reset();
                      $('#medicine_body').append('<tr><td align="center">'+med_name+'</td><td align="center"> <a href="#"> <span class="glyphicon glyphicon-edit"></span> &nbsp </a>| <a href="#"> &nbsp <span class="glyphicon glyphicon-trash"> </span> </a></td></tr>');
                      /*function fetch_med() 
                      {
                        var medicine_table = $('#medicine_tbody');
                        var url            = '/items/medicine_table';
                        $.get(url, function(res){
                          res.each(function(key,value){
                            medicine_table.append("<tr><td align="center">"+value.medicine_name+"</td><td align="center"> <a href="#"> <span class="glyphicon glyphicon-edit"></span> &nbsp </a>| <a href="#">&nbsp<span class="glyphicon glyphicon-trash"></span></a></td>");
                          });
                        });
                      }*/
                  }
              }); 
                      var table = document.getElementById("medicine_table");
            		  table.refresh ();
         });
      });
