<?php include('header.php'); ?>
    
    <?php 

	include('database.php');
	if (isset($_POST['submit'])) {
		$section 	       = $_POST['section'];
		$section_class     = $_POST['section_class'];
		$section_code      = $_POST['section_code'];
		$description       = $_POST['description'];

		$sql = "INSERT INTO section (section, section_class,section_code, description) VALUES ('$section', '$section_class', '$section_code', '$description')";
		$obj  = mysqli_query($connection, $sql);
		if ($obj) {
			echo '<div class="alert alert-success text-center">success</div>';
		}else{
			echo "problem".mysqli_error($connection);
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
							<h5 class="page-title"><i class="fa fa-cogs"></i>ALL SECTIONS</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-4">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-plus-circle"></i>ADD SECTION</h6>
								<form method="post">
									<div class="inner-item">
										<div class="dash-form">
											<label class="clear-top-margin"><i class="fa fa-book"></i>SECTION</label>
											<input name="section" type="text" placeholder="A" />
											<label><i class="fa fa-code"></i>SECTION CLASS</label>
											<select name="section_class">
												<option>-- Select --</option>
			<?php 
				$sql = "SELECT * FROM class";
				$obj = mysqli_query($connection, $sql);

				foreach ($obj as $key => $value) {

			?>
										<option value="<?php echo $value['class']; ?>"><?php echo $value['class']; ?></option>
			<?php } ?>
											</select>
											<label><i class="fa fa-user-secret"></i>SECTION CODE</label>
											<input name="section_code" type="text" placeholder="PTH05A" />
											<label><i class="fa fa-info-circle"></i>DESCRIPTION</label>
											<textarea name="description" placeholder="Enter Description Here"></textarea>
											<div>
												<input type="submit" name="submit" value="submit">
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</form>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-sm-8">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-sliders"></i>ALL SECTIONS</h6>
									<div class="inner-item">
										<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th><i class="fa fa-book"></i>CLASS</th>
								<th><i class="fa fa-cogs"></i>SECTION</th>
								<th><i class="fa fa-code"></i>SECTION CODE</th>
								<th><i class="fa fa-info-circle"></i>DESCRIPTION</th>
								<th><i class="fa fa-sliders"></i>ACTION</th>
							</tr>
						</thead>
						<tbody>
	<?php 
				$sql = "SELECT * FROM section";
				$obj = mysqli_query($connection, $sql);

				foreach ($obj as $key => $value) {

	?>
						<tr>
							<td><?php echo $value['section_class']; ?></td>
							<td><?php echo $value['section']; ?></td>
							<td><?php echo $value['section_code']; ?></td>
							<td><?php echo $value['description']; ?></td>
							<td class="action-link">
							<a class="edit" href="#" title="Edit" ><i class="fa fa-edit"></i></a>
							<a class="delete" href="#" title="Delete" ><i class="fa fa-remove"></i></a>
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
								<h4 class="modal-title"><i class="fa fa-trash"></i>DELETE SECTION</h4>
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
								<h4 class="modal-title"><i class="fa fa-edit"></i>EDIT SECTION DETAILS</h4>
							</div>
							<div class="modal-body dash-form">
								<div class="col-sm-4">
									<label class="clear-top-margin"><i class="fa fa-book"></i>SECTION</label>
									<input type="text" placeholder="SECTION" value="A" />
								</div>
								<div class="col-sm-4">
									<label class="clear-top-margin"><i class="fa fa-code"></i>SECTION CODE</label>
									<input type="text" placeholder="SECTION CODE" value="PTH05A" />
								</div>
								<div class="col-sm-4">
									<label class="clear-top-margin"><i class="fa fa-user-secret"></i>SECTION CLASS</label>
									<select>
										<option>-- Select --</option>
										<option>5 STD</option>
										<option>6 STD</option>
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

<!-- Mirrored from limpidthemes-demo.com/Themeforest/html/Pathshala/Pathshala-HTML/dashboard/admin-add-section.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Nov 2017 12:07:29 GMT -->
</html>