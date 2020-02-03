<?php 
	$connection = mysqli_connect('localhost', 'root','', 'SMS');
	
?>

<?php 
	if(isset($_POST['submit']) and ($_GET['student_id'])) {
		$id = $_GET['student_id'];
		$first_name = $_POST['first_name'];
		$last_name 	=  $_POST['last_name'];
		$gender     = $_POST['gender'];
		$birth      = $_POST['birth'];
		$phone      = $_POST['phone'];
		$email      = $_POST['email'];
		$religion   = $_POST['religion'];

		$pic 		= $_FILES['pic'] ['name'];
  		$pic_temp 	= $_FILES['pic'] ['tmp_name'];

		$father_name= $_POST['father_name'];
		$mother_name= $_POST['mother_name'];
		$g_contract = $_POST['g_contract'];
		$g_email    = $_POST['g_email'];
		$address    = $_POST['address'];
		$class      = $_POST['class'];
		$section    = $_POST['section'];
		$roll      	= $_POST['student_id'];
		$last_school= $_POST['last_school'];

		move_uploaded_file($pic_temp, "images/".$pic);

		$sql = "UPDATE student SET first_name='$first_name', last_name='$last_name', gender='$gender', birth = '$birth', phone = '$phone', email = '$email', religion = '$religion', pic = '$pic', father_name = '$father_name', mother_name = '$mother_name', g_contract = '$g_contract', g_email = '$g_email', address = '$address', class = '$class', section = '$section', student_id = '$roll' where student_id = '$id'";
		$obj = mysqli_query($connection, $sql);

		if ($obj) {
			echo "success";
			header('Location: all_student.php?msg1=update successfully');
		}else{
			echo "problem".mysqli_error($connection);
		}
	}


?>

	<?php include('header.php'); ?>

		<div class="parent-wrapper" id="outer-wrapper">
			<!-- SIDE MENU -->
			<?php include('side_menu.php'); ?>

			
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-user"></i>EDIT STUDENT</h5>
							<div class="section-divider"></div>
						</div>
					</div>

		<?php 
			if (isset($_GET['student_id'])) {
				$id = $_GET['student_id'];
			$sql = "SELECT * FROM student where student_id = '$id'";
			$obj = mysqli_query($connection, $sql);

			foreach ($obj as $key => $value) {
			
		?>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
						<form action="" method="post" enctype="multipart/form-data">
							<div class="col-md-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-user"></i>STUDENT INFO</h6>
									<div class="inner-item">
										<div class="dash-form">
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>FIRST NAME</label>
												<input type="text" name="first_name" placeholder="JOHN" value="<?php echo $value['first_name']; ?>" />
											</div>
											
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>LAST NAME</label>
												<input type="text" name="last_name" value="<?php echo $value['last_name']; ?>" />
											</div>
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-venus"></i>GENDER</label>
												<select  name="gender">
													<option value="<?php echo $value['gender']; ?>"><?php echo $value['gender']; ?></option>
													<option value="male">Male</option>
													<option value="Female">Female</option>
												</select>
											</div>
											<div class="col-sm-3">
												<label><i class="fa fa-calendar"></i>DATE OF BIRTH</label>
												<input name="birth" type="text" id="studentDOB" value="<?php echo $value['birth']; ?>" />
											</div>

											<div class="col-sm-3">
												<label><i class="fa fa-phone"></i>PHONE #</label>
												<input type="text" name="phone" placeholder="1234567890" value="<?php echo $value['phone']; ?>" />
											</div>
											<div class="col-sm-3">
												<label><i class="fa fa-envelope-o"></i>EMAIL</label>
												<input type="text" name="email" value="<?php echo $value['email']; ?>" />
											</div>
											<div class="col-sm-3">
												<label><i class="fa fa-bell-o"></i>RELIGION</label>
												<select name="religion">
													<option><?php echo $value['religion']; ?></option>
													<option value="Buddhism">Buddhism</option>
													<option value="muslim">muslim</option>
													<option value="Christian">Christian</option>
													<option value="Hinduism">Hinduism</option>
												</select>
											</div>
											<div class="clearfix"></div>
											<div class="col-sm-3">
												<label><i class="fa fa-file-picture-o"></i>
												<img src="images/<?php echo $value['pic']; ?>"> UPLOAD PHOTO</label>
												<input type="file" name="pic" placeholder="90890" />
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-user-secret"></i>PARENT INFO</h6>
									<div class="inner-item">
										<div class="dash-form">
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>FATHER NAME</label>
												<input type="text" name="father_name" value="<?php echo $value['father_name']; ?>" />
											</div>
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>MOTHER NAME</label>
												<input type="text" name="mother_name" value="mother_name" />
											</div>
											
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-phone"></i>CONTACT #</label>
												<input type="text" name="g_contract" value="<?php echo $value['g_contract']; ?>" />
											</div>
											
											<div class="col-sm-3">
												<label><i class="fa fa-envelope-o"></i>EMAIL</label>
												<input type="text" name="g_email" value="<?php echo $value['g_email']; ?>" />
											</div>
											
											
											<div class="clearfix"></div>
											<div class="col-sm-3">
												<label><i class="fa fa-home"></i>ADDRESS</label>
												<input type="text" name="address" value="<?php echo $value['address']; ?>" />
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
												<label class="clear-top-margin"><i class="fa fa-book"></i>CLASS</label>
												<select name="class">
													<option><?php echo $value['class']; ?></option>
													<option value="class one">class 1</option>
													<option value="class two">class 2</option>
												</select>
											</div>
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-cogs"></i>SECTION</label>
												<select name="section">
													<option><?php echo $value['section']; ?></option>
													<option value="A">A</option>
													<option value="B">B</option>
												</select>
											</div>
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-puzzle-piece"></i>ROLL #</label>
												<input type="text" name="student_id" value="<?php echo $value['student_id']; ?>"  />
											</div>
											<div class="col-sm-3">
												<label><i class="fa fa-graduation-cap"></i>LAST SCHOOL</label>
												<input type="text" name="last_school" value="<?php echo $value['last_school']; ?>" />
											</div>
											<div class="clearfix"></div>
											<div class="col-sm-12">
												<input type="submit" class="btn" name="submit" value="Save" />
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</form>
						</div>
					</div>
		<?php } } ?>
				</div>
				<div class="menu-togggle-btn">
					<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
				</div>


				<?php include('footer.php'); ?> 