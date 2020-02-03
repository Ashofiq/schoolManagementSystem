<?php 
	include('database.php');
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "DELETE from notice WHERE id = '$id'";
		mysqli_query($connection, $sql);

	}

	header('Location: notice.php?msg1=delete successfully');

?>