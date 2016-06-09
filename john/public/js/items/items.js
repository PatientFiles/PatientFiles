jQuery( document ).ready( function() {

      $( '#comment' ).on( 'submit', function(e) {
        e.preventDefault(); 
      var name = $('#name').val();
      var message = $('#message').val();
      var postid = $('#post_id').val();
      $.ajax({
            type: "POST",
            url: host+'/comment/add',
            data: {name:name, message:message, post_id:postid}
            success: function( msg ) {
            alert( msg );
            }
        });
   });
});