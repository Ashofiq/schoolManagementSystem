<?php include('header.php'); ?>
<?php include('database.php'); ?>
<?php /*
	if (isset($_POST['submit'])) {
	$i=0;	
	foreach ($_POST as $value) {
		$first_name = $_POST['first_name'];
		$student_id = $_POST['student_id'];
		$status     = $_POST['status'];
		$day        = $_POST['day'];
		$month		= $_POST['month'];
		$year       = $_POST['year'];
		$sql = "INSERT INTO attendence(student_name, student_id, status, day, month, year) VALUES('$first_name','$student_id','$status','$day','$month','$year')";
		$obj = mysqli_query($connection, $sql);
		
	}
}
*/
?>

		<div class="parent-wrapper" id="outer-wrapper">
			<!-- SIDE MENU -->
			<?php include('side_menu.php'); ?>

			
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
			
			<div class="container">
			  
			  <table class="table table-striped">
			    <thead>
			      <tr>
			      	<th>Serial</th>
			        <th>name</th>
			        <th>Student ID</th>
			        <th>Status</th>

			      </tr>
			    </thead>
			    <tbody>
	<?php 
		$sql = "SELECT * FROM student";
		$obj = mysqli_query($connection, $sql);
		$i=1;
		foreach ($obj as $key => $value) {
			
		
	?>
				<form method="post">
			      <tr>
			      	<td><?php echo $i++; ?></td>
			        <td><input type="text" name="first_name" value="<?php echo $value['first_name']; ?>"  ></td>
			       <td><input type="text" name="student_id" value="<?php echo $value['student_id']; ?>"  ></td>
			        <td>
				        presant<input type="radio" name="status[<?php echo $value['student_id']; ?>]" value="presant ">
				        Absent<input type="radio" name="status[<?php echo $value['student_id']; ?>]" value="Absent" >
			        </td>
			      </tr>
			      <tr>
			      	<td class="hide">
			      		<input type="text" name="day" value="<?php echo date('d'); ?>">
			      	</td>
			      </tr>

			      <tr>
			      	<td class="hide">
			      		<input type="text" name="month" value="<?php echo date('m'); ?>">
			      	</td>
			      </tr>

			      <tr>
			      	<td class="hide">
			      		<input type="text" name="year" value="<?php echo date('Y'); ?>">
			      	</td>
			      </tr>
			      
	<?php } ?>

			        
			    </tbody>
			  </table>
			  <input class="btn btn-success" name="submit" type="submit" value="submit">
			</div>

			</form>


			<?php 

				if ($_SERVER['REQUEST_METHOD']=='POST') {
					$first_name = $_POST['first_name'];
					$student_id = $_POST['student_id'];
					$status     = $_POST['status'];
					$day        = $_POST['day'];
					$month		= $_POST['month'];
					$year       = $_POST['year'];
					$i=1;
					foreach ($status as $key => $value) {
							echo $key;
						}

						if ($obj) {
							echo "success";
						}else{
							echo mysqli_error($connection);
						}

					
				}

			?>





				<div class="menu-togggle-btn">
					<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
				</div>
	

	<?php include('footer.php'); ?>