<?php
session_start();
if (!isset($_SESSION["id"])) {
  header("location:http://localhost/recycle-store/login.php");
}

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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
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
            <a class="nav-link btn btn-outline-light border-0 p-1 text-success text-uppercase" href="../dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light border-0 p-1 text-success text-uppercase" href="./index.php">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light border-0 p-1 text-success text-uppercase" href="./cart.php">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light border-0 p-1 text-success text-uppercase" href="./order.php">Order</a>
          </li>
        </ul>
      </div>
    </nav>
  </section>

  <!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" style="height:100vh">
        <img class="d-block w-100 h-100" src="../image/nature.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Start Shopping</h5>
          <p>Hello User</p>
        </div>
      </div>
    </div>
  </div> -->


  <div class="container mt-5">
    <p class="text-center h1 text-info">Our Products</p>
  </div>
  <div class="container mt-5">
    <div id="product_msg"></div>
  </div>
  <div></div>
  <div class="container">
    <div class="row mt-5 justify-content-center" id="get_product">

    </div>
  </div>
  <div class="container-fluid mt-5 bg-warning">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4 col-10 mb-5 mt-5 text-white">
          <p>
            <i class="fas fa-map-marker-alt"></i><span class="pl-3">Kjsce Vidyavihar, Mumbai</span>
          </p>
          <p>
            <i class="fas fa-phone"></i><span class="pl-3">22551155</span>
          </p>
          <p>
            <i class="fas fa-envelope"></i><span class="pl-3 ">support@company.com</span>
          </p>
        </div>
        <div class="col-md-4 col-10 mb-5 mt-5 text-white">
          <div>
            <h3 class="font-play">About the Company</h3>
            <p class="text-justify text-secondary">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
          <a href="https://facebook.com" target="blank" class="text-secondary"><i class="fab fa-facebook-square fa-lg"></i></a>
          <a href="https://twitter.com" target="blank" class="text-secondary pl-1"><i class="fab fa-twitter-square fa-lg"></i></a>
          <a href="https://linkedin.com" target="blank" class="text-secondary pl-1"><i class="fab fa-linkedin fa-lg"></i></a>
          <a href="https://github.com" target="blank" class="text-secondary pl-1"><i class="fab fa-github-square fa-lg"></i></a>
        </div>
      </div>
      <div class="row justify-content-start">
        <div class="col-md-8 col-12">
          <p class="text-secondary">
            Copyright <span class="text-success">RecycleStore</span> 2019. All
            Rights Reserved
          </p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    < script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity = "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin = "anonymous" >
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>