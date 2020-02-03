<?php include('header.php'); ?>
<?php include('database.php'); ?>
	<div class="parent-wrapper" id="outer-wrapper">		
			<?php include('side_menu.php'); ?>
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-user-secret"></i>ADD TEACHER</h5>
							<div class="section-divider"></div>
						</div>
					</div>

	<?php 
		if(isset($_POST['submit']) and $_GET['teacher_id']) {

			$id = $_GET['teacher_id'];
			$teacher_id = $_POST['teacher_id'];
			$first_name = $_POST['first_name'];
			$last_name 	= $_POST['last_name'];
			$gender     = $_POST['gender'];
			$birth      = $_POST['birth'];
			$phone      = $_POST['phone'];
			$email      = $_POST['email'];
			$religion   = $_POST['religion'];
			$pic 		= $_FILES['pic'] ['name'];
	  		$pic_temp 	= $_FILES['pic'] ['tmp_name'];
	  		
			$address    = $_POST['address'];
			$highest_degree = $_POST['highest_degree'];
			$other_degree = $_POST['other_degree'];

			move_uploaded_file($pic_temp, "images/".$pic);

			$sql = "UPDATE teacher SET teacher_id = '$teacher_id',	first_name= '$first_name',	last_name='$last_name',	gender = '$gender',	birth='#birth',phone= '$phone',email='$email',religion='$religion',pic='$pic',address='$address',	highest_degree= '$highest_degree',other_degree= '$other_degree' WHERE teacher_id = '$id'";
			$obj = mysqli_query($connection, $sql);

			if ($obj) {
				$s = "success";
				echo $s;
				echo '<div class=" text-center alert alert-success">
  				<strong>Success!</strong> successful create.
			  </div>
			  <script>
			  	window.location.replace("all_teacher.php?msg=update successfully");

			  	</script>';
			}else{
				echo "problem".mysqli_error($connection);
			}
	}
?>					

		<?php 

			if (isset($_GET['teacher_id'])) {
				$id = $_GET['teacher_id'];

				$sql = "SELECT * FROM teacher where teacher_id= '$id'";
				$obj = mysqli_query($connection, $sql);

				foreach ($obj as $key => $value) {
		
		?>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-md-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-user"></i>EDIT TEACHER INFO</h6>
									<form method="post" enctype="multipart/form-data">
										
									<div class="inner-item">
										<div class="dash-form">
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>FIRST NAME</label>
												<input type="text" name="first_name" value="<?php echo $value['first_name']; ?>" />
											</div>
											
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>LAST NAME</label>
												<input type="text" name="last_name" value="<?php echo $value['last_name']; ?>" />
											</div>

											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>Teacher ID</label>
												<input type="text" name="teacher_id" value="<?php echo $value['teacher_id']; ?>" />
											</div>

											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-venus"></i>GENDER</label>
												<select name="gender">
													<option><?php echo $value['gender']; ?></option>
													<option value="male">Male</option>
													<option value="female">Female</option>
												</select>
											</div>
											<div class="col-sm-3">
												<label><i class="fa fa-calendar"></i>DATE OF BIRTH</label>
												<input type="text" name="birth" id="studentDOB" value="<?php echo $value['birth']; ?>" />
											</div>
											
											<div class="col-sm-3">
												<label><i class="fa fa-bell-o"></i>RELIGION</label>
												<select name="religion">
													<option><?php echo $value['religion']; ?></option>
													<option value="Buddhism">Buddhism</option>
													<option value="muslim">Muslim</option>
													<option value="Christian">Christian</option>
													<option value="Hinduism">Hinduism</option>
												</select>
											</div>
											<div class="clearfix"></div>
											<div class="col-sm-3">
												<label><i class="fa fa-file-picture-o"></i>UPLOAD PHOTO</label>
												<img src="images/<?php echo $value['pic']; ?>">
												<input type="file" name="pic" placeholder="90890" />
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-home"></i>CONTACT INFO</h6>
									<div class="inner-item">
										<div class="dash-form">
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-home"></i>ADDRESS 1</label>
												<input type="text" name="address" value="<?php echo $value['address']; ?>" />
											</div>
										
											<div class="col-sm-3">
												<label><i class="fa fa-phone"></i>PHONE #</label>
												<input type="text" name="phone" value="<?php echo $value['phone']; ?>" />
											</div>
											
											<div class="col-sm-3">
												<label><i class="fa fa-envelope-o"></i>EMAIL</label>
												<input type="email" name="email" value="<?php echo $value['email']; ?>" />
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-book"></i>ACADEMIC INFO</h6>
									<div class="inner-item">
										<div class="dash-form">
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-graduation-cap"></i>HIGHEST DEGREE</label>
	<input type="text" name="highest_degree" value="<?php echo $value['highest_degree']; ?>" />
											</div>
										
											
											<div class="col-sm-3">
												<label><i class="fa fa-graduation-cap"></i>OTHER DEGREE</label>
												<input type="text" name="other_degree" value="<?php echo $value['other_degree']; ?>" />
											</div>
											
											<div class="clearfix"></div>
											<div class="col-sm-2">
												<input type="submit" class="btn btn-success" name="submit" value="submit">
											</div>
										</div>
									</form>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
	<?php }} ?>
				<div class="menu-togggle-btn">
					<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
				</div>


				<?php include('footer.php'); ?>