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
							<h5 class="page-title"><i class="fa fa-users"></i>ALL STUDENT</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class=" col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-user"></i>STUDENTS</h6>

									<form method="post" class="form-group" action="search.php">
										<div class="col-xs-4">
										<input type="text"  name="search" class="from-control" placeholder="search"><button name="submit" type="submit" class="btn btn-sm btn-success">search</button>
										</div>
									</form>
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
		<?php
			$page = $_GET['page'];
			if ($page ==" " || $page =="1") {
			 	$page1=0;
			 }else{
			 	$page1 = ($page*3)-3;
			 }
			$sql = "SELECT * FROM student limit $page1,3";
			$obj = mysqli_query($connection, $sql);

			foreach ($obj as $key => $value) {
							
		?>
						<tr>
							<td><?php echo $value['first_name']." ".$value['last_name']; ?></td>
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

						<?php } ?>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
<?php 
include('database.php');
	$res = "SELECT * FROM student ";
	$obj = mysqli_query($connection,$res);
	$cou = mysqli_num_rows($obj);
	$a = $cou/2;
	$a = ceil($a);
	
	for ($i=1; $i <=$a; $i++) { ?>
		<a href="all_student.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
<?php
}
?>


				</div>
				<div class="menu-togggle-btn">
					<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
				</div>
				<div class="dash-footer col-lg-12">
					<p>Copyright Pathshala</p>
				</div>
				
				
			
				
			
			</div>
		</div>
	
		<!-- Scripts -->
        <script src="assets/js/jQuery_v3_2_0.min.js"></script>
		<script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/plugins/owl.carousel.min.js"></script>
		<script src="assets/plugins/Chart.min.js"></script>
		<script src="assets/plugins/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/dataTables.responsive.min.js"></script>
        <script src="assets/js/js.js"></script>
		
    </body>

<!-- Mirrored from limpidthemes-demo.com/Themeforest/html/Pathshala/Pathshala-HTML/dashboard/admin-student-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Nov 2017 12:07:28 GMT -->
</html>