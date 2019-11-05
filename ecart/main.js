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
        // console.log('data ' + data);
        $('#product_msg').html(data);
      }
    });
  });
});

//Update quantity

// $('body').delegate('.qty', 'keyup', function(event) {
//   event.preventDefault();
//   // console.log('object');
//   var row = $(this)
//     .parent()
//     .parent();
//   var price = row.find('.price').val();
//   var qty = row.find('.qty').val();
//   if (isNaN(qty)) {
//     qty = 1;
//   }
//   if (qty < 1) {
//     qty = 1;
//   }
//   var total = price * qty;
//   row.find('.total').val(total);
//   var net_total = 0;
//   $('.total').each(function() {
//     net_total += $(this).val() - 0;
//   });
//   $('.net_total').html('Total : $ ' + net_total);
// });

//Remove Product

checkOutDetails();
net_total();
function checkOutDetails() {
  $('.overlay').show();
  $.ajax({
    url: 'action.php',
    method: 'POST',
    data: { Common: 1, checkOutDetails: 1 },
    success: function(data) {
      $('#cart_checkout').html(data);
      net_total();
    }
  });
}

function net_total() {
  var net_total = 0;
  $('.qty').each(function() {
    var row = $(this)
      .parent()
      .parent();
    var price = row.find('.price').val();
    var total = price * $(this).val() - 0;
    row.find('.total').val(total);
  });
  $('.total').each(function() {
    net_total += $(this).val() - 0;
  });
  $('.net_total').html('Total : ₹ ' + net_total);
}

function remove(e) {
  var remove_id = parseInt(e.originalTarget.attributes.remove_id.value);
  $.ajax({
    url: 'action.php',
    method: 'POST',
    data: { removeItemFromCart: 1, rid: remove_id },
    success: function(data) {
      $('#cart_msg').html(data);
      checkOutDetails();
    }
  });
}

function update(e) {
  var update_id = parseInt(e.originalTarget.attributes.update_id.value);
  var temp = Object.values($('.qty'));
  var temp1 = temp.find(element => {
    return (
      element.attributes && element.attributes.update_id.value == update_id
    );
  });
  var qty = temp1.value;
  if (isNaN(qty)) {
    qty = 1;
  }
  if (qty < 1) {
    qty = 1;
  }
  $.ajax({
    url: 'action.php',
    method: 'POST',
    data: { updateCartItem: 1, update_id: update_id, qty: qty },
    success: function(data) {
      $('#cart_msg').html(data);
      checkOutDetails();
    }
  });
}

function order() {
  $.ajax({
    url: 'action.php',
    method: 'POST',
    data: { getorder: 1 },
    success: data => {
      $('#order_list').html(data);
    }
  });
}
