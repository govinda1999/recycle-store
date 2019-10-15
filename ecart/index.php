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
  <style></style>
</head>

<body>
  <div class="wait overlay">
    <div class="loader"></div>
  </div>
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
    <p class="text-center h1 text-info">Our Products</p>
  </div>
  <div></div>
  <div class="container">
    <div class="row mt-5" id="get_product">

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