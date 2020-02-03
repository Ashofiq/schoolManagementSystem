<?php include('header.php'); ?>
<?php include('database.php'); ?>
<?php 

  if (isset($_POST['submit']) and $_GET['id']) {
  	$id = $_GET['id'];
	$type        = $_POST['type'];
	$prapok      = $_POST['prapok'];
	$subject 	 = $_POST['subject'];
	$description = $_POST['description'];
	$date        = $_POST['date'];		
	$sql = "UPDATE notice SET type ='$type', prapok = '$prapok', subject= '$subject', description='$description', date = '$date' WHERE id = '$id'";

	$obj = mysqli_query($connection, $sql);
	if ($obj) {
		echo '<div class=" text-center alert alert-success">
  				<strong>Success!</strong> successful create.
			  </div>
			  <script>
			  	window.location.replace("notice.php?msg=update successfully");

			  	</script>';
	}else{
		echo '<div class="alert alert-danger">
  				<strong>problem!</strong> 
			  </div>'.mysqli_error($connection);
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
							<h5 class="page-title"><i class="fa fa-bullhorn"></i>EDIT ANNOUNCEMENTS</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-4">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-plus-circle"></i>EDIT ANNOUNCEMENT</h6>
									<form method="post">
									<div class="inner-item">
		<?php 

			if (isset($_GET['id'])) {
				$id = $_GET['id'];
			
			$sql = "SELECT * FROM notice where id = '$id'";
			$obj = mysqli_query($connection, $sql);

			foreach ($obj as $key => $value) {
							
		?>
										<div class="dash-form">
											<label class="clear-top-margin"><i class="fa fa-cogs"></i>TYPE</label>
											<select name="type">
												<option><?php echo $value['type']; ?></option>
												<option value="Academic">Academic</option>
												<option value="Administrative">Administrative</option>
												<option value="Sports">Sports</option>
											</select>
											<label><i class="fa fa-user-secret"></i>FOR</label>
											<select name="prapok">
												<option><?php echo $value['prapok']; ?></option>
												<option value="All">All</option>
												<option value="Teacher">Teacher</option>
												<option value="Student">Student</option>
											</select>
											<label><i class="fa fa-code"></i>SUBJECT</label>
											<input type="text" value="<?php echo $value['subject']; ?>" name="subject" placeholder="Subject" />
											<label><i class="fa fa-info-circle"></i>DESCRIPTION</label>
											<input rows="5" name="description" placeholder="Enter Description Here" value="<?php echo $value['description']; ?>" >
											<div class="hide">
												<input type="text" cols="40" 
      											rows="5" name="date" value="<?php echo date('d-m-y'); ?>">
											</div>
											<div>
												<input class="btn btn-success" type="submit" name="submit" value="Update">
											</div>
										</div>
				<?php } } ?>
									</form>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						
						</div>
					</div>
				</div>




<textarea name="textarea" class="jqte-test"><b>My contents are from <u><span style="color:rgb(0, 148, 133);">TEXTAREA</span></u></b></textarea>

<input name="input" type="text" value="<b>My contents are from <u><span style=&quot;color:rgb(0, 148, 133);&quot;>INPUT</span></u></b>" class="jqte-test">

<span name="span" class="jqte-test"><b>My contents are from <u><span style="color:rgb(0, 148, 133);">SPAN</span></u></b></span>





<script>
	$("textarea").jqte();
	
	// settings of status
	var jqteStatus = true;
	$(".status").click(function()
	{
		jqteStatus = jqteStatus ? false : true;
		$('.jqte-test').jqte({"status" : jqteStatus})
	});
</script>


				<div class="menu-togggle-btn">
					<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
				</div>
				<?php include('footer.php'); ?>


