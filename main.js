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

  // function post_remove(e) {
  //   var remove_id = parseInt(e.originalTarget.attributes.remove_id.value);
  //   $.ajax({
  //     url: 'action.php',
  //     method: 'POST',
  //     data: { removepost: 1, rid: remove_id },
  //     success: function(data) {
  //       $('#post_msg').html(data);
  //       post();
  //     }
  //   });
  // }

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
