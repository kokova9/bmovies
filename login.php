<?php
require('connect.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</head>
<body style="margin:0;">
<div class="d-flex justify-content-center">
<div class="container" style="width=100%;margin-top:50px">
  <h1 class="text-center" >Login System</h1>
  <form class="px-4 py-3" style="margin-top:30px" method="POST" action="logindb.php">
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label">Username</label>
      <input type="username" class="form-control" id="exampleDropdownFormEmail1" placeholder="Username" name="username">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" name="password">
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
          Remember me
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary" name="log_user">Sign in</button>
  </form>
  <h4 class="text-center" style="margin-bottom:20px;color:red;"><?php 
  echo $_SESSION['failed']; 
  unset($_SESSION['failed']); 
  ?></h4>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="register.php">New around here? Sign up</a>
  <a class="dropdown-item" href="#">Forgot password?</a>
</div>
</div>
</body>
</html>