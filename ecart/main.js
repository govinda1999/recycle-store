$(document).ready(function() {
  function product() {
    $.ajax({
      url: 'action.php',
      method: 'POST',
      data: { getProduct: 1 },
      success: data => {
        // $('#product').html(data);
        console.log(data);
        document.getElementById('product').innerHTML = data;
      }
    });
  }
  product();
});
