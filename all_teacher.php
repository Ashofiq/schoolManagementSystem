<?php include('header.php'); ?>
 <?php include('database.php'); ?>

 <?php 
	if (isset($_GET['msg'])) {
		$msg = $_GET['msg'];
		?>
		<div class="alert alert-success text-center">
			<?php echo $msg;?>
		</div>
<?php } ?>

<?php 
	if (isset($_GET['msg1'])) {
		$msg1 = $_GET['msg1'];
		?>
		<div class="alert alert-success text-center">
			<?php echo $msg1;?>
		</div>
<?php } ?>
       	
		<div class="parent-wrapper" id="outer-wrapper">
			<!-- SIDE MENU -->
			<?php include('side_menu.php'); ?>

			
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-user-secret"></i>ALL TEACHER</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-user"></i>TEACHERS</h6>
					<form method="post" action="teacher_search.php">
						<div class="col-lg-6 ">
							<div class="input-group">
							 <input type="text" name="search" class="form-control" placeholder="Search for...">
							    <span class="input-group-btn">
							    <button class="btn btn-secondary" type="submit" name="submit">Go!</button>
							   </span>
							</div>
						</div>
					</form>




									<div class="inner-item">
										<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th><i class="fa fa-user"></i>NAME</th>
													<th><i class="fa fa-graduation-cap"></i>HIGHEST DEGREE</th>
													<th><i class="fa fa-building"></i>TEACHER ID</th>
													<th><i class="fa fa-phone"></i>PHONE #</th>
													<th><i class="fa fa-envelope-o"></i>EMAIL</th>
													<th><i class="fa fa-tasks"></i>ACTION</th>
												</tr>
											</thead>
											<tbody>
				<?php 
					$sql = "SELECT * FROM teacher";
					$obj = mysqli_query($connection, $sql);

					foreach ($obj as $key => $value) {
							
				?>
					<tr>
						<td><?php echo $value['first_name']." ".$value['last_name'] ; ?></td>
						<td><?php echo $value['highest_degree']; ?></td>
						<td><?php echo $value['teacher_id']; ?></td>
						<td><?php echo $value['phone']; ?></td>
						<td><?php echo $value['email']; ?></td>
						<td class="action-link">
						<a class="edit" href="view_teacher.php?teacher_id=<?php echo $value['teacher_id']; ?>" title="view"><i class="fa fa-eye" aria-hidden="true"></i></a>

						<a class="edit" href="edit_teacher.php?teacher_id=<?php echo $value['teacher_id']; ?>" title="Edit"><i class="fa fa-edit"></i></a>

						<a class="delete" href="delete_teacher.php?teacher_id=<?php echo $value['teacher_id']; ?>" title="Delete"><i class="fa fa-remove"></i></a>
						</td>
				</tr>

			<?php } ?>							
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