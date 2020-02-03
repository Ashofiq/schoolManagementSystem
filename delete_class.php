<?php 
	include('database.php');
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "DELETE from class WHERE id = '$id'";
		mysqli_query($connection, $sql);

	}

	header('Location: add_class.php?msg1=delete successfully');

?>