<?php
include('connect.php');
session_start();
$id = @$_GET['id'];
if(!$id) {
    echo 'no id';
    exit;
  }
$query = mysqli_query($con, "SELECT * FROM data_movie where id = $id");
$result = mysqli_fetch_array($query);

$query_list = mysqli_query($con, "SELECT * FROM data_list where main_id = $id");
?>


<html>
    <head>
        <title><?=$result['name']?></title>
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
    <a class="navbar-brand" href="index.php">BrownMovies</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="plans.php">Plans</a>
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
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true" id="username"><?php 
      if(isset($_SESSION['user'])) {
        echo $_SESSION['user']; 
        }?></a>
        <a class="btn btn-outline-success" type="button" id="loginSystem" href="logout.php"><?php 
      if(isset($_SESSION['user'])) {
        echo 'Logout';
        }else{
        echo 'Login';
        }
        ?></a>
    </div>
  </div>
</nav>


<!-- main website -->
<main role="main">

  <div class="album py-5 bg-light">
    <div class="container">

    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?=$result['name']?></li>
  </ol>
</nav>

<div class="row">

  <div class="col-md-3">
    <div class="card mb-4 shadow-sm">
      <img src="<?=$result['img2']?>" alt="" while="100%" height="380" class="card-img-top">
    </div>
  </div>
  <div class="col-md-9">
    <div class="card mb-4 shadow-sm">
    <iframe width="100%" height="380" src="https://www.youtube.com/embed/<?=$result['video_ex']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div> 
  <div class="col-md-12">
        <div class="card shadow-sm text-center">รายการ</div>
    <div class="card mb-4 shadow-sm">
    <div class="list-group">
  <?php 
  while($result_list = mysqli_fetch_array($query_list)){
    echo '<a type="button" class="list-group-item list-group-item-action" href="play.php?id='.$id.'&list='.$result_list['part'].'">'.$result_list['name'].' Part '.$result_list['part'].'</a>';
  }
  ?>
</div>    
</div>
  </div> 
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