$(document).ready(function() {
  function product() {
    $.ajax({
      url: 'action.php',
      method: 'POST',
      data: { getProduct: 1 },
      success: data => {
        $('#get_product').html(data);
        //console.log(data);
        // document.getElementById('product').innerHTML = data;
      }
    });
  }
  product();

  //add to cart
  $('body').delegate('#product', 'click', function(event) {
    var pid = $(this).attr('pid');
    event.preventDefault();
    $.ajax({
      url: 'action.php',
      method: 'POST',
      data: { addToCart: 1, proId: pid },
      success: function(data) {
        console.log('data ' + data);
      }
    });
  });
});
