<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <title>Recycle Store</title>
      <link
         rel="stylesheet"
         href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
         />
      <link
         href="https://fonts.googleapis.com/css?family=Dancing+Script|Great+Vibes|PT+Sans|Playfair+Display|Tangerine&display=swap"
         rel="stylesheet"
         />
      <link
         rel="stylesheet"
         href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
         />
      <link rel="stylesheet" href="./css/Home/index.css" />
      <link rel="stylesheet" href="./css/External/bootstrap.min.css" />
      <link
         href="https://fonts.googleapis.com/css?family=Comfortaa|Fira+Sans+Condensed|Merriweather|Varela+Round|Yanone+Kaffeesatz&display=swap"
         rel="stylesheet"
         />
   </head>
   <body>
      <section id="nav-bar" style="position: sticky;top:0">
         <nav class="navbar navbar-expand-lg navbar-dark bg-login bg-success">
            <a class="navbar-brand" href="index.html"
               ><img src="./image/logo.png" alt="logo" style="height: 40px"
               /></a>
            <button
               class="navbar-toggler"
               type="button"
               data-toggle="collapse"
               data-target="#navbarNav"
               aria-controls="navbarNav"
               aria-expanded="false"
               aria-label="Toggle navigation"
               >
            <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item ">
                     <a
                        class="nav-link btn btn-outline-light border-0 p-1 text-success"
                        href="./index.html"
                        >Home</a
                        >
                  </li>
                  <li class="nav-item">
                     <a
                        class="nav-link btn btn-outline-light border-0 p-1 text-success"
                        href="./login.html"
                        >Login</a
                        >
                  </li>
                  <li class="nav-item">
                     <a
                        class="nav-link btn btn-outline-light border-0 p-1 text-success"
                        href="./signup.html"
                        >Sign Up</a
                        >
                  </li>
                  <li class="nav-item">
                     <a
                        class="nav-link btn btn-outline-light border-0 p-1 text-success"
                        href="./about.html"
                        >About Us</a
                        >
                  </li>
                  <li class="nav-item">
                     <a
                        class="nav-link btn btn-outline-light border-0 p-1 text-success"
                        href="./contact.html"
                        >Contact us</a
                        >
                  </li>
               </ul>
            </div>
         </nav>
      </section>
      <div class="container-fluid login">
         <div class='row justify-content-center' >
            <div class='col-sm-8 col-10 col-lg-4 col-md-6 text-capitalize shadow-lg bg-white' style="margin-top: 10vh">
               <h1
                  class='text-center pt-2 mb-5 font-play text-gradient-orange'>
                  Welcome 
               </h1>
               <form method="post" action="#">
                  <input
                     class='w-100 border border-top-0 border-left-0 border-right-0 border-primary rounded-bottom mb-5 pl-2 caret-blue'
                     type='email'
                     placeholder='Email'
                     name='email'
                     />
                  <br />
                  <input
                     class='w-100 border border-top-0 border-left-0 border-right-0 border-primary rounded-bottom mb-5 pl-2 caret-blue'
                     type='password'
                     placeholder='Password'
                     name='password'
                     />
                  <br />
                  <span class="pl-3"></span> <input type="radio" name="usertype" value="user" class="form-check-input" id="user" checked/>
                  <label for="user" class="form-check-label">User</label>
                  <br/>
                  <span class="pl-3"></span><input type="radio" name="usertype" value="admin" class="form-check-input " id="useradmin" />
                  <label for="useradmin" class="form-check-label ">Admin</label>
                  <br/>
                  <p class='text-center  mb-4'>
                     <button
                        class='btn rounded btn-outline-success border-0 shadow' type="submit"
                        >
                     Login
                     </button>
                  </p>
               </form>
               <p className='mb-2'>
                  Not Registered ?
                  <a href="./signup.html" style='text-decoration: none'>
                  <span>Create Account</span>
                  </a>
               </p>
            </div>
         </div>
      </div>
      </div>
      <script
         src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
         integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
         crossorigin="anonymous"
         ></script>
      <script
         src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
         integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
         crossorigin="anonymous"
         ></script>
      <script
         src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
         integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
         crossorigin="anonymous"
         ></script>
   </body>
</html>

