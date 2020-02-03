<?php 
	include('database.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Image Gallery</h2>
  <form action="search.php" method="post" class="form-control">
    <input type="text" name="search">
    <input type="submit" name="submit" value="search">
  </form>
  <div class="row">

  	<?php 
  		$sql = "SELECT * FROM book_list";
  		$obj = mysqli_query($con, $sql);

  		foreach ($obj as $key => $value) {
  	?>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="pdf/<?php echo $value['pdf']; ?>">
          <img src="images/<?php echo $value['pic']; ?>" alt="Lights" style="width:100%">
          <div class="caption text-center" >
            <p>Book name : <?php echo $value['name']; ?></p>
            <p>Author name : <?php echo $value['author']; ?></p>
          </div>
        </a>
      </div>
    </div>
 <?php } ?>
  </div>
</div>

</body>
</html>


