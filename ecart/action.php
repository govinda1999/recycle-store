<?php
include "../config.php";
session_start();
if (isset($_POST["getProduct"])) {
    $limit = 9;
    $start = 0;
    $product_query = "SELECT * FROM product LIMIT $start,$limit";
    $run_query = mysqli_query($link, $product_query);
    if (mysqli_num_rows($run_query) > 0) {
        while ($row = mysqli_fetch_array($run_query)) {
            $pro_id    = $row['product_id'];
            $pro_title = $row['title'];
            $pro_price = $row['price'];
            $pro_image = $row['product_image'];
            echo "
                <div class='col-md-4 col-sm-6 col-12 mt-3 mb-3' >
                <div class='card p-2' >
                <img src='../image/product_image/$pro_image' class='card-img-top img-fluid' alt='product_image' style='height:270px;width:100%'>
                <div class='card-body'>
                <h3 class='card-title'>$pro_title</h3>
                <p class='h6'>Rs.$pro_price</p> 
                <button pid='$pro_id' class='btn btn-outline-primary' style='float:right' id='product'>Add to Cart</button>
                </div>
                </div>
                </div>";
            /*echo "<div class='col-md-4'>
            <div class='panel panel-info'>
                <div class='panel-heading'>$pro_title</div>
                <div class='panel-body'>
                    <img src='../image/product_image/$pro_image' style='width:100%; height:250px;'/>
                </div>
                <div class='panel-heading'>$.$pro_price.00
                    <button pid='$pro_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
                </div>
            </div>
        </div>	";*/
        }
    }
}




if (isset($_POST["addToCart"])) {

    $p_id = $_POST["proId"];


    if (isset($_SESSION["id"])) {

        $user_id = $_SESSION["id"];

        $sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
        $run_query = mysqli_query($link, $sql);
        $count = mysqli_num_rows($run_query);
        if ($count > 0) {

            echo "
				<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is already added into the cart Continue Shopping..!</b>
				</div>
			";
        } else {
            $sql = "INSERT INTO cart
			(id,p_id,user_id,qty) 
			VALUES (NULL,'$p_id','$user_id',1)";
            if (mysqli_query($link, $sql)) {
                echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is Added..!</b>
					</div>
				";
            }
        }
    }
}



//Cart Page

