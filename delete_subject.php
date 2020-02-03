<?php 
	include('database.php');
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "DELETE from subject WHERE id = '$id'";
		mysqli_query($connection, $sql);

	}

	header('Location: add_subject.php?msg1=delete successfully');

?>