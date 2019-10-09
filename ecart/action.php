<?php
include "../config.php";
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
                <div class='col-md-4 col-sm-6 col-12'>
                <div class='card' style='width:90%;height:400px'>
                <img src='../image/product_image/$pro_image' class='card-img-top' alt='product_image'>
                <div class='card-body'>
                <h3 class='card-title'>$pro_title</h3>
                <h6>Rs. $pro_price</h6>
                <a href='#' class='btn btn-primary'>Add to Cart</a>
                </div>
                </div>";

            /*  echo "<div class='col-md-4'>
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
    exit();
}




if (isset($_POST["addToCart"])) {


    $p_id = $_POST["proId"];


    if (isset($_SESSION["id"])) {

        $user_id = $_SESSION["id"];

        $sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
        $run_query = mysqli_query($con, $sql);
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
			(id,p_id,'user_id',qty) 
			VALUES (NULL,'$p_id','$user_id',1)";
            if (mysqli_query($con, $sql)) {
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
