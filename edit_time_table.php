<?php include('header.php');?>

<?php 
	include('database.php');
	if (isset($_POST['submit'])) {
		$day = $_POST['day'];
		$slot = $_POST['slot'];
		$class = $_POST['class'];
		$section = $_POST['section'];
		$subject = $_POST['subject'];
		$teacher = $_POST['teacher'];
		$class_room = $_POST['class_room'];

		$sql = "INSERT time_table SET day = '$day',slot = '$slot',class = '$class',	section= '$section',	subject = '$subject',teacher='$teacher',class_room = '$class_room'";
		$obj = mysqli_query($connection, $sql);

		if ($obj) {
			echo '<div class="alert alert-success text-center">success</div>';
			echo '<script>
				window.location.replace("time_table.php?msg1=update successfully");
			</script>';

		}else{
			echo "prolem".mysqli_error($connection);
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
	<?php 
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$sql = "SELECT * FROM time_table where id = '$id'";

			$obj = mysqli_query($connection,$sql);

			foreach ($obj as $key => $name) {
		
	?>
							<h5 class="page-title"><i class="fa fa-clock-o"></i>TIME SLOTS</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-plus-circle"></i>ADD SLOT</h6>
							<form method="post">
									<div class="inner-item">
									<div class="dash-form">
									<div class="col-sm-3">
									<label class="clear-top-margin"><i class="fa fa-calendar"></i>DAY</label>
									<select name="day">
										<option><?php echo $name['day']; ?></option>

										<option value="sunday">sunday</option>
										<option value="monday">monday</option>
										<option value="Tuesday">Tuesday</option>
										<option value="Wednesday">Wednesday</option>
										<option value="Thursday">Thursday</option>
										<option value="friday">friday</option>
										<option value="saturday">saturday</option>

										</select>
									</div>
									<div class="col-sm-3">
									<label class="clear-top-margin"><i class="fa fa-clock-o"></i>SLOT</label>
									<select name="slot">
										<option><?php echo $name['slot']; ?></option>
										<option value="09-10 AM">09-10 AM</option>
										<option value="10-11 AM">10-11 AM</option>
										<option value="11-12 PM">11-12 AM</option>
										<option value="12-1 PM">12-1 PM</option>
										<option value="1:30-2:30 PM">1:30-2:30 PM</option>
									</select>
									</div>
									<div class="col-sm-3">
									<label class="clear-top-margin"><i class="fa fa-book"></i>CLASS</label>
									<select name="class">
										<option><?php echo $name['class']; ?></option>
	<?php  
		include('database.php');
		$sql = "SELECT * FROM class";
		$obj = mysqli_query($connection, $sql);
		foreach ($obj as $key => $value) {		
	?>
										<option value="<?php echo $value['class']; ?>"><?php echo $value['class']; ?></option>
	<?php } ?>
									</select>
									</div>
									<div class="col-sm-3">
									<label class="clear-top-margin"><i class="fa fa-users"></i>SECTION</label>
									<select name="section">
										<option><?php echo $name['section']; ?></option>
<?php  
	include('database.php');
	$sql = "SELECT * FROM section";
	$obj = mysqli_query($connection, $sql);
	foreach ($obj as $key => $value) {		
?>
										<option value="<?php echo $value['section']; ?>"><?php echo $value['section']; ?></option>
	<?php } ?>
									</select>
									</div>
									<div class="col-sm-3">
									<label><i class="fa fa-code"></i>SUBJECT</label>
									<select name="subject">
									<option><?php echo $name['subject']; ?></option>
	<?php  
		include('database.php');
		$sql = "SELECT * FROM subject";
		$obj = mysqli_query($connection, $sql);
		foreach ($obj as $key => $value) {		
	?>
									<option value="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></option>
	<?php } ?>
									</select>
									</div>
									<div class="col-sm-3">
									<label><i class="fa fa-user"></i>TEACHER</label>
									<select name="teacher">
									<option><?php echo $name['teacher']; ?></option>
		<?php  
			include('database.php');
			$sql = "SELECT * FROM teacher";
			$obj = mysqli_query($connection, $sql);
			foreach ($obj as $key => $value) {		
		?>
									<option value="<?php echo $value['first_name']." ".$value['last_name']; ?>"><?php echo $value['first_name']." ".$value['last_name']; ?></option>
		<?php } }} ?>
									</select>
									</div>
									<div class="col-sm-3">
									<label><i class="fa fa-home"></i>CLASS ROOM</label>
									<input type="text" name="class_room" value="<?php echo $name['class_room']; ?>">
									</div>
									<div class="clearfix"></div>
									<div class="col-sm-2">
									<input class="btn btn-success" type="submit" name="submit" value="submit">
									</div>
									</div>
									<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>

					</form>
							
				<div class="menu-togggle-btn">
					<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
				</div>


<?php include('footer.php'); ?>