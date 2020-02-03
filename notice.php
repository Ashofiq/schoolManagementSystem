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


<?php 

  if (isset($_POST['submit'])) {
	$type        = $_POST['type'];
	$prapok      = $_POST['prapok'];
	$subject 	 = $_POST['subject'];
	$description = $_POST['description'];
	$date        = $_POST['date'];		
	$sql = "INSERT INTO notice(type,	prapok,	subject,description,date) VALUES('$type','$prapok','$subject','$description','$date')";

	$obj = mysqli_query($connection, $sql);
	if ($obj) {
		echo '<div class=" text-center alert alert-success">
  				<strong>Success!</strong> successful create.
			  </div>';
	}else{
		echo '<div class="alert alert-danger">
  				<strong>problem!</strong> 
			  </div>'.mysqli_error($connection);
	}
}
?>
        	
		<div class="parent-wrapper" id="outer-wrapper">
			<!-- SIDE MENU -->
			<?php include('side_menu.php'); ?>
			
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-bullhorn"></i>ALL ANNOUNCEMENTS</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-4">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-plus-circle"></i>ADD ANNOUNCEMENT</h6>
									<form method="post">
									<div class="inner-item">
										<div class="dash-form">
											<label class="clear-top-margin"><i class="fa fa-cogs"></i>TYPE</label>
											<select name="type">
												<option>-- Select --</option>
												<option value="Academic">Academic</option>
												<option value="Administrative">Administrative</option>
												<option value="Sports">Sports</option>
											</select>
											<label><i class="fa fa-user-secret"></i>FOR</label>
											<select name="prapok">
												<option>-- Select --</option>
												<option value="All">All</option>
												<option value="Teacher">Teacher</option>
												<option value="Student">Student</option>
											</select>
											<label><i class="fa fa-code"></i>SUBJECT</label>
											<input type="text" name="subject" placeholder="Subject" />
											<label><i class="fa fa-info-circle"></i>DESCRIPTION</label>
											<textarea class="description" name="description" placeholder="Enter Description Here"></textarea>
											<div class="hide">
												<input type="text" name="date" value="<?php echo date('d-m-y'); ?>">
											</div>
											<div>
												<input class="btn btn-success" type="submit" name="submit" value="Create">
											</div>
										</div>
									</form>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-sm-8">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-bullhorn"></i>ALL ANNOUNCEMENTS</h6>
									<div class="inner-item">
										<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th><i class="fa fa-cogs"></i>TYPE</th>
													<th><i class="fa fa-user-secret"></i>FOR</th>
													<th><i class="fa fa-user-info"></i>SUBJECT</th>
													<th><i class="fa fa-info-circle"></i>DESCRIPTION</th>
													<th><i class="fa fa-user"></i>CREATED DATE</th>
													<th><i class="fa fa-sliders"></i>ACTION</th>
												</tr>
											</thead>
											<tbody>
		<?php 
			$sql = "SELECT * FROM notice order by id desc";
			$obj = mysqli_query($connection, $sql);

			foreach ($obj as $key => $value) {
				$description    = $value['description'];
                $strcut         = substr($description,0, 50);
                $description    = substr($strcut,0, strrpos($strcut, ' ')).' ';
							
				?>
						<tr>
						<td><?php echo $value['type']; ?></td>
						<td><?php echo $value['prapok']; ?></td>
						<td><?php echo $value['subject']; ?></td>
						<td><?php echo $description; ?></td>
						<td><?php echo $value['date']; ?></td>
						<td class="action-link">
						<a class="edit" href="edit_notice?id=<?php echo $value['id']; ?>" title="Edit" ><i class="fa fa-edit"></i></a>
						<a class="delete" " href="notice_delete.php?id=<?php echo $value['id']; ?>" title="Delete"><i class="fa fa-remove"></i></a>
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
				<div class="dash-footer col-lg-12">
					<p>Copyright Pathshala</p>
				</div>
				
				<!-- Delete Modal -->
				<div id="deleteDetailModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><i class="fa fa-trash"></i>DELETE CLASS</h4>
							</div>
							<div class="modal-body">
								<div class="table-action-box">
									<a href="#" class="save"><i class="fa fa-check"></i>YES</a>
									<a href="#" class="cancel" data-dismiss="modal"><i class="fa fa-ban"></i>CLOSE</a>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				
				<!--Edit details modal-->
				<div id="editDetailModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><i class="fa fa-edit"></i>EDIT CLASS DETAILS</h4>
							</div>
							<div class="modal-body dash-form">
								<div class="col-sm-4">
									<label class="clear-top-margin"><i class="fa fa-book"></i>CLASS</label>
									<input type="text" placeholder="CLASS" value="5 STD" />
								</div>
								<div class="col-sm-4">
									<label class="clear-top-margin"><i class="fa fa-code"></i>CLASS CODE</label>
									<input type="text" placeholder="CLASS CODE" value="PTH05" />
								</div>
								<div class="col-sm-4">
									<label class="clear-top-margin"><i class="fa fa-user-secret"></i>CLASS TEACHER</label>
									<select>
										<option>-- Select --</option>
										<option>Lennore Doe</option>
										<option>John Doe</option>
									</select>
								</div>
								<div class="clearfix"></div>
								<div class="col-sm-12">
									<label><i class="fa fa-info-circle"></i>DESCRIPTION</label>
									<textarea placeholder="Enter Description Here"></textarea>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="modal-footer">
								<div class="table-action-box">
									<a href="#" class="save"><i class="fa fa-check"></i>SAVE</a>
									<a href="#" class="cancel" data-dismiss="modal"><i class="fa fa-ban"></i>CLOSE</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
<script>
	$('.description').wysihtml5();
	
	
</script>

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

<!-- Mirrored from limpidthemes-demo.com/Themeforest/html/Pathshala/Pathshala-HTML/dashboard/admin-add-announcement.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Nov 2017 12:07:29 GMT -->
</html>