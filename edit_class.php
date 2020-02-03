<?php include('header.php'); ?>

<?php 

	include('database.php');
	if (isset($_POST['submit']) and $_GET['id']) {
		$id = $_GET['id'];
		$class 	       = $_POST['class'];
		$class_code    = $_POST['class_code'];
		$class_teacher = $_POST['class_teacher'];
		$description   = $_POST['description'];

		$sql = "UPDATE class SET class= '$class', class_code = '$class_code',class_teacher = '$class_teacher', description = '$description' where id = '$id'";
		$obj  = mysqli_query($connection, $sql);
		if ($obj) {
			echo "successfully";
			echo '<script>
			  	window.location.replace("add_class.php?msg=update successfully");

			  	</script>';
		}else{
			echo mysqli_error($connection);
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
							<h5 class="page-title"><i class="fa fa-sliders"></i>EDIT CALSS</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-4">
							<form method="post">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-plus-circle"></i>EDIT CLASS</h6>
	<?php 
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$sql = "SELECT *  FROM class where id = '$id'";
			$obj = mysqli_query($connection,$sql);
			foreach ($obj as $key => $value) { ?>

									<div class="inner-item">
										<div class="dash-form">
											<label class="clear-top-margin"><i class="fa fa-book"></i>CLASS</label>
											<input name="class" type="text" placeholder="5 STD" value="<?php echo $value['class']; ?>" />
											<label><i class="fa fa-code"></i>CLASS CODE</label>
											<input name="class_code" type="text" placeholder="PTH05" value="<?php echo $value['class_code']; ?>" />
											<label><i class="fa fa-user-secret"></i>CLASS TEACHER</label>
											<select name="class_teacher">
											<option><?php echo $value['class_teacher']; ?></option>
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
				<?php }} ?>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
							</form>
							</div>
			
				<div class="menu-togggle-btn">
					<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
				</div>
				<?php include('footer.php'); ?>