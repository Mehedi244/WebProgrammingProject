
<!DOCTYPE html>
<html>
<head>
	<title>EIMS</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
	<section>
			<div  class="row">
				<div class="menu">
					<div class="col-md-1">
					<div class="logo">
						<div class="logo-box">
							EIMS APP
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<div class="menu-text">
						<nav>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="employeeEntry.php">Add Emp</a></li>
								<li><a href="employeelist.php">Emp List</a></li>
								<li><a href="">Emp ID</a></li>
								<li><a href="">Report</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="col-md-2">
					<div class="login">
						<a href="?out=<?php echo $_SESSION['username']; ?>">Logout</a>
					</div>
				</div>
				</div>
			</div>
		</section><!-- close Header -->