$(document).ready(function() {
    $('#comment-form').submit(function(event) {
      event.preventDefault();
      var comment = $('#comment').val();
      var annonce_id = $('#annonce_id').val();
    var user_id = $('#user_id').val();
      $.ajax({
        url: 'insert_comment.php',
        type: 'POST',
        data: {comment: comment, user_id: user_id, annonce_id: annonce_id},
        success: function(response) {
            $('#message-container').html('<p>' + response + '</p>');
            $('#comment').val('');
          }
       
      });
    });
  });