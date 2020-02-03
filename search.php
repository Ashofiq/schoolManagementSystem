

<?php include('header.php'); ?>
<?php include('database.php'); ?>


		<div class="parent-wrapper" id="outer-wrapper">
			<!-- SIDE MENU -->
			<?php include('side_menu.php'); ?>

			
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-users"></i>ALL STUDENT</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class=" col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-user"></i>STUDENTS</h6>

									<form method="post" action="search.php">
										<input type="text" name="search" placeholder="search"><button name="submit" type="submit" class="btn btn-sm btn-success">search</button>
									</form>
						<h2>Search result</h2>
									<div class="inner-item">
										<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th><i class="fa fa-user"></i>NAME</th>
													<th><i class="fa fa-id-card"></i>FATHER NAME</th>
													<th><i class="fa fa-book"></i>CLASS</th>
													<th><i class="fa fa-cogs"></i>SECTION</th>
													<th><i class="fa fa-puzzle-piece"></i>ROLL #</th>
													<th><i class="fa fa-phone"></i>CONTACT #</th>
													<th><i class="fa fa-envelope-o"></i>EMAIL</th>
													
													<th><i class="fa fa-tasks"></i>ACTION</th>
												</tr>
											</thead>
											<tbody>
			<?php include('database.php');

				if(isset($_POST['submit'])){
					$search = $_POST['search'];

					$search = preg_replace('#[^0-9a-z]#i','', $search);

					$sql = "SELECT * FROM student WHERE first_name LIKE '%$search%' or student_id LIKE '%$search%'";
					$query = mysqli_query($connection, $sql);
					$res = mysqli_num_rows($query);
					if (empty($_POST['search'])) {
						echo '<p style="color:red">'.'write something'.'</p>';
					}else{
						
						foreach ($query as $key => $value) {

					
				?>			
												<tr>
													<td><?php echo $value['first_name']; ?></td>
													<td><?php echo $value['father_name']; ?></td>
													<td><?php echo $value['class']; ?></td>
													<td><?php echo $value['section']; ?></td>
													<td><?php echo $value['student_id']; ?></td>
													<td><?php echo $value['phone']; ?></td>
													<td><?php echo $value['email']; ?></td>
													<td class="action-link">
														<a class="edit" href="edit_student.php?student_id=<?php echo $value['student_id']; ?>" title="Edit"><i class="fa fa-edit"></i></a>
														<a class="delete" href="delete_student.php?student_id=<?php echo $value['student_id']; ?>" title="Delete" ><i class="fa fa-remove"></i></a>
													</td>
												</tr>
						<?php } 	
	
}
} ?>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-togggle-btn">
					<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
				</div>
				<?php include('footer.php'); ?>