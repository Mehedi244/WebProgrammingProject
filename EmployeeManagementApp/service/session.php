<?php 
include 'connection/db.php';
session_start();
  if(isset($_GET['out'])){
    session_destroy();
    header("location: login.php");
  }

  if(!$_SESSION['username']){
    session_destroy();
    header("location: login.php");
  }
 ?>