$(document).ready(function() {
    $('#logout').submit(function(event) {
      event.preventDefault();
      
        
      $.ajax({
        url: 'logout.php',
        type: 'POST',
        data: {},
        success: function(response) {
            $('#logout').html();
          }
       
      });
    });
  });