<?php include('header.php'); ?>

<?php 

	include('database.php');
	if (isset($_POST['submit']) and $_GET['id']) {
		$id = $_GET['id'];
		$name 	       	= $_POST['name'];
		$subject_code   = $_POST['subject_code'];
		$class 			= $_POST['class'];
		$teacher 		= $_POST['teacher'];
		$description   	= $_POST['description'];

		$sql = "UPDATE subject SET name= '$name', subject_code = '$subject_code',class = '$class', teacher= '$teacher', description= '$description' where id = '$id'";
		$obj  = mysqli_query($connection, $sql);
		if ($obj) {
			echo '<script>
			  	window.location.replace("add_subject.php?msg=update successfully");

			  	</script>';
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
	<?php 
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$sql = "SELECT * FROM subject where id = '$id'";
			$obj = mysqli_query($connection,$sql);
			foreach ($obj as $key => $value) {
	?>
								<form method="post">
									<div class="inner-item">
										<div class="dash-form">
											<label class="clear-top-margin"><i class="fa fa-book"></i>NAME</label>
											<input name="name" type="text" value="<?php echo $value['name']; ?>"  />
											<label><i class="fa fa-code"></i>SUBJECT CODE</label>
											<input name="subject_code" type="text" value="<?php echo $value['subject_code']; ?>" />
											<label><i class="fa fa-code"></i>CLASS</label>
											<select name="class">
												<option><?php echo $value['class']; ?></option>
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
										<option value="<?php echo $value['teacher']; ?>"><?php echo $value['teacher']; ?></option>
		<?php 
			include('database.php');
			$sql = "SELECT * FROM teacher";
			$obj = mysqli_query($connection, $sql);

			foreach ($obj as $key => $value) {
	
		?>
												<option value="<?php echo $value['first_name'].$value['last_name']; ?>"><?php echo $value['first_name'].' '.$value['last_name']; ?></option>
		<?php } ?>										
											</select>
											<label><i class="fa fa-info-circle"></i>DESCRIPTION</label>
											<textarea name="description" placeholder="Enter Description Here">
											Desctiption
											</textarea>
											<div>
												<input class="btn btn-success" type="submit" name="submit" value="submit">
											</div>
										</div>
										<div class="clearfix"></div>
				<?php }} ?>
									</div>
								</form>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-togggle-btn">
					<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
				</div>

<?php include('footer.php'); ?>