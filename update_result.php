<?php 
include('database.php');
	if (isset($_POST['submit']) AND ($_GET['student_id'])) {
    $id = $_GET['student_id'];

		$exam_name = $_POST['exam_name'];
		$student_id = $_POST['student_id'];
		$year = $_POST['year'];
		$class = $_POST['class'];
		$section = $_POST['section'];
		$bangla = $_POST['bangla'];
		$english = $_POST['english'];
		$math = $_POST['math'];
		$science = $_POST['science'];
		$social_science = $_POST['social_science'];
		$islam = $_POST['islam'];
		$genaral_knowledge = $_POST['genaral_knowledge'];
		$art = $_POST['art'];

		$sql = "UPDATE result SET student_id = '$student_id', exam_name = '$exam_name', year= '$year',class='$class',section='$section',bangla='$bangla',english='$english',math='$math',science='$science',social_science='$social_science',islam='$islam',genaral_knowledge='$genaral_knowledge',art='$art' where student_id = '$id'";
		$obj = mysqli_query($connection, $sql);

		if ($obj) {
			header('Location:view_result.php?msg=successfully update result');
		}else{
      echo mysqli_error($connection);
    }
}     
?>


<?php include('header.php'); ?>
	<div class="parent-wrapper" id="outer-wrapper">
		<!-- SIDE MENU -->
		<?php include('side_menu.php'); ?>

<div class="container">
<form method="post">
	<h2 class="text-center">Update result</h2>
<?php 
      if (isset($_GET['student_id'])) {
      $id = $_GET['student_id'];
      $sql = "SELECT * FROM result where student_id = '$id'";
      $obj = mysqli_query($connection, $sql);

      foreach ($obj as $key => $part) { ?>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Exam name</label>
 <div class="form-group col-sm-2">
  <select class="form-control" name="exam_name">
    <option value="1st mid"><?php echo $part['exam_name']; ?></option>
    <option value="1st mid">first mid</option>
    <option value="2nd mid">secount mid</option>
    <option value="final">final</option>
  </select>
</div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Year</label>
    <div class="col-sm-10">
      <input name="year" type="text" class="form-control" value="<?php echo $part['year']; ?>">
    </div>
  </div>

<div class="form-group row">
    <label  class="col-sm-2 col-form-label">Class</label>
    <div class="form-group col-sm-2">
		<select class="form-control" name="class">
    <option value="<?php echo $part['class']; ?>"><?php echo $part['class']; ?></option>
		<?php 
		include 'database.php';
			$sql = "SELECT * FROM class";
			$obj = mysqli_query($connection, $sql);

			foreach ($obj as $key => $value) {?>
		    <option value="<?php echo $value['class']; ?>"><?php echo $value['class']; ?></option>
		<?php } ?>    
		</select>
	</div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Section</label>
      <div class="form-group col-sm-2">
		<select class="form-control" name="section">
    <option value="<?php echo $part['section']; ?>"><?php echo $part['section']; ?></option>
		<?php 
		include 'database.php';
			$sql = "SELECT * FROM section";
			$obj = mysqli_query($connection, $sql);

			foreach ($obj as $key => $value) {?>
		    <option value="<?php echo $value['section']; ?>"><?php echo $value['section']; ?></option>
		<?php } ?>    
		</select>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Student id</label>
    <div class="col-sm-10">
      <input name="student_id" type="text" class="form-control"  placeholder="Enter id" value="<?php echo $part['student_id']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Bangla</label>
    <div class="col-md-10">
      <input name="bangla" type="text" class="form-control"  placeholder="Enter marks" value="<?php echo $part['bangla']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">English</label>
    <div class="col-sm-10">
      <input name="english" type="text" class="form-control"  placeholder="Enter marks" value="<?php echo $part['english']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Math</label>
    <div class="col-sm-10">
      <input name="math" type="text" class="form-control"  placeholder="Enter Marks" value="<?php echo $part['math']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Science</label>
    <div class="col-sm-10">
      <input name="science" type="text" class="form-control"  placeholder="Enter Marks " value="<?php echo $part['science']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Social science</label>
    <div class="col-sm-10">
      <input name="social_science" type="text" class="form-control"  placeholder="Enter Marks" value="<?php echo $part['social_science']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Islam</label>
    <div class="col-sm-10">
      <input name="islam" type="text" class="form-control"  placeholder="Password" value="<?php echo $part['islam']; ?>">
    </div>
  </div>


<div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Genaral knowledge</label>
    <div class="col-sm-10">
      <input name="genaral_knowledge" type="text" class="form-control"  placeholder="Enter Marks" value="<?php echo $part['genaral_knowledge']; ?>">
    </div>
  </div>

<div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Art </label>
    <div class="col-sm-10">
      <input type="text" name="art" class="form-control"  placeholder="Enter number" value="<?php echo $part['art']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <input class="btn btn-info" type="submit" name="submit" value="submit">
    </div>
  </div>
<?php } } ?>
</form>
</div>


		<div class="menu-togggle-btn">
			<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
		</div>
	<?php include('footer.php'); ?>