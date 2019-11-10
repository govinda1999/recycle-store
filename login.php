<!DOCTYPE html>
<html lang="en">

<head>
   <title>Recycle Store</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link href="https://fonts.googleapis.com/css?family=DM+Serif+Display:400,400i|Roboto+Mono&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="css/css/animate.css">
   <link rel="stylesheet" href="css/css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/css/jquery.fancybox.min.css">

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
   <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
   <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
   <link rel="stylesheet" href="css/css/aos.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">

   <!-- Theme Style -->
   <link rel="stylesheet" href="css/css/style.css">
   <link rel="stylesheet" href="css/Home/index.css">
</head>

<body>

   <header role="banner">
      <nav class="navbar navbar-expand-lg  bg-dark">
         <div class="container-fluid">
            <a class="navbar-brand " href="index.php">RecycleStore</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarsExample05">
               <ul class="navbar-nav pl-md-5 ml-auto">
                  <li class="nav-item">
                     <a class="nav-link " href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active" href="login.php">Login</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="signup.php">Signup</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link " href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="contact.php">Contact</a>
                  </li>
               </ul>

            </div>
         </div>
      </nav>
   </header>

   <div class="slider-item overlay" data-stellar-background-ratio="0.5" style="background-image: url('image/nature.jpg');">
      <div class="container">
         <div class="row slider-text align-items-center justify-content-center">
            <div class="col-lg-12 text-center col-sm-12">
               <h1 class="mb-1" data-aos="fade-up" data-aos-delay="100">Login</h1>
            </div>
         </div>
      </div>
   </div>

   <div class="container-fluid login">
      <div class='row justify-content-center'>
         <div class='col-sm-8 col-10 col-lg-4 col-md-6 text-capitalize shadow-lg bg-white' style="margin-top: 10vh">
            <h1 class='text-center pt-2 mb-5 font-play text-gradient-orange' data-aos="fade-up" data-aos-delay="100">
               Welcome
            </h1>
            <form method="post" action="verifylogin.php">
               <input class='w-100 border border-top-0 border-left-0 border-right-0 border-primary rounded-bottom mb-5 pl-2 caret-blue' type='email' placeholder='Email' name='email' />
               <br />
               <input class='w-100 border border-top-0 border-left-0 border-right-0 border-primary rounded-bottom mb-5 pl-2 caret-blue' type='password' placeholder='Password' name='password' />
               <br />
               <span class="pl-3"></span> <input type="radio" name="usertype" value="user" class="form-check-input" id="user" checked />
               <label for="user" class="form-check-label">User</label>
               <br />
               <span class="pl-3"></span><input type="radio" name="usertype" value="admin" class="form-check-input " id="useradmin" />
               <label for="useradmin" class="form-check-label ">Admin</label>
               <br />
               <p class='text-center  mb-4'>
                  <button class='btn rounded btn-outline-success border-0 shadow' type="submit">
                     Login
                  </button>
               </p>
            </form>
            <p className='mb-2'>
               Not Registered ?
               <a href="./signup.php" style='text-decoration: none'>
                  <span>Create Account</span>
               </a>
            </p>
         </div>
      </div>
   </div>
   </div>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="js/js/jquery-3.2.1.min.js"></script>
   <script src="js/js/jquery-migrate-3.0.1.min.js"></script>
   <script src="js/js/popper.min.js"></script>
   <script src="js/js/bootstrap.min.js"></script>
   <script src="js/js/owl.carousel.min.js"></script>
   <script src="js/js/jquery.waypoints.min.js"></script>
   <script src="js/js/jquery.fancybox.min.js"></script>
   <script src="js/js/jquery.stellar.min.js"></script>
   <script src="js/js/aos.js"></script>
   <script src="js/js/main.js"></script>
</body>

</html>