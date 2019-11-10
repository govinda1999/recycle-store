<?php
session_start();
if (!isset($_SESSION["id"])) {
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>DashBoard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Great+Vibes|PT+Sans|Playfair+Display|Tangerine&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
  <link rel="stylesheet" href="./css/Home/index.css" />
  <link rel="stylesheet" href="./css/External/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Comfortaa|Fira+Sans+Condensed|Merriweather|Varela+Round|Yanone+Kaffeesatz&display=swap" rel="stylesheet" />
</head>

<body>
  <section id="nav-bar" style="position: sticky;top:0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
      <a class="navbar-brand" href="./dashboard.php"><img src="./image/logo.png" alt="logo" style="height: 40px" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link btn btn-outline-light border-0 p-1 text-success" href="./dashboard.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light border-0 p-1 text-success" href="./post.php">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light border-0 p-1 text-success" href="./ecart/">E-Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light border-0 p-1 text-success" href="./profile.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light border-0 p-1 text-success" href="./logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </section>
  <div class="container mt-5">
    <p class="text-center h1 font-play">DashBoard</p>
  </div>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-3 col-6 mb-5 ">
        <div class="p-1 rounded" style="height:170px;background-image: linear-gradient(to right, #2CC3A8, #40E598);">
          <p class="h2 text-white mt-2 pl-2"><i class="far fa-comment fa-3x fa-flip-horizontal"></i></p>
          <a href="./post.php" class="btn btn-outline-white pr-5 h3 mb-3" style="float:right"><span class="h3 text-white">Post</span></a>
        </div>
      </div>
      <div class="col-md-3 col-6 mb-5 ">
        <div class="p-1 rounded" style="height:170px;background-image: linear-gradient(to right, #A158FC, #DC6ADC);">
          <p class="h2 text-white mt-2 pl-2"><i class="far fa-eye fa-3x "></i></p>
          <a href="./viewpost.php" class="btn btn-outline-white pr-5 h3 mb-3" style="float:right"><span class="h3 text-white">View Post</span></a>
        </div>
      </div>
      <div class="col-md-3 col-6 mb-5 ">
        <div class="p-1 rounded" style="height:170px;background-image: linear-gradient(to right, #8A71F8, #62B7F5);">
          <p class="h2 text-white mt-2 pl-2"><i class="far fa-user fa-3x "></i></p>
          <a href="./profile.php" class="btn btn-outline-white pr-5 h3 mb-3" style="float:right"><span class="h3 text-white">Profile</span></a>
        </div>
      </div>
      <div class="col-md-3 col-6 mb-5 ">
        <div class="p-1 rounded" style="height:170px;background-image: linear-gradient(to right, #FEAB37, #F8809B);">
          <p class="h2 text-white mt-2 pl-2"><i class="fas fa-shopping-cart fa-3x "></i></p>
          <a href="./ecart/" class="btn btn-outline-white pr-5 h3 mb-3" style="float:right"><span class="h3 text-white">Ecart</span></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-5 bg-warning">
    <div class="container">
      <div class="row justify-content-center">
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

        <div class="col-md-3 col-10 mb-5 mt-5 text-white">
          <h3 class="font-play">Contact</h3>
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
        <div class="col-md-3 col-10 mb-5 mt-5 text-white">
          <h3 class="font-play">Links</h3>
          <ul class="" style="list-style: none;">
            <li class="mt-1"><a href="./post.php" class="" style="text-decoration:none"><span class="h5 pl-1 text-dark">Post</span></a></li>
            <li class="mt-1"><a href="./ecart/" class="" style="text-decoration:none"><span class="h5 pl-1 text-dark">Ecart</span></a></li>
            <li class="mt-1"><a href="./profile.php" class="" style="text-decoration:none"><span class="h5 pl-1 text-dark">Profile</span></a></li>
            <li class="mt-1 mb-1"><a href="./viewpost.php" class="" style="text-decoration:none"><span class="h5 pl-1 text-dark">View Post</span></a></li>

          </ul>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>