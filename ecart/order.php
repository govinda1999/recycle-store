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
    <div class="container mt-5">
        <div>
            <p class="h3 text-center">Your Order</p>
        </div>
        <div class="row" id="order_list">

        </div>
    </div>
</body>

</html>