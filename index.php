
<?php include('header.php'); ?>
        	
		<div class="parent-wrapper" id="outer-wrapper">
			<!-- SIDE MENU -->
			<?php include('side_menu.php'); ?>
			
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-home"></i>HOME</h5>
							<div class="section-divider"></div>
							<div class="dashboard-stats">
								<div class="col-sm-6 col-md-3">
									<div class="stat-item">
										<div class="stats">
											<div class="col-xs-8 count">

			<?php 
				include('database.php');
				$sql = "SELECT * FROM student";
				$obj = mysqli_query($connection,$sql);
				$row = mysqli_num_rows($obj);
			?>
												<h1><?php echo $row; ?></h1>
												<p>STUDENTS</p>
											</div>
											<div class="col-xs-4 icon">
												<i class="fa fa-users ex-icon"></i>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="status">
											<p class="text-ex"><i class="fa fa-pencil-square-o"></i>10 Absent Today</p>
										</div>
										
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="stat-item">
										<div class="stats">
											<div class="col-xs-8 count">

			<?php 
				include('database.php');
				$sql = "SELECT * FROM teacher";
				$obj = mysqli_query($connection,$sql);

				$teacher_row = mysqli_num_rows($obj);
			?>
												<h1><?php echo $teacher_row; ?></h1>
												<p>TEACHERS</p>
											</div>
											<div class="col-xs-4 icon">
												<i class="fa fa-user-secret danger-icon"></i>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="status">
											<p class="text-danger"><i class="fa fa-exclamation-triangle"></i>5 On Leave Today</p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="clearfix visible-sm"></div>
								<div class="col-sm-6 col-md-3">
									<div class="stat-item">
										<div class="stats">
											<div class="col-xs-8 count">
												<h1>900</h1>
												<p>EVENTS</p>
											</div>
											<div class="col-xs-4 icon">
												<i class="fa fa-flag look-icon"></i>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="status">
											<p class="text-look"><i class="fa fa-clock-o"></i>1 Event tomorrow</p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="stat-item">
										<div class="stats">
											<div class="col-xs-8 count">
		<?php 
				include('database.php');
				$sql = "SELECT * FROM teacher";
				$obj = mysqli_query($connection,$sql);

				$notice_row = mysqli_num_rows($obj);
		?>
												<h1><?php echo $notice_row; ?></h1>
												<p>MESSAGES</p>
											</div>
											<div class="col-xs-4 icon">
												<i class="fa fa-envelope-o success-icon"></i>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="status">
											<p class="text-success"><i class="fa fa-folder-open-o"></i>10 Unread messages</p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-md-12">
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
		<?php 
			$sql = "SELECT * FROM notice order by id desc";
			$obj = mysqli_query($connection,$sql);

			foreach ($obj as $key => $value) {?>

			<div class="announcement-item">
				<h5><?php echo $value['subject']; ?><span class="new">New</span></h5>
				<h6><i class="fa fa-clock-o"></i><?php echo $value['date']; ?></h6>
				<p><?php echo $value['description']; ?></p>
				
			</div>
			<?php } ?>
		</div>
												
											</div>
										</div>
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

