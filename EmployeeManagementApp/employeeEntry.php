
<?php include 'inc/dbAndSession.php'; ?>
<?php include 'insertemployeeAction.php'; ?>





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

                          					<?php 
												$sql2  = "SELECT * from employeinfo ORDER BY employeid DESC LIMIT 1";
					                            $result2 = mysqli_query($cn, $sql2);
					                            $row2 = mysqli_fetch_array($result2);

					                            if ($row2 > 0) {
					                            	$empid = $row2['employeid'];
					                            
													$str_arr = explode ("-", $empid); 
													$empid0 = $str_arr['0'];
													$empid1 = $str_arr['1'];

													$empidOne = (int)$empid1+1;
													$employid = $empid0."-".$empidOne;
					                            }else{
					                            	$employid = "Emp-1001";
					                            }
											 ?>
											<div class="col-md-6">
												<div class="form-group">												
													<input  type="text" required="" name="employeid" value="<?php echo $employid; ?>">
												</div>
											
												<div class="form-group">
													<input type="text" name="fathername" placeholder="FatherName">
												</div>
												<div class="form-group">
													<input type="text" required="" name="phone" placeholder="Phone">
												</div>
												<div class="form-group">
													<select name="gender">
                         								<option selected>Gender</option>
                         								<option value="Male">Male</option>
                         								<option value="Female">Female</option>
                            						</select>
												</div>
												<div class="form-group">
													<select name="department" required="">
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
                         								<option value="AB+">AB+</option>
                         								<option value="AB-">AB-</option>
                         								<option value="O+">O+</option>
                         								<option value="O-">O-</option>
                            						</select>
												</div>
												<div class="form-group">
													<input class="submit-btn" type="submit" name="save" value="Save">
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<input type="text" name="name" required="" placeholder="Name">
												</div>
												<div class="form-group">
													<input type="text" name="mothername" placeholder="MotherName">
												</div>
												<div class="form-group">
													<input type="text" required="" name="email" placeholder="Email">
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