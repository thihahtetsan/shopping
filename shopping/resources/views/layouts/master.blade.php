<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.css">
  <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- topmenubar -->
  <section class="bg-primary p-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-6 text-white">
          <i class="fas fa-envelope mx-3"></i>contacts@mysite.com
          <i class="fab fa-facebook-square mx-3"></i>fb.com/myshopping
        </div>
      </div>
    </div>
  </section>
  <!-- topmenubar -->
  <!-- navbar -->
  <nav class="  navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">#WATERLARA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2 form-control-sm" type="search" placeholder="Search" aria-label="Search">
          <button class="btn color-main text-white my-2 my-sm-0 btn-sm" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </form>
      </div>
    </div>
  </nav>
  <!-- navbar -->


              @yield('content')

     
<section class="bg-dark py-3 text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        &copy; All right reserved. Developed By #waterlarateam.
      </div>
    </div>
  </div>
</section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/js/bootstrap.js" charset="utf-8"></script>
</body>

</html>
