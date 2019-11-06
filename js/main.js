function profile() {
  $.ajax({
    method: 'POST',
    action: 'action.php',
    data: { profile: 1 },
    success: data => {
      $('#profile').html(data);
    }
  });
}
profile();
