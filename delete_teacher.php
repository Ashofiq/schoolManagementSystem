<?php 
	include('database.php');
	if (isset($_GET['teacher_id'])) {
		$id = $_GET['teacher_id'];
		$sql = "DELETE from teacher WHERE teacher_id = '$id'";
		mysqli_query($connection, $sql);

	}

	header('Location: all_teacher.php');

?>