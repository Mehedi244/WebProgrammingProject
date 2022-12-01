<?php include 'inc/dbAndSession.php'; ?>



<?php include 'inc/header.php'; ?>
<link rel="stylesheet" type="text/css" href="css/form.css">
	<div class="container">
		<section id="body-section-main">
			<div class="row">
				<div class="col-md-12">
					<div class="body-section">
						<div class="myfrom">
							<div class="panel">
								<div class="panel-header">Employe Report</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12">
											<div class="emp_details">
											<div class="row">
												<div class="col-md-12">
													<form action="" method="POST">
														<div class="form-group">
															<input id="search" type="text" name="employeid" placeholder="Emp-1001">
															<input id="search_btn" type="submit" name="search" value="Search">
														</div>
													</form>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<?php 
													if (isset($_POST['search'])) {
									                       $i = $_POST['employeid'];
											
									                        $sql2 = "SELECT * FROM employeinfo WHERE employeid = '$i'";
									                        $run2 = mysqli_query($cn,$sql2);
									                        $row = mysqli_fetch_array($run2);

									                        $sql4 = "SELECT * FROM employepassword WHERE employeid = '$i'";
									                        $run4 = mysqli_query($cn,$sql4);
									                        $rowTwo = mysqli_fetch_array($run4);




									                        if ($row) {
									                        	
									                        
													 ?>
													<div class="info_header">
														<h2><?php echo $row['name']; ?></h2>
														<p><?php echo $row['address'] ?></p>
														<p>Phone: <?php echo $row['phone']; ?></p>
														<p>Email: <?php echo $row['email']; ?></p>

													</div>
													<div class="emp_details_img_box">
														<img src="images/<?php echo $row['image']; ?>">
													</div>
												</div>

											
											</div>	

											<div class="row">
												<div class="col-md-12">
													<div class="info_heading">
														<h2>Personal Informations</h2>
													</div>
													<div class="info_body">
														<table id="table_1">
															
															<tbody>
																<tr>
																	<td>EmployeID</td>
																	<td>: <?php echo $row['employeid'] ?></td>
																</tr>
																<tr>
																	<td>Name</td>
																	<td>: <?php echo $row['name'] ?></td>
																</tr>
																<tr>
																	<td>Father Name</td>
																	<td>: <?php echo $row['fathername'] ?></td>
																</tr>
																<tr>
																	<td>Mother Name</td>
																	<td>: <?php echo $row['mothername'] ?></td>
																</tr>
																<tr>
																	<td>Gender</td>
																	<td>: <?php echo $row['gender'] ?></td>
																</tr>
																<tr>
																	<td>Department</td>
																	<td>: <?php echo $row['department'] ?></td>
																</tr>
																<tr>
																	<td>Designation</td>
																	<td>: <?php echo $row['designation'] ?></td>
																</tr>
																<tr>
																	<td>Salary</td>
																	<td>: <?php echo $row['salary'] ?></td>
																</tr>
																<tr>
																	<td>Blood Group</td>
																	<td>: <?php echo $row['bloodgroup'] ?></td>
																</tr>
																
																<tr>
																	<td>Birth Date</td>
																	<td>: <?php echo $row['birthdate'] ?></td>
																</tr>

															


															</tbody>
														</table>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-12">
													<div class="info_heading">
														<h2>User Informations</h2>
													</div>
													<div class="info_body">
														<table id="table_1">
															<?php 
																if ($rowTwo) {
																	
																
															 ?>
															<tbody>
																<tr>
																	<td>EmployeID</td>
																	<td>: <?php echo $rowTwo['employeid'] ?></td>
																</tr>
																<tr>
																	<td>Password</td>
																	<td>: <?php echo $rowTwo['password'] ?></td>
																</tr>
												
															</tbody>
														<?php }else{echo "Data Not Found!..";} ?>
														</table>
													</div>
												</div>
											</div>

											<?php }
												else{
													echo "Employe Not found..";
												}
											?>

												<?php } ?>



										</div>							
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- Close Body Section -->
	</div> <!-- close container -->

<?php include 'inc/footer.php'; ?>