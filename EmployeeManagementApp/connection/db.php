<?php 
	//connection
	$cn = mysqli_connect("localhost", "root", "", "eimsdb");

	if (mysqli_connect_errno()) {
		echo "connection fail...";
	}

 ?>