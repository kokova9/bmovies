<?php
include('connect.php');
session_start();
$user = $_SESSION['user'];

$query = mysqli_query($con, "SELECT * FROM user_list where username = '$user'");
$result = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>BrownMovies ชีวิตนี้มีแต่หนัง</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </head>

<body style="margin:0;">
<?php 
if(isset($_SESSION['user'])) { 
?>
<div class="d-flex justify-content-center">
<div class="container" style="width=100%;margin-top:50px">
  <h1 class="text-center" >Edit System</h1>
  <form class="px-4 py-3" style="margin-top:30px" method="POST" action="changepw.php">
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label">Username</label>
      <input type="username" class="form-control" id="exampleDropdownFormUsername1" placeholder="Username" name="username" value="<?php echo $_SESSION['user'] ?>" disabled>
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" name="password" required>
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label">Points</label>
      <input type="number" class="form-control" id="exampleDropdownFormEmail1" name="point" value="<?=$result['points']?>" disabled>
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label">Rank</label>
      <input type="text" class="form-control" id="exampleDropdownFormEmail1" name="rank" value="<?=$result['rank']?>" disabled>
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
          Remember me
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary" name="pwd_user">Sign up</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="login.php">You have account? Sign in</a>
</div>
</div>



<!-- footer website -->
<footer class="footer mt-auto py-3 bg-light text-center">
  <div class="container">
    <span class="text-muted">ดูหนังออนไลน์ฟรี ดูหนังดีๆ ต้องที่นี่ <a href="testphp.php" class="text-decoration-none">BrownMovies</a></span>
  </div>
  <span class="text-muted">Create by MahapolShop.</span>
</footer>

<?php 
} else { 
echo "<script>window.location.href = 'index.php'</script>";
session_destroy();
} 
?>
    </body>
</html>