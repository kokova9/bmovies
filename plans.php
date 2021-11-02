<?php
include('connect.php');
session_start();
?>


<html>
    <head>
        <title>BrownMovies ชีวิตนี้มีแต่หนัง</title>
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
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="plans.php">Plans</a>
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
<main>
<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Pricing</h1>
      <p class="fs-5 text-muted">เงินทุกบาททุกสตางค์ที่เติมเงินเข้ามาจะถูกนำไปซื้อเหล้าซื้อยามาเสพ</p>
    </div>
    <div class="row-cols-1 row-cols-md-3 mb-3 text-center d-flex justify-content-evenly" style="width:100%">
      <div class="col-md-3">
        <div class="card mb-5 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Bronze</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">50THB<small class="text-muted fw-light">/7d</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>ดูหนังได้ทุกเรื่อง</li>
              <li>ไม่จำกัดเวลาดู</li>
              <li>24hr support</li>
              <li>ดูพร้อมกันได้ 2 เครื่อง</li>
              <li>ใช้งานได้ 7 วัน</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Buy now</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Silver</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">150THB<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            <li>ดูหนังได้ทุกเรื่อง</li>
              <li>ไม่จำกัดเวลาดู</li>
              <li>24hr support</li>
              <li>ดูพร้อมกันได้ 5 เครื่อง</li>
              <li>ใช้งานได้ 1 เดือน</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Buy now</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Gold</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">1000THB<small class="text-muted fw-light">/inf</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            <li>ดูหนังได้ทุกเรื่อง</li>
              <li>ไม่จำกัดเวลาดู</li>
              <li>24hr support</li>
              <li>ดูพร้อมกันได้ 99 เครื่อง</li>
              <li>ใช้งานได้ไม่จำกัดวัน</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
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
