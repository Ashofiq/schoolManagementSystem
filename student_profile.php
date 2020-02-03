<?php 
session_start();
include('database.php');
if ($_SESSION['student_id']==true) {
	$id = $_SESSION['student_id'];
	$sql = "SELECT * FROM student where student_id = '$id'";
		$obj = mysqli_query($connection, $sql);
		foreach ($obj as $key => $value) {	
?>

<!DOCTYPE html>
<html>
<head>


        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <title>School Management System</title>

        <!-- Styles -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		 <link href="assets/css/chartist.min.css" rel="stylesheet" media="screen">
		<link href="assets/css/owl.carousel.min.css" rel="stylesheet" media="screen">
		<link href="assets/css/owl.theme.default.min.css" rel="stylesheet" media="screen">
        <link href="assets/css/style.css" rel="stylesheet" media="screen">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">

    </head>
    <body>
    		
		<div class="row dashboard-top-nav">
			<div class="col-sm-3 logo">
				<h5><i class="fa fa-book"></i>SMS</h5>
			</div>
			<div class="col-sm-4 top-search">
				<div class="search">
					<i class="fa fa-search"></i>
					<input type="text" placeholder="Search">
				</div>
			</div>
			<div class="col-sm-5 notification-area">
				<ul class="top-nav-list">
					<li class="notification dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i>
							<span class="badge nav-badge">3</span>
						</a>
						<ul class="dropdown-menu notification-list">
							<li>							
								<div class="list-msg">
									<div class="col-xs-2 icon clear-padding">
										<i class="fa fa-trophy"></i>
									</div>
									<div class="col-sm-10 desc">
										<h5><a href="#">Upcoming Sports Meet</a></h5>
										<h6><i class="fa fa-clock-o"></i> 10 min ago</h6>
									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<div class="list-msg">
									<div class="col-xs-2 icon clear-padding">
										<i class="fa fa-paint-brush"></i>
									</div>
									<div class="col-sm-10 desc">
										<h5><a href="#">Fine art workshop</a></h5>
										<h6><i class="fa fa-clock-o"></i> 1 hour ago</h6>
									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<div class="list-msg">
									<div class="col-xs-2 icon clear-padding">
										<i class="fa fa-birthday-cake"></i>
									</div>
									<div class="col-sm-10 desc">
										<h5><a href="#">Annual fest</a></h5>
										<h6><i class="fa fa-clock-o"></i> 1 day ago</h6>
									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>							
								<div class="list-msg">
									<div class="col-xs-2 icon clear-padding">
										<i class="fa fa-trophy"></i>
									</div>
									<div class="col-sm-10 desc">
										<h5><a href="#">Upcoming Sports Meet</a></h5>
										<h6><i class="fa fa-clock-o"></i> 10 min ago</h6>
									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<div class="all-notifications">
									<a href="#">VIEW ALL NOTIFICATIONS</a>
								</div>
							</li>
						</ul>
					</li>
					<li class="message dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-comment-o"></i>
							<span class="badge nav-badge">5</span>
						</a>
						<ul class="dropdown-menu notification-list">
							<li>
								<div class="list-msg">
									<div class="col-xs-2 image clear-padding">
										<img src="assets/img/parent/parent2.jpg" alt="user" />
									</div>
									<div class="col-sm-10 desc">
										<h5><a href="#"><?php echo $value['first_name']." ".$value['last_name']; ?></a></h5>
										<p>Lorem Ipsum is simply dummy text.</p>
										<h6><i class="fa fa-clock-o"></i> 1 day ago</h6>
									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<div class="list-msg">
									<div class="col-xs-2 image clear-padding">
										<img src="assets/img/parent/parent1.jpg" alt="user" />
									</div>
									<div class="col-sm-10 desc">
										<h5><a href="#">Lenore Doe</a></h5>
										<p>Lorem Ipsum is simply dummy text.</p>
										<h6><i class="fa fa-clock-o"></i> 1 day ago</h6>
									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<div class="all-notifications">
									<a href="#">VIEW ALL MESSAGES</a>
								</div>
							</li>
						</ul>
					</li>
					<li class="user dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span><img src="images/<?php echo $value['pic']; ?>" alt="user"><?php echo $value['first_name']." ".$value['last_name']; ?><span class="caret"></span></span>
						</a>
						<ul class="dropdown-menu notification-list">
							<li>
								<a href="#"><i class="fa fa-cogs"></i> SETTINGS</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-users"></i> USER PROFILE</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-key"></i> CHANGE PASSWORD</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-cogs"></i> SETTINGS</a>
							</li>
							<li>
								<div class="all-notifications">
									<a href="logout.php">LOGOUT</a>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
        	
		<div class="parent-wrapper" id="outer-wrapper">
			<!-- SIDE MENU -->
			<?php include('student_side_menu.php'); ?>
			
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					
					

					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-4">
								<div class="my-msg dash-item">
									<h6 class="item-title"><i class="fa fa-address-book-o"></i>MY PROFILE</h6>
									<div class="inner-item">
										<div class="profile-intro">
											<div class="col-xs-4 col-sm-12 col-md-4 clear-padding">
												<img src="images/<?php echo $value['pic']; ?>" alt="user" />
											</div>
											<div class="col-xs-8 col-sm-12 col-md-8">
												<h5><?php echo $value['first_name']." ".$value['last_name']; ?></h5>
												<h6>Student, <?php echo $value['class']; ?></h6>
												<h6>ID#: <?php echo $value['student_id']; ?></h6>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="profile-details">
											<div class="detail-row">
												<div class="col-md-6 col-sm-12 col-xs-6 clear-padding">
													<span>NAME</span>
													<p><?php echo $value['first_name']." ".$value['last_name']; ?></p>
												</div>
												<div class="col-md-6 col-sm-12 col-xs-6 clear-padding">
													<span>ID #</span>
													<p><?php echo $value['student_id']; ?></p>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="clearfix"></div>
											<div class="detail-row">
												<div class="col-md-6 col-sm-12 col-xs-6 clear-padding">
													<span>Class</span>
													<p><?php echo $value['class']; ?></p>
												</div>
												<div class="col-md-6 col-sm-12 col-xs-6 clear-padding">
													<span>SECTION</span>
													<p><?php echo $value['section']; ?></p>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="clearfix"></div>
											<div class="detail-row">
												<div class="col-md-6 col-sm-12 col-xs-6 clear-padding">
													<span>ROLL NO</span>
													<p>PTH030A10</p>
												</div>
												<div class="col-md-6 col-sm-12 col-xs-6 clear-padding">
													<span>SECTION</span>
													<p>PTH030A</p>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div>
									<div class="my-msg dash-item">
										<h6 class="item-title"><i class="fa fa-envelope-o"></i>Accounts details</h6>
										<div class="inner-item">
											<div class="msg-item">
												<div class="col-xs-2 clear-padding">
													<img src="assets/img/parent/parent1.jpg" alt="user" />
												</div>
												<div class="col-xs-10">

											<h4><b>Your payment complete</b></h4>

	<?php 

		$year = date('F');
		$sql = "SELECT * FROM account WHERE student_id = '$id'";
		$query = mysqli_query($connection, $sql);

		foreach ($query as $key => $value) {
		
	?>											
		<p class="title">
			<h4><?php $total = $value['monthly_fee']+$value['monthly_exam_fee']+$value['mid_exam_fee']+$value['final_exam_fee']+$value['library']+$value['admit']; echo date('F').': ';  echo $total; ?> </h4></p>
	<?php } ?>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="msg-item">
												<div class="col-xs-2 clear-padding">
													<img src="assets/img/parent/parent2.jpg" alt="user" />
												</div>
												<div class="col-xs-10">
													<p class="title">Your fee is due.</p>
													<p class="sent-by">LENNORE, ACCOUNTANT</p>
													<p class="msg-desc">Lorem Ipsum is simply dummy text of the printing.</p>
													<p class="timestamp"><i class="fa fa-clock-o"></i> <i>45 mins ago.</i></p>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="col-sm-4">
								<div>
									<div class="my-msg dash-item">
										<h6 class="item-title"><i class="fa fa-calendar"></i>TODAY'S TIMETABLE</h6>
	
										<div class="inner-item">
	
	<?php 
		
		$day = date('l');
		
		$sql = "SELECT * FROM time_table inner join student on   time_table.class = student.class  and time_table.section = student.section and time_table.day = '$day' where student.student_id = '$id' ";
		$obj = mysqli_query($connection, $sql);
		foreach ($obj as $key => $value) {	
		
	?>
					<div class="timetable-item">
						<div class="col-xs-3 clear-padding">
							<p><span class="time"><?php echo $value['slot']; ?></span></p>
						</div>
					<div class="col-xs-9">
						<p class="title"> <?php echo $value['subject']; ?></p>
						<p class="sent-by"><i class="fa fa-map-marker"></i> <?php echo $value['class_room']; ?></p>
						<p class="class-teacher"><i class="fa fa-user"></i> <?php echo $value['teacher']; ?></p>
					</div>
					<div class="clearfix"></div>
					</div>
<?php } ?>



										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-md-8">
								<div class="my-msg dash-item">
									<h6 class="item-title"><i class="fa fa-bullhorn"></i>ANNOUNCEMENTS</h6>
									<div class="inner-item dashboard-tabs">
										<ul class="nav nav-tabs">
											<li class="active">
												<a  href="#1" data-toggle="tab"><i class="fa fa-graduation-cap"></i><span>ACADEMICS</span></a>
											</li>
											<li>								
												<a href="#2" data-toggle="tab"><i class="fa fa-users"></i><span>ADMISSIONS</span></a>
											</li>
											<li>								
												<a href="#3" data-toggle="tab"><i class="fa fa-trophy"></i><span>SPORTS</span></a>
											</li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane active" id="1">
										<div class="announcement-item">
	

				<?php 
					$sql = "SELECT * FROM notice where prapok = 'Student' or prapok = 'All' ";
					$obj = mysqli_query($connection, $sql);

					foreach ($obj as $key => $value) {
					
				?>
												
													<h5><?php echo $value['subject']; ?><span class="new">New</span></h5>
													<h6><i class="fa fa-clock-o"></i>06-24-2017, 13:34</h6>
													<p><?php echo $value['description']; ?></p>
													<div class="posted-by">
														<p>Thanks,</p>
														<h6>John Doe, Principal</h6>
													</div>
												
					<?php } ?>
											</div>
											</div>
											<div class="tab-pane" id="2">
												<div class="announcement-item">
													<h5>2</h5>
												</div>
											</div>
											<div class="tab-pane" id="3">
												<div class="announcement-item">
													<h5>3</h5>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
	<div class="container">
		<div class="row">
			<h3 class="text-center">Result</h3>

<?php 	
		include('database.php');
		if ($_SESSION['student_id']==true) {

		function grade($number){
			if ($number<=32) {
				echo "fail";
			}elseif ($number<=39) {
				echo "D";
			}elseif ($number<=49) {
				echo "C";
			}elseif ($number<=59) {
				echo "B";
			}elseif ($number<=69) {
				echo "A-";
			}elseif ($number<=79) {
				echo "A";
			}elseif ($number<=100) {
				echo "A+";
			}

		}

		//$id = $_SESSION['student_id'];
		$sql = "select * from result inner join student on result.student_id = student.student_id and result.section = student.section where student.student_id = '$id'";
		$obj = mysqli_query($connection, $sql);

		foreach ($obj as $key => $value) { ?>

	<table class="table" style="background-color: #FFFFFF">
	 	<!-- <thead class="col-xs-4">
		    <tr><th scope="col">Bangla</th></tr>
		    <tr><th scope="col">English</th></tr>
		    <tr><th scope="col">Math</th></tr>
		    <tr><th scope="col">Science</th></tr>
		    <tr><th scope="col">social science</th></tr>
		    <tr><th scope="col">Islam</th></tr>
		    <tr><th scope="col">Genaral knowledge</th></tr>
		    <tr><th scope="col">Art</th></tr>
	    </thead> -->
	    <style type="text/css">
	    	
	    </style>
	  <tbody>
	    <tr>
		    <td colspan="1">Subject</td>
		    <td>Marks</td>
		    <td>Grade</td>
	    </tr>

	    <tr>
		    <td>Bangla</td>
		    <td><?php echo $value['bangla']; ?></td>
		    <td><?php echo grade($value['bangla']); ?></td>
	    </tr>
	    <tr>
		    <td>English</td>
		    <td><?php echo $value['english']; ?></td>
		    <td><?php echo grade($value['bangla']); ?></td>
	    </tr>

	    <tr>
		    <td>Math</td>
		    <td><?php echo $value['math']; ?></td>
		    <td><?php echo grade($value['bangla']); ?></td>
	    </tr>

	    <tr>
		    <td>Science</td>
		    <td><?php echo $value['science']; ?></td>
		    <td><?php echo grade($value['bangla']); ?></td>
	    </tr>

	    <tr>
		    <td>Social Science</td>
		    <td><?php echo $value['social_science']; ?></td>
		    <td><?php echo grade($value['bangla']); ?></td>
	    </tr>

	    <tr>
		    <td>Islam</td>
		    <td><?php echo $value['islam']; ?></td>
		    <td><?php echo grade($value['bangla']); ?></td>
	    </tr>

	    <tr>
		    <td>Genaral knowledge</td>
		    <td><?php echo $value['genaral_knowledge']; ?></td>
		    <td><?php echo grade($value['bangla']); ?></td>
	    </tr>

	    <tr>
		    <td>Art</td>
		    <td><?php echo $value['art']; ?></td>
		    <td><?php echo grade($value['bangla']); ?></td>
	    </tr>
	    
	  </tbody>
	  <tr >
	    <td colspan="3" class="pull-right">
	    	<?php $a = array($value['bangla'],$value['english'],$value['math'],$value['science'],$value['social_science'],$value['islam'],$value['genaral_knowledge'],$value['islam']); 
	    	
		echo "Total subject number of grade : "; echo grade(array_sum($a)/count($a));
	?>
	    </td>
	  </tr>
	</table>


	<?php }}?>

		</div>
	</div>



	<div class="menu-togggle-btn">
		<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
	</div>

	<?php include('footer.php'); ?>


<?php 
	
}
	}else{
		header('Location:student_login.php');
	}

?>


