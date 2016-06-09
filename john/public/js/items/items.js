
jQuery( document ).ready( function() {

      $( '#medicine_form' ).on( 'submit', function(e) {
        e.preventDefault(); 
      var medicine_value = $('#medicine_value').val();
      $.ajax({
            type: "POST",
            url: '/items/add_medicine',
            data: {medicine_value:medicine_value}
            success: function( msg ) {
                $('#medicineModal').on('show.bs.modal', function (event) {
                  var modal = $(this)
                  modal.find('.modal-title').text('Medicine sucessfully added!')
                  modal.find('.modal-body input').val(recipient)
                })
            }
        });
   });
});