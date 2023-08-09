$(document).ready(function() {
    $('#userForm').submit(function(e) {
      e.preventDefault();
      
      var username = $('#usernameInput').val();
      
      if (username !== '') {
        $.ajax({
          type: 'POST',
          url: 'info.php',
          data: { username: username },
          success: function(response) {
            $('#message').text(response);
          }
        });
      }
    });
  });
