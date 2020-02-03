<?php include('header.php'); ?>

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

	include('database.php');
	if (isset($_POST['submit'])) {
		$class 	       = $_POST['class'];
		$class_code    = $_POST['class_code'];
		$class_teacher = $_POST['class_teacher'];
		$description   = $_POST['description'];

		$sql = "INSERT INTO class (class, class_code,class_teacher, description) VALUES ('$class', '$class_code', '$class_teacher', '$description')";
		$obj  = mysqli_query($connection, $sql);
		if ($obj) {
			echo '<div class="alert alert-success text-center">success added</div>';
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
							<h5 class="page-title"><i class="fa fa-sliders"></i>ALL CALSSES</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-4">
							<form method="post">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-plus-circle"></i>ADD CLASS</h6>
									<div class="inner-item">
										<div class="dash-form">
											<label class="clear-top-margin"><i class="fa fa-book"></i>CLASS</label>
											<input name="class" type="text" placeholder="5 STD" />
											<label><i class="fa fa-code"></i>CLASS CODE</label>
											<input name="class_code" type="text" placeholder="PTH05" />
											<label><i class="fa fa-user-secret"></i>CLASS TEACHER</label>
											<select name="class_teacher">
											<option>-- Select --</option>
					<?php  
						include('database.php');
						$sql = "SELECT * FROM teacher";
						$obj = mysqli_query($connection, $sql);
						foreach ($obj as $key => $value) {
						
					?>
											<option value="<?php echo $value['first_name']." ".$value['last_name']; ?>"> <?php echo $value['first_name']." ".$value['last_name'];  ?></option>
					<?php } ?>
											</select>
											<label><i class="fa fa-info-circle"></i>DESCRIPTION</label>
											<textarea name="description" placeholder="Enter Description Here"></textarea>
											<div>
												<input type="submit" name="submit" value="submit">
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
							</form>
							</div>
				<div class="col-sm-8">
					<div class="dash-item first-dash-item">
						<h6 class="item-title"><i class="fa fa-sliders"></i>ALL CLASSES</h6>
						<div class="inner-item">
						<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th><i class="fa fa-book"></i>CLASS</th>
								<th><i class="fa fa-code"></i>CLASS CODE</th>
								<th><i class="fa fa-user-secret"></i>CLASS TEACHER</th>
								<th><i class="fa fa-info-circle"></i>DESCRIPTION</th>
								<th><i class="fa fa-sliders"></i>ACTION</th>
							</tr>
						</thead>
						<tbody>
	<?php 
		$sql = "SELECT * FROM class ORDER BY class_code asc";
		$obj = mysqli_query($connection, $sql);

		foreach ($obj as $key => $value) {

	?>
							<tr>
								<td><?php echo $value['class']; ?></td>
								<td><?php echo $value['class_code']; ?></td>
								<td><?php echo $value['class_teacher']; ?></td>
								<td><?php echo $value['description']; ?></td>
								<td class="action-link">
								<a class="edit" href="Edit_class.php?id=<?php echo $value['id']; ?>" title="Edit" ><i class="fa fa-edit"></i></a>
								<a class="delete" href="delete_class.php?id=<?php echo $value['id']; ?>" title="Delete"><i class="fa fa-remove"></i></a>
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