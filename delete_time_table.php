<?php 
include('database.php');
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM time_table where id = '$id'";
	$obj = mysqli_query($connection, $sql);

	if ($obj) {
		header('Location: time_table.php?msg=delete successfully');
	}else{
		echo "problem".mysqli_error($connection);
	}

}
?>