<?php
session_start();
if (!isset($_SESSION["id"])) {
  header("location : login.php");
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
  <div class="container-fluid">
    <div class='row justify-content-center'>
      <div class='col-sm-8 col-10 col-lg-4 col-md-6 text-capitalize shadow-lg bg-white' style="margin-top: 10vh">
        <h1 class='text-center pt-2 mb-5 font-play text-info'>
          Post
        </h1>
        <form method="post" action="insertpost.php">
          <input class='w-100 border border-top-0 border-left-0 border-right-0 border-primary rounded-bottom mb-5 pl-2 caret-blue pb-1' type='text' placeholder='Title...' name='title' />
          <br />
          <textarea class="w-100 border border-primary border-top-0 border-left-0 border-right-0 rounded mb-5 pl-2 caret-blue pt-1" placeholder="Description..." name="description"></textarea>
          <br />
          <p class='text-center  mb-4'>
            <button class='btn rounded btn-outline-success border-0 shadow' type="submit">
              Submit
            </button>
          </p>
        </form>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>