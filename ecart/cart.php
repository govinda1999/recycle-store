<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("location:login.php");
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Cart</title>
    <script src="../js/jquery2.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="./main.js"></script>
    <link rel="stylesheet" href="../css/External/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/Home/index.css" />
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <style></style>
</head>

<body>
    <section id="nav-bar" style="position: sticky;top:0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <a class="navbar-brand" href="../dashboard.php"><img src="../image/logo.png" alt="logo" style="height: 40px" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link btn btn-outline-light border-0 p-1 text-success" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light border-0 p-1 text-success" href="./index.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light border-0 p-1 text-success" href="./cart.php">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light border-0 p-1 text-success" href="./order.php">Order</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8" id="cart_msg">
                <!--Cart Message-->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1 class="text-center mb-5 mt-5 text-success">Cart</h1>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-2 col-xs-2"><b>Action</b></div>
                            <div class="col-md-2 col-xs-2"><b>Product Image</b></div>
                            <div class="col-md-2 col-xs-2"><b>Product Name</b></div>
                            <div class="col-md-2 col-xs-2"><b>Quantity</b></div>
                            <div class="col-md-2 col-xs-2"><b>Product Price</b></div>
                            <div class="col-md-2 col-xs-2"><b>Price in Rupees</b></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="cart_checkout" class="container-fluid"></div>
            <!--<div class="row">
							<div class="col-md-2">
								<div class="btn-group">
									<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
									<a href="" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
								</div>
							</div>
							<div class="col-md-2"><img src='product_images/imges.jpg'></div>
							<div class="col-md-2">Product Name</div>
							<div class="col-md-2"><input type='text' class='form-control' value='1' ></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
						</div> -->
            <!--<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b>Total $500000</b>
							</div> -->

            <script src="https://code.jquery.com/jquery-3.1.1.min.js">
                < script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity = "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin = "anonymous" >
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>