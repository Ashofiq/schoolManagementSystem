<?php 
	include('header.php');
	include('database.php');
?>
<?php 
	$sql = "SELECT * from result inner join subject on result.section = subject.section and result.class = subject.class and result.bangla = subject.name where result.student_id = '20170010'";
	$obj = mysqli_query($connection, $sql);
	foreach ($obj as $key => $value) {
	
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
				<td><?php //echo grade($value['bangla']); ?></td>
			</tr>

			<tr>
				<td>English</td>
				<td><?php echo $value['english']; ?></td>
				<td><?php //echo grade($value['english']); ?></td>
			</tr>

			<tr>
				<td>Math</td>
				<td><?php echo $value['math']; ?></td>
				<td><?php //echo grade($value['math']); ?></td>
			</tr>

			<tr>
				<td>Science</td>
				<td><?php echo $value['science']; ?></td>
				<td><?php //echo grade($value['science']); ?></td>
			</tr>

			<tr>
				<td>Social science</td>
				<td><?php echo $value['social_science']; ?></td>
				<td><?php //echo grade($value['social_science']); ?></td>
			</tr>

			<tr>
				<td>Inslam</td>
				<td><?php echo $value['islam']; ?></td>
				<td><?php //echo grade($value['islam']); ?></td>
			</tr>

			<tr>
				<td>Genaral knowledge</td>
				<td><?php echo $value['genaral_knowledge']; ?></td>
				<td><?php //echo grade($value['genaral_knowledge']); ?></td>
			</tr>

			<tr>
				<td>Art</td>
				<td><?php echo $value['art']; ?></td>
				<td><?php //echo grade($value['art']); ?></td>
			</tr>

			<tr>
				<td></td>
				<td>Total Grade :</td>
				<td>
				<?php $a = array($value['bangla'],$value['english'],$value['math'],$value['science'],$value['social_science'],$value['islam'],$value['genaral_knowledge'],$value['art']);

				// if ($value['bangla'] < 32 OR $value['english'] < 32 OR $value['math'] < 32 OR $value['science'] < 32 OR $value['social_science'] < 32 OR $value['islam'] < 32 OR $value['genaral_knowledge'] < 32 OR $value['art'] <32) {
				//  	echo "fail";
				//  }else{
				 	//echo grade(array_sum($a)/count($a));
				 //}
	    	
		
	?>
				</td>
			</tr>
		</table>
		<a href="update_result.php?student_id=<?php echo $value['student_id']; ?>"><button class="btn btn-danger">Edit</button></a>
		<a href="delete_result.php?student_id=<?php echo $value['student_id']; ?>"></a><button class="btn btn-success">DELETE</button>
	</div>
<?php } ?>

<div class="menu-togggle-btn">
	<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
</div>
<?php include('footer.php'); ?>


	<?php 
		$sql = "SELECT * FROM attendence";
		$obj = mysqli_query($connection, $sql);
		
		foreach ($obj as $key => $value) {
			echo $value['day'].'<br>';	
		}
	?>