if (isset($_POST["checkOutDetails"])) {
    $uid = $_SESSION["id"];
    $net = 0;
    $query = "select a.product_id,a.title,a.price,a.product_image,b.id,b.qty from product a,cart b where b.p_id = a.product_id and b.user_id ='$uid'";
    $res = mysqli_query($link, $query);
    $n = 0;
    $count = mysqli_num_rows($res);
    if ($count > 0) {
        while ($row = mysqli_fetch_array($res)) {
            $n++;
            $product_id = $row["product_id"];
            $product_title = $row["title"];
            $product_price = $row["price"];
            $product_image = $row["product_image"];
            $cart_item_id = $row["id"];
            $qty = $row["qty"];
            $net += $qty * $product_price;
            echo
                '<div class="row mt-3 mb-3" style="height:200px">
                        <div class="col-md-2">
                            <div class="btn-group pt-5">
                                <button remove_id="' . $product_id . '" class="btn btn-danger" id="remove" onClick="remove(event)">Remove</button>
                                <button update_id="' . $product_id . '" class="btn btn-primary update ml-1" onClick="update(event)">Update</button>
                            </div>
                        </div>
                        <input type="hidden" name="product_id[]" value="' . $product_id . '"/>
                        <input type="hidden" name="" value="' . $cart_item_id . '"/>
                        <div class="col-md-2"><img class="img-responsive w-100 h-75" src="../image/product_image/' . $product_image . '"></div>
                        <div class="col-md-2 pt-5" >' . $product_title . '</div>
                        <div class="col-md-2 pt-5"><input type="text" class="form-control qty" value="' . $qty . '" update_id = "' . $product_id . '"></div>
                        <div class="col-md-2 pt-5"><input type="text" class="form-control price" value="' . $product_price . '" readonly="readonly"></div>
                        <div class="col-md-2 pt-5"><input type="text" class="form-control total" value="' . $product_price . '" readonly="readonly"></div>
                    </div>';
        }
        echo '<div class="row mb-5 mt-5">
							<div class="col-md-8"></div>
							<div class="col-md-4 text-center"><b class="net_total" style="font-size:20px;"> </b>
                    </div>
                    </div>';

        echo '

                    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="gspatel4555-facilitator@gmail.com">
                        <input type="hidden" name="upload" value="1">';

        $x = 0;
        $sql = "SELECT a.product_id,a.title,a.price,a.product_image,b.id,b.qty FROM product a,cart b WHERE a.product_id=b.p_id AND b.user_id='$uid'";
        $query = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($query)) {
            $x++;
            echo
                '<input type="hidden" name="item_name_' . $x . '" value="' . $row["title"] . '">
                 <input type="hidden" name="item_number_' . $x . '" value="' . $x . '">
                 <input type="hidden" name="amount_' . $x . '" value="' . $row["price"] . '">
                 <input type="hidden" name="quantity_' . $x . '" value="' . $row["qty"] . '">';
        }

        echo
            '<input type="hidden" name="return" value="http://localhost/recycle-store/ecart/payment_success.php"/>
                                <input type="hidden" name="notify_url" value="http://localhost/recycle-store/ecart/payment_success.php">
                                <input type="hidden" name="cancel_return" value="http://localhost/recycle-store/ecart/cancel.php"/>
                                <input type="hidden" name="currency_code" value="INR"/>
                                <input type="hidden" name="custom" value="' . $uid . '"/>
                                <input style="float:right;margin-right:80px;" type="image" name="submit"
                                    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/blue-rect-paypalcheckout-60px.png" alt="PayPal Checkout"
                                    alt="PayPal - The safer, easier way to pay online" class="mb-5">
                            </form>';

        echo '<form method="post" action="paytmcheck.php">
        <input type="hidden" name="amt" value="' . $net . '" />
        <input type="submit" value="Paytm" />        
        </form>';
    }
}


if (isset($_POST["removeItemFromCart"])) {
    $remove_id = $_POST["rid"];
    $sql = 'DELETE FROM cart WHERE p_id = ' . $remove_id . ' AND user_id = ' . $_SESSION["id"];
    if (mysqli_query($link, $sql)) {
        echo "<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is removed from cart</b>
				</div>";
        exit();
    } else {
        echo "<div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Product is Not removed from cart</b>
</div>";
    }
}


if (isset($_POST["updateCartItem"])) {
    $update_id = $_POST["update_id"];
    $qty = $_POST["qty"];
    $sql = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' AND user_id = " . $_SESSION["id"];
    if (mysqli_query($link, $sql)) {
        echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is updated</b>
				</div>";
        exit();
    }
}

if (isset($_POST["getorder"])) {
    $uid = $_SESSION["id"];
    $sql = "select id,user_id,p_id,qty,tran_id,p_status from orders where user_id = '$uid'";
    $query = mysqli_query($link, $sql);
    $count = mysqli_num_rows($query);
    if ($count > 0) {
        echo "
        <div class='row mt-3 '>
        <div class='col-2'><h3>ID</h3></div>
        <div class='col-2'><h3>Product id</h3></div>
        <div class='col-2'><h3>Qty</h3></div>
        <div class='col-2'><h3>Transaction Id</h3></div>
        <div class='col-2'><h3>Payment Status</h3></div>
        </div>
        ";
        while ($row = mysqli_fetch_array($query)) {
            $id = $row["id"];
            $p_id = $row["p_id"];
            $qty = $row["qty"];
            $tran_id = $row["tran_id"];
            $p_status = $row["p_status"];

            echo
                "<div class='row mt-3 mb-3'>
                <div class='col-2'><h6>'$id'</h6></div>
                <div class='col-2'><h6>'$p_id'</h6></div>
                <div class='col-2'><h6>'$qty'</h6></div>
                <div class='col-2'><h6>'$tran_id'</h6></div>
                <div class='col-2'><h6>'$p_status'</h6></div>
                </div>";
        }
    } else {
        echo "<p class='text-center'>Your Order is Empty Continues to Shopping!!!<p>";
    }
}
