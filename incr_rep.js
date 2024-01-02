$(document).ready(function() {
    $('#signal').submit(function(event) {
      event.preventDefault();
      
        var annonce_id = $('#id').val();
      $.ajax({
        url: 'increment_report.php',
        type: 'POST',
        data: {annonce_id: annonce_id},
        success: function(response) {
            $('#nb_report').html('<p>' + response + '</p>');
           $('#signal').hide(); 
          }
       
      });
    });
  });