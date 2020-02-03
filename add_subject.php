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
		$name 	       	= $_POST['name'];
		$subject_code   = $_POST['subject_code'];
		$class 			= $_POST['class'];
		$teacher 		= $_POST['teacher'];
		$description   	= $_POST['description'];

		$sql = "INSERT INTO subject(name, subject_code,class, teacher, description) VALUES ('$name', '$subject_code', '$class','$teacher', '$description')";
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
							<h5 class="page-title"><i class="fa fa-cogs"></i>ALL SUBJECTS</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-4">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-plus-circle"></i>ADD SUBJECT</h6>
								<form method="post">
									<div class="inner-item">
										<div class="dash-form">
											<label class="clear-top-margin"><i class="fa fa-book"></i>NAME</label>
											<input name="name" type="text" placeholder="Basic Mathematics" />
											<label><i class="fa fa-code"></i>SUBJECT CODE</label>
											<input name="subject_code" type="text" placeholder="MTH101" />
											<label><i class="fa fa-code"></i>CLASS</label>
											<select name="class">
												<option>-- Select --</option>
		<?php 
			include('database.php');
			$sql = "SELECT * FROM class";
			$obj = mysqli_query($connection, $sql);

			foreach ($obj as $key => $value) {
	
		?>
												<option value="<?php echo $value['class']; ?>"><?php echo $value['class']; ?></option>
		<?php } ?>
											</select>
											<label><i class="fa fa-code"></i>TEACHER</label>
											<select name="teacher">
												<option>-- Select --</option>
		--</option>
		<?php 
			include('database.php');
			$sql = "SELECT * FROM teacher";
			$obj = mysqli_query($connection, $sql);

			foreach ($obj as $key => $value) {
	
		?>
												<option value="<?php echo $value['first_name'].$value['last_name']; ?>"><?php echo $value['first_name'].$value['last_name']; ?></option>
		<?php } ?>										
											</select>
											<label><i class="fa fa-info-circle"></i>DESCRIPTION</label>
											<textarea name="description" placeholder="Enter Description Here"></textarea>
											<div>
												<input class="btn btn-success" type="submit" name="submit" value="submit">
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
									<h6 class="item-title"><i class="fa fa-sliders"></i>ALL SUBJECTS</h6>
									<div class="inner-item">
										<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th><i class="fa fa-book"></i>NAME</th>
													<th><i class="fa fa-code"></i>CODE</th>
													<th><i class="fa fa-cogs"></i>CLASS</th>
													<th><i class="fa fa-user-secret"></i>TEACHER</th>
													<th><i class="fa fa-info-circle"></i>DESCRIPTION</th>
													<th><i class="fa fa-sliders"></i>ACTION</th>
												</tr>
											</thead>
											<tbody>

			<?php 
				include('database.php');
				$sql = "SELECT * FROM subject";
				$obj = mysqli_query($connection, $sql);

				foreach ($obj as $key => $value) {
	
			?>
												<tr>
													<td><?php echo $value['name']; ?></td>
													<td><?php echo $value['subject_code']; ?></td>
													<td><?php echo $value['class']; ?></td>
													<td><?php echo $value['teacher']; ?></td>
													<td><?php echo $value['description']; ?></td>
													<td class="action-link">
							<a class="edit" href="edit_subject.php?id=<?php echo $value['id']; ?>" title="Edit"><i class="fa fa-edit"></i></a>
							<a class="delete" href="delete_subject.php?id=<?php echo $value['id']; ?>" title="Delete"><i class="fa fa-remove"></i></a>
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