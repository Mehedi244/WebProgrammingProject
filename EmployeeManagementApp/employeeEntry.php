<?php include 'inc/dbAndSession.php'; ?>

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



<?php include 'inc/header.php'; ?>
<link rel="stylesheet" type="text/css" href="css/form.css">
	<div class="container">
		<section id="body-section-main">
			<div class="row">
				<div class="col-md-12">
					<div class="body-section">
						<div class="myfrom">
							<div class="panel">
								<div class="panel-header">Employe Entry</div>
								<div class="panel-body">
									<form action="" method="post" enctype="multipart/form-data">
										<div class="row">
											<p id="succesmsg">
                            					<?php if (isset($msg)) {
                                					echo $msg;
                               						} 
                               					?>
                          					</p>
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" name="employeid" placeholder="Emp-1001">
												</div>
												<div class="form-group">
													<input type="text" name="fathername" placeholder="FatherName">
												</div>
												<div class="form-group">
													<input type="text" name="phone" placeholder="Phone">
												</div>
												<div class="form-group">
													<select name="gender">
                         								<option selected>Gender</option>
                         								<option value="Male">Male</option>
                         								<option value="Female">Female</option>
                            						</select>
												</div>
												<div class="form-group">
													<select name="department">
                         								<option selected>Deparment</option>
                         								<option value="IT">IT</option>
                         								<option value="IOT">IOT</option>
                         								<option value="Accounting">Accounting</option>
                         								<option value="Human Resources">Human Resources</option>
                            						</select>
												</div>
												<div class="form-group">
													<input type="text" name="salary" placeholder="Salary">
												</div>
												<div class="form-group">
													<select name="bloodgroup">
                         								<option selected>Bloodgroup</option>
                         								<option value="A+">A+</option>
                         								<option value="A-">A-</option>
                            						</select>
												</div>
												<div class="form-group">
													<input class="submit-btn" type="submit" name="save" value="Save">
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<input type="text" name="name" placeholder="Name">
												</div>
												<div class="form-group">
													<input type="text" name="mothername" placeholder="MotherName">
												</div>
												<div class="form-group">
													<input type="text" name="email" placeholder="Email">
												</div>
												<div class="form-group">
													<input type="text" name="address" placeholder="Address">
												</div>
												<div class="form-group">
													<select name="designation">
                         								<option selected>Designation</option>
                         								<option value="Sr.software Engg">Sr.software Engg</option>
                         								<option value="Jr.software Engg">Jr.software Engg</option>
                            						</select>
												</div>
												<div class="form-group">
													<input type="date" name="birthdate">
												</div>
												<div class="form-group">
													<input type="file" name="image">
												</div>
												
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- Close Body Section -->
	</div> <!-- close container -->

<?php include 'inc/footer.php'; ?>