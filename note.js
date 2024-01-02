$(document).ready(function() {
    $('#noter').submit(function(event) {
      event.preventDefault();
      
        var annonce_id = $('#id').val();
        var note = $('#note').val();
      $.ajax({
        url: 'note.php',
        type: 'POST',
        data: {annonce_id: annonce_id, note: note},
        success: function(response) {
            $('#nvnote').html('<p>' + response + '</p>');
          }
       
      });
    });
  });