<?php
session_start();
include('connect.php');

if (isset($_SESSION['user'])) {
    session_destroy();
   header('location: index.php');
}else{
    header('location: login.php');
}
?>