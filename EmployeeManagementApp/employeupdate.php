<?php include 'inc/dbAndSession.php'; ?>

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



<?php include 'inc/header.php'; ?>
<link rel="stylesheet" type="text/css" href="css/form.css">
	<div class="container">
		<section id="body-section-main">
			<div class="row">
				<div class="col-md-12">
					<div class="body-section">
						<div class="myfrom">
							<div class="panel">
								<div class="panel-header">Employe Update</div>
								<div class="panel-body">
									<?php 
				                      if (isset($_GET['edit'])) {
				                        $i = $_GET['edit'];

				                        $sql2 = "SELECT * FROM employeinfo WHERE id = '$i'";
				                        $run2 = mysqli_query($cn,$sql2);
				                        $row = mysqli_fetch_array($run2);
				                  	?>
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
													<input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
													<input type="text" name="employeid" placeholder="Emp-1001" value="<?php echo $row['employeid']; ?>">
												</div>
												<div class="form-group">
													<input type="text" name="fathername" placeholder="FatherName" value="<?php echo $row['fathername']; ?>">
												</div>
												<div class="form-group">
													<input type="text" name="phone" placeholder="Phone" value="<?php echo $row['phone']; ?>">
												</div>
												<div class="form-group">
													<select name="gender">
														<option>Gender</option>
                         								<option selected value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
                         								<option value="Male">Male</option>
                         								<option value="Female">Female</option>
                            						</select>
												</div>
												<div class="form-group">
													<select name="department">
                         								<option >Deparment</option>
                         								<option selected  value="<?php echo $row['department']; ?>"><?php echo $row['department']; ?></option>
                         								<option value="IT">IT</option>
                         								<option value="IOT">IOT</option>
                         								<option value="Accounting">Accounting</option>
                         								<option value="Human Resources">Human Resources</option>
                            						</select>
												</div>
												<div class="form-group">
													<input type="text" name="salary" placeholder="Salary" value="<?php echo $row['salary']; ?>">
												</div>
												<div class="form-group">
													<select name="bloodgroup">
                         								<option>Bloodgroup</option>
                         								<option selected value="<?php echo $row['bloodgroup']; ?>"><?php echo $row['bloodgroup']; ?></option>

                         								<option value="A+">A+</option>
                         								<option value="A-">A-</option>
                            						</select>
												</div>
												<div class="form-group">
													<input class="submit-btn" type="submit" name="update" value="Save">
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<input type="text" name="name" placeholder="Name" value="<?php echo $row['name']; ?>">
												</div>
												<div class="form-group">
													<input type="text" name="mothername" placeholder="MotherName" value="<?php echo $row['mothername']; ?>">
												</div>
												<div class="form-group">
													<input type="text" name="email" placeholder="Email" value="<?php echo $row['email']; ?>">
												</div>
												<div class="form-group">
													<input type="text" name="address" placeholder="Address" value="<?php echo $row['address']; ?>">
												</div>
												<div class="form-group">
													<select name="designation">
                         								<option selected>Designation</option>
                         								<option selected value="<?php echo $row['designation']; ?>"><?php echo $row['designation']; ?></option>
                         								<option value="Sr.software Engg">Sr.software Engg</option>
                         								<option value="Jr.software Engg">Jr.software Engg</option>
                            						</select>
												</div>
												<div class="form-group">
													<input type="date" name="birthdate" value="<?php echo $row['birthdate']; ?>">
												</div>
												<div class="form-group">
													<input type="file" name="image">
												</div>
												
											</div>
										</div>
									</form>
								<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- Close Body Section -->
	</div> <!-- close container -->

<?php include 'inc/footer.php'; ?>