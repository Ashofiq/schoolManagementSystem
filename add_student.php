<?php 
	$connection = mysqli_connect('localhost', 'root','', 'SMS');?>




	
<?php 
	if(isset($_POST['submit'])) {
		$first_name = $_POST['first_name'];
		$last_name 	= $_POST['last_name'];
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
		$roll      	= $_POST['roll'];
		$last_school= $_POST['last_school'];

		move_uploaded_file($pic_temp, "images/".$pic);

		$sql = "INSERT INTO student(first_name,	last_name,	gender,	birth,	phone,	email,	religion,	pic,	father_name,	mother_name,	g_contract,	g_email,	address,	class,	section,	student_id,	last_school) 
			VALUES('$first_name','$last_name','$gender','$birth','$phone','$email','$religion','$pic',	'$father_name',	'$mother_name','$g_contract','$g_email','$address',	'$class','$section',	'$roll','$last_school')";
		
		$obj = mysqli_query($connection, $sql);

		if ($obj) {
			echo "<div class='text-center alert alert-success'>
				successfully add student
			</div>";
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
							<h5 class="page-title"><i class="fa fa-user"></i>ADD STUDENT</h5>
							<div class="section-divider"></div>
						</div>
					</div>
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
												<input type="text" name="first_name" placeholder="JOHN" />
											</div>
											
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>LAST NAME</label>
												<input type="text" name="last_name" placeholder="DOE" />
											</div>
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-venus"></i>GENDER</label>
												<select  name="gender">
													<option>-- Select --</option>
													<option value="male">Male</option>
													<option value="Female">Female</option>
												</select>
											</div>
											<div class="col-sm-3">
												<label><i class="fa fa-calendar"></i>DATE OF BIRTH</label>
												<input name="birth" type="text" id="studentDOB" placeholder="MM/DD/YYYY" />
											</div>

											<div class="col-sm-3">
												<label><i class="fa fa-phone"></i>PHONE #</label>
												<input type="text" name="phone" placeholder="1234567890" />
											</div>
											<div class="col-sm-3">
												<label><i class="fa fa-envelope-o"></i>EMAIL</label>
												<input type="text" name="email" placeholder="john@pathshala.com" />
											</div>
											<div class="col-sm-3">
												<label><i class="fa fa-bell-o"></i>RELIGION</label>
												<select name="religion">
													<option>-- Select --</option>
													<option value="Buddhism">Buddhism</option>
													<option value="muslim">muslim</option>
													<option value="Christian">Christian</option>
													<option value="Hinduism">Hinduism</option>
												</select>
											</div>
											<div class="clearfix"></div>
											<div class="col-sm-3">
												<label><i class="fa fa-file-picture-o"></i>UPLOAD PHOTO</label>
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
												<input type="text" name="father_name" placeholder="JOHN" />
											</div>
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>MOTHER NAME</label>
												<input type="text" name="mother_name" placeholder="LENNORE" />
											</div>
											
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-phone"></i>CONTACT #</label>
												<input type="text" name="g_contract" placeholder="1234567890" />
											</div>
											
											<div class="col-sm-3">
												<label><i class="fa fa-envelope-o"></i>EMAIL</label>
												<input type="text" name="g_email" placeholder="john@pathshala.com" />
											</div>
											
											
											<div class="clearfix"></div>
											<div class="col-sm-3">
												<label><i class="fa fa-home"></i>ADDRESS</label>
												<input type="text" name="address" placeholder="H/N 42 Street# 10" />
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
													<option>-- Select --</option>
													<option value="class 1">class 1</option>
													<option value="class 2">class 2</option>
												</select>
											</div>
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-cogs"></i>SECTION</label>
												<select name="section">
													<option>-- Select --</option>
													<option value="">A</option>
													<option value="B">B</option>
												</select>
											</div>
											<div class="col-sm-3">
												<label class="clear-top-margin"><i class="fa fa-puzzle-piece"></i>ROLL #</label>
												<input type="text" name="roll" placeholder="PTH05A01" />
											</div>
											<div class="col-sm-3">
												<label><i class="fa fa-graduation-cap"></i>LAST SCHOOL</label>
												<input type="text" name="last_school" placeholder="ABC SCHOOL" />
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
				</div>
				<div class="menu-togggle-btn">
					<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
				</div>


				<?php include('footer.php'); ?> 