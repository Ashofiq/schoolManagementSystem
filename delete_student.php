<?php 
	include('database.php');
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "DELETE from student WHERE id = '$id'";
		mysqli_query($connection, $sql);

	}

	header('Location: all_student.php?msg=delete successfully');

?>