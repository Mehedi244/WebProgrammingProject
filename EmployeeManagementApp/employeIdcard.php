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
								<div class="panel-header">Employe Id card Generate</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12">
											<div id="emp_details_r" class="emp_details">
											<div class="row">
												<div class="col-md-6"></div>
												<div class="col-md-6">
													<form action="" method="POST">
														<div class="form-group">
															<input id="searchID" type="text" name="employeid" placeholder="Emp-1001">
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
									                        if ($row) {
									                        	
									                        
													 ?>

													 <div class="id_card_main">
													 	<div class="id_card">
														 	<div class="id_card_heading">
														 		<div class="id_card_logo_box">
														 			<img src="images/nssl.png">
														 		</div>
														 		<span>Netsoft Solution Ltd.</span>
														 		
														 	</div>
														 	<div class="id_card_body">
														 		<div class="id_card_img_box">
														 			<img src="images/<?php echo $row['image'] ?>">
														 		</div>
														 		<p><?php echo $row['name']; ?></p>
														 		<p><?php echo $row['designation']; ?></p>
														 		<div class="id_card_body_info">

														 			<table id="id_card_table">
														 				<tr>
														 					<td>Employe ID</td>
														 					<td>: <?php echo $row['employeid']; ?></td>
														 				</tr>
														 				<tr>
														 					<td>Department</td>
														 					<td>: <?php echo $row['department']; ?></td>
														 				</tr>
														 				<tr>
														 					<td>Blood Group</td>
														 					<td>: <?php echo $row['bloodgroup']; ?></td>
														 				</tr>
														 				<tr>
														 					<td>Phone</td>
														 					<td>: <?php echo $row['phone']; ?></td>
														 				</tr>
														 				<tr>
														 					<td>Email</td>
														 					<td>: <?php echo $row['email']; ?></td>
														 				</tr>
														 			</table>
															 		
														 		</div>

														 		
														 		<p><?php echo $row['barcode'] ?></p>
														 		
															 	
														 	</div>
													 	</div>
													 </div>
													 <div style="margin-top: 10px;" class="id_card_main">
													 	<div class="id_card_back">
														 	<div class="id_card_heading_back">
														 		<div class="id_card_logo_box_back">
														 			<img src="images/nssl.png">
														 		</div>
														 		<span style="font-size: 22px;">Netsoft Solution Ltd.</span>
														 		
														 	</div>
														 	<div class="id_card_body_back">
														 		
														 		<p>Validity: <?php echo "Feb'19 - Jan'23"; ?></p>
														 		<p>Mirpur-2,Dhaka-1216</p>
														 		<p>Phone : 0199999999</p>
														 		<p>Cell : +8801994477977 </p>
														 		<p>Email : Mehedikhan@gmail.com </p>
														 		<p>Website : mehedikhan.ml </p>

														 		<p id="back_side_barcode" >barcode</p>
														 		<div class="sinature">
														 			<div class="signature_body">
														 				<hr>
														 				<p>Register</p>
														 			</div>
														 		</div>
															 	
														 	</div>
													 	</div>
													 </div>

													 <?php }
														else{
															echo "EmpID Not Found";
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
				</div>
			</div>
		</section><!-- Close Body Section -->
	</div> <!-- close container -->

<?php include 'inc/footer.php'; ?>