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
            <a class="nav-link btn btn-outline-light border-0 p-1 text-success" href="./ecart.php">E-Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light border-0 p-1 text-success" href="./profile.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light border-0 p-1 text-success" href="./login.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </section>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-3 col-6 text-center mb-5">
        <a href="./post.php" target="blank" class="btn btn-outline-danger border-0 text-danger">Post</a>
      </div>
      <div class="col-md-3 col-6 text-center mb-5">
        <a href="./viewpost.php" target="blank" class="btn btn-outline-danger border-0 text-danger">View Post</a>
      </div>
      <div class="col-md-3 col-6 text-center mb-5">
        <a href="./post.php" target="blank" class="btn btn-outline-danger border-0 text-danger">Profile</a>
      </div>
      <div class="col-md-3 col-6 text-center mb-5">
        <a href="./post.php" target="blank" class="btn btn-outline-danger border-0 text-danger">E Cart</a>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>