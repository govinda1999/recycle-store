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

    echo "called";
    $p_id = $_POST["proId"];


    if (isset($_SESSION["id"])) {

        $user_id = $_SESSION["id"];

        $sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
        $run_query = mysqli_query($link, $sql);
        echo " inner ";
        $count = mysqli_num_rows($run_query);
        echo $count;
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
    } else {
        echo "no";
    }
}
