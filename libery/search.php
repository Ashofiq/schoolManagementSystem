<?php 
	include('database.php');
	if (isset($_POST['submit'])) {
		$search = $_POST['search'];
		//$author = $_POST['author'];
		$sql = "SELECT * FROM book_list where name like '%$search%'";
		$obj = mysqli_query($con, $sql);
		$res = mysqli_num_rows($obj);
		if (empty($_POST['search'])) {
			echo '<p style="color:red">'.'write something'.'</p>';
		}elseif(mysqli_num_rows($obj)== false){
			echo "<div class='alert alert-success'>Book not Found</div>";
		}else{
						
		foreach ($obj as $key => $value) {
			echo $value['name'];
			echo $value['author'];
		}
	}
}
?>