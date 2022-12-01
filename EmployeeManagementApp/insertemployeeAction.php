<?php 
	if (isset($_POST['save'])) {

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

      $barcode = substr(md5($employeid),0,7);

      $sql1 = "INSERT INTO employeinfo(employeid,name,fathername,mothername,phone,email,gender,
      address,birthdate,department,salary,designation,bloodgroup,image,barcode)

      values('$employeid','$name','$fathername','$mothername','$phone','$email','$gender','$address','$birthdate','$department','$salary','$designation','$bloodgroup','$image','$barcode')";
      $insert1 = mysqli_query($cn,$sql1);

       //employee password table
      $password = rand(1111,9999);

      $sql2 = "INSERT INTO employepassword(employeid,password) values('$employeid','$password')";
       $insert2 = mysqli_query($cn,$sql2);

       if ($insert1 && $insert2) {
       		$msg= "Data Inserted Success";
       }else{
       		$msg= "Data Inserted Fail..";
       }

         
}
 ?>