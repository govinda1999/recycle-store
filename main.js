$(document).ready(function() {
  function profile() {
    $.ajax({
      url: 'action.php',
      method: 'POST',
      data: { profile: 1 },
      success: function(data) {
        $('#profile').html(data);
      }
    });
  }
  profile();
  post_profile();
  function post_profile() {
    $.ajax({
      url: 'action.php',
      method: 'POST',
      data: { post_profile: 1 },
      success: data => {
        $('#post_profile').html(data);
      }
    });
  }
  var post = () => {
    $.ajax({
      url: 'action.php',
      method: 'POST',
      data: { post: 1 },
      success: data => {
        $('#post').html(data);
      }
    });
  };
  post();
});
