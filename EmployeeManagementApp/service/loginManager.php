<?php 

	
	session_start();
	include 'connection/db.php';

	if(isset($_POST['login'])){
			$u = $_POST['username'];
			$p = $_POST['password'];

			$sql = "SELECT * FROM adminlogin WHERE username = '$u' AND password = '$p'";
			$run = mysqli_query($cn, $sql);
			$row = mysqli_fetch_array($run);

			if(mysqli_num_rows($run) > 0){
				$_SESSION['username'] = $row['username'];
				header("location: index.php");
			}
			else{
				$msg = "<p style='color:red;text-align:center;margin:0px;'>Wrong pass or user</p>";


			}
		}

		if(isset($_SESSION['usr'])){
			header("location: index.php");
		}

 ?>