<?php 
	
	if (isset($_POST['update'])) {
	  $i = $_POST['id'];
      $employeid = $_POST['employeid'];
      $name = $_POST['name'];
      $fathername = $_POST['fathername'];
      $mothername = $_POST['mothername'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];
      $address = $_POST['address'];
      $birthdate = $_POST['birthdate'];
      $department = $_POST['department'];
      $salary = $_POST['salary'];
      $designation = $_POST['designation'];
      $bloodgroup = $_POST['bloodgroup'];

      // img
      $image =$_FILES['image']['name'];
      $image_size =$_FILES['image']['size'];
      $image_type =$_FILES['image']['type'];
      $image_temp_loc =$_FILES['image']['tmp_name'];
      $image_store = "images/".$image;
      move_uploaded_file($image_temp_loc, $image_store);

      $password = 1234;

      if ($image == "") {
      	$sql = "UPDATE employeinfo SET 
	      employeid = '$employeid',
	      name = '$name',
	      fathername = '$fathername',
	      mothername = '$mothername',
	      phone = '$phone',
	      email = '$email',
	      gender = '$gender',
	      address = '$address',
	      birthdate = '$birthdate',
	      department = '$department',
	      salary = '$salary',
	      designation = '$designation',
	      bloodgroup = '$bloodgroup'
	       WHERE id = '$i'";
      }
      else{
      	$sql = "UPDATE employeinfo SET 
	      employeid = '$employeid',
	      name = '$name',
	      fathername = '$fathername',
	      mothername = '$mothername',
	      phone = '$phone',
	      email = '$email',
	      gender = '$gender',
	      address = '$address',
	      birthdate = '$birthdate',
	      department = '$department',
	      salary = '$salary',
	      designation = '$designation',
	      bloodgroup = '$bloodgroup',
	      image = '$image'
	       WHERE id = '$i'";
      }

      


      $insert = mysqli_query($cn,$sql);

      if ($insert) {
      	$msg= "Data Update Success";
      }
      else{
      	$msg= "Data Update Fail..";
      }

      
}

 ?>