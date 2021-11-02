<?php
?>


<html>
    <head>
        <title>eiei</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </head>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    </style>

    <body>

<!-- nav website -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BrownMovies</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Plans</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Topup</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Movie Catalog
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Sci-fi</a></li>
            <li><a class="dropdown-item" href="#">Drama</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Brown Secrets</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true" id="username">Username</a>
        <button class="btn btn-outline-success" type="submit" id="loginSystem">Login</button>
    </div>
  </div>
</nav>


<!-- main website -->
<main role="main">

  <div class="album py-5 bg-light">
    <div class="container">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Recent</li>
  </ol>
</nav>
<div class="row">

      <?php for($i=1;$i<=6;$i++) {
      ?>
      
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <a href="google.com" class="text-decoration-none">
            <img src="aktonine.png" alt="" while="100%" height="225">
            <div class="card-body">
              <p class="card-text text-center">MiTH PUBG aktonine Moment.</p>
          </a>    
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>  

      <?php } 
      ?>

      </div>
    </div>
  </div>

</main>


<!-- footer website -->
<footer class="footer mt-auto py-3 bg-light text-center">
  <div class="container">
    <span class="text-muted">ดูหนังออนไลน์ฟรี ดูหนังดีๆ ต้องที่นี่ <a href="testphp.php" class="text-decoration-none">BrownMovies</a></span>
  </div>
  <span class="text-muted">Create by MahapolShop.</span>
</footer>

    </body>
</html>