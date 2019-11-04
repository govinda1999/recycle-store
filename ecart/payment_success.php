<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("location:login.php");
}
if (isset($_GET["st"])) {

    $trx_id = $_GET["tx"];
    $p_st = $_GET["st"];
    $amt = $_GET["amt"];
    $cc = $_GET["cc"];
    $cm_user_id = $_GET["cm"];
    $c_amt = $_COOKIE["ta"];
    if ($p_st == "Completed") {

        include "../config.php";
        $sql = "SELECT p_id,qty FROM cart WHERE user_id = '$cm_user_id'";
        $query = mysqli_query($link, $sql);
        if (mysqli_num_rows($query) > 0) {

            while ($row = mysqli_fetch_array($query)) {
                $product_id[] = $row["p_id"];
                $qty[] = $row["qty"];
            }

            for ($i = 0; $i < count($product_id); $i++) {
                $sql = "INSERT INTO orders (id,user_id,p_id,qty,tran_id,p_status) VALUES (NULL,'$cm_user_id','" . $product_id[$i] . "','" . $qty[$i] . "','$trx_id','$p_st')";
                mysqli_query($link, $sql);
            }

            $sql = "DELETE FROM cart WHERE user_id = '$cm_user_id'";
            if (mysqli_query($link, $sql)) {
                ?>
                <!DOCTYPE html>
                <html>

                <head>
                    <meta charset="UTF-8" />
                    <title>Store</title>
                    <script src="../js/jquery2.js"></script>
                    <script src="../js/bootstrap.min.js"></script>
                    <script src="./main.js"></script>
                    <link rel="stylesheet" href="../css/External/bootstrap.min.css" />
                    <link rel="stylesheet" type="text/css" href="../css/Home/index.css" />
                    <link rel="stylesheet" type="text/css" href="./style.css" />
                    <style>
                        table tr td {
                            padding: 10px;
                        }
                    </style>
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
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="panel panel-default">
                                    <div class="panel-heading"></div>
                                    <div class="panel-body">
                                        <h1>Thankyou </h1>
                                        <hr />
                                        <p>Your payment process is successfully completed and your Transaction id is <b><?php echo $trx_id; ?></b><br />you can continue your Shopping <br /></p>
                                        <a href="index.php" class="btn btn-success btn-lg">Continue Shopping</a>
                                    </div>
                                    <div class="panel-footer"></div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </body>

                </html>
<?php
            }
        }
    }
} ?>