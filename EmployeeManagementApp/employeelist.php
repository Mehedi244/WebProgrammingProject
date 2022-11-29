<?php include 'inc/dbAndSession.php'; ?>

<?php 
	if(isset($_GET['del'])){
    $i = $_GET['del'];

    if ($i) {
    	$sql = "DELETE FROM employeinfo WHERE id = '$i'";
    	mysqli_query($cn, $sql);
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
								<div class="panel-header">Employe List</div>
								<div class="panel-body">
									<table class="table table-hover">
						                <thead>
						                    <tr>
					                          <th>ID</th>
					                          <th>Picture</th>
					                          <th>Emp_ID</th>
					                          <th>Name</th>
					                          <th>Dept</th>
					                          <th>Gender</th>
					                          <th>Birthdate</th>
					                          <th>Salary</th>
					                          <th>Operations</th>
				                        	</tr>
						                </thead>
						                <tbody>
						                	<?php 
					                          $sql  = "SELECT * from employeinfo";
					                            $i = 0;
					                            $result = mysqli_query($cn, $sql);

					                              while ($row = mysqli_fetch_array($result)) {
					                              $i++;

					                          ?>
					                       <tr>
					                          <td ><?php echo $i ?></td>
					                          <td ><img style="width: 25px;" src="images/<?php echo $row['image']; ?>"></td>
					                          <td ><?php echo $row['employeid']; ?></td>
					                          <td ><?php echo $row['name']; ?></td>
					                          <td ><?php echo $row['department']; ?></td>
					                          <td ><?php echo $row['gender']; ?></td>
					                          <td ><?php echo $row['birthdate']; ?></td>
					                          <td ><?php echo $row['salary']; ?></td>
					                          <td>
					                          	<a id="edit_btn" href="employeupdate.php?edit=<?php echo $row['id']; ?>">Update</a>

					                          	<a id="details_btn" href="details.php?details=<?php echo $row['id']; ?>">Details</a>
					                          
					                          	<a id="delete_btn" href="employeelist.php?del=<?php echo $row['id']; ?>">Delete</a>
					                          </td>
					                          
					                          <?php } ?>
						                    </tr>
						                   
						                </tbody>
						            </table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- Close Body Section -->
	</div> <!-- close container -->

<?php include 'inc/footer.php'; ?>