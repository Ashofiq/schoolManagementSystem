<?php include('header.php'); ?>

<?php
	if (isset($_GET['msg'])) {
		$msg = $_GET['msg'];
		echo "<div class='alert alert-success text-center'>".$msg."</div>";
	}
?>

	<div class="parent-wrapper" id="outer-wrapper">
		<!-- SIDE MENU -->
		<?php include('side_menu.php'); ?>

<form class="container" method="post">
	<div class="col-md-2">
     
      <select name="class" class="form-control " >
        <?php 
		include 'database.php';
			$sql = "SELECT * FROM class";
			$obj = mysqli_query($connection, $sql);

			foreach ($obj as $key => $value) {?>
		    <option value="<?php echo $value['class']; ?>"><?php echo $value['class']; ?></option>
		<?php } ?> 
      </select>
    </div>

    <div class="col-md-2">
      <select name="section" class="form-control " >
      <option>Section</option>
       <?php 
		include 'database.php';
			$sql = "SELECT * FROM section";
			$obj = mysqli_query($connection, $sql);

			foreach ($obj as $key => $value) {?>
		    <option value="<?php echo $value['section']; ?>"><?php echo $value['section']; ?></option>
		<?php } ?> 
      </select>
    </div>

    <div class="col-md-2">
      <select name="exam_name" class="form-control " id="sel1">
        <option>--Exam name--</option>
        <option value="1st mid">Mid one</option>
        <option value="2nd mid">mid two</option>
        <option value="final">Final</option>
      </select>
    </div>

    <div class="col-md-2">
      <select name="year" class="form-control " id="sel1">
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2010">2020</option>
      </select>
    </div>

  <div class="input-group">
    <input type="text" name="student_id" class="form-control " placeholder="Search result with ID">
    <div class="input-group-btn">
      <button class="btn btn-default " type="submit" name="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
	<?php  
		if (isset($_POST['submit'])) {
			$class = $_POST['class'];
			$section = $_POST['section'];
			$year    = $_POST['year'];
			$student_id = $_POST['student_id'];

			$sql = "SELECT * FROM result where class like '%$class%' and section like '%$section%' and year like '%$year%' and student_id like '%$student_id%' ";
			$obj = mysqli_query($connection, $sql);
			if ($obj) {
				echo "success";
			}else{
				echo "prob".mysqli_error($connection);
			}

			foreach ($obj as $key => $value) { 
		function grade($number){
			if ($number=='') {
				echo "incomplete";
			}elseif ($number<=32) {
				echo "Fail";
			}elseif ($number<=39) {
				echo "D";
			}elseif ($number<=49) {
				echo "C";
			}elseif ($number<=59 ) {
				echo "B";
			}elseif ($number<=69) {
				echo "A-";
			}elseif ($number<=79) {
				echo "A";
			}elseif ($number<=100) {
				echo "A+";
			}

		}
		?>
	<div class="container" style="margin-top: 20px">
		<table class="table table-striped">
			<tr>
				<th>Item</th>
				<th>Marks</th>
				<th>Grade</th>
			</tr>
			<tr>
				<td>Bangla</td>
				<td><?php echo $value['bangla']; ?></td>
				<td><?php echo grade($value['bangla']); ?></td>
			</tr>

			<tr>
				<td>English</td>
				<td><?php echo $value['english']; ?></td>
				<td><?php echo grade($value['english']); ?></td>
			</tr>

			<tr>
				<td>Math</td>
				<td><?php echo $value['math']; ?></td>
				<td><?php echo grade($value['math']); ?></td>
			</tr>

			<tr>
				<td>Science</td>
				<td><?php echo $value['science']; ?></td>
				<td><?php echo grade($value['science']); ?></td>
			</tr>

			<tr>
				<td>Social science</td>
				<td><?php echo $value['social_science']; ?></td>
				<td><?php echo grade($value['social_science']); ?></td>
			</tr>

			<tr>
				<td>Inslam</td>
				<td><?php echo $value['islam']; ?></td>
				<td><?php echo grade($value['islam']); ?></td>
			</tr>

			<tr>
				<td>Genaral knowledge</td>
				<td><?php echo $value['genaral_knowledge']; ?></td>
				<td><?php echo grade($value['genaral_knowledge']); ?></td>
			</tr>

			<tr>
				<td>Art</td>
				<td><?php echo $value['art']; ?></td>
				<td><?php echo grade($value['art']); ?></td>
			</tr>

			<tr>
				<td></td>
				<td>Total Grade :</td>
				<td>
				<?php $a = array($value['bangla'],$value['english'],$value['math'],$value['science'],$value['social_science'],$value['islam'],$value['genaral_knowledge'],$value['art']);

				// if ($value['bangla'] < 32 OR $value['english'] < 32 OR $value['math'] < 32 OR $value['science'] < 32 OR $value['social_science'] < 32 OR $value['islam'] < 32 OR $value['genaral_knowledge'] < 32 OR $value['art'] <32) {
				//  	echo "fail";
				//  }else{
				 	echo grade(array_sum($a)/count($a));
				 //}
	    	
		
	?>
				</td>
			</tr>
		</table>
		<a href="update_result.php?student_id=<?php echo $value['student_id']; ?>"><button class="btn btn-danger">Edit</button></a>
		<a href="delete_result.php?student_id=<?php echo $value['student_id']; ?>"></a><button class="btn btn-success">DELETE</button>
	</div>
<?php }} ?>

<div class="menu-togggle-btn">
	<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
</div>
<?php include('footer.php'); ?>