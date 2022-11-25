<?php
	include 'service/loginManager.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="shortcut icon" href="images/" />
    <title>Employee Management</title>
  </head>
  <body>
		<div id="background">
			<div id="user_img"></div><br>
			<h1>Admin Login</h1>
			<form action="" method="POST">
				<div class="frm">
					<hr>
					<label style="font-size: 23px; color:red; text-align: center; margin-left: 20px;">
						<?php
							if (isset($msg)) {
								echo $msg; 
							}
							
							//echo $_SESSION['username'];  
						 ?>
						 </label>
					<br>
					<div class="a">
						<label style="margin-left: 5px;margin-bottom:3px;font-weight:bold; color: white; ">User Name </label>
						<input id="input-box" type="text" placeholder="Username" name="username">
					</div>
					<div class="a">
						<label style="margin-left: 5px;font-weight:bold; color: white; ">Password </label>
						<input id="input-box" type="password" placeholder="Password" name="password">
					</div>

					<div class="btn">
						<input id="button" type="submit" name="login" value="Login">
					</div>
				</div>
			</form>
		</div>

	</body>
</html>