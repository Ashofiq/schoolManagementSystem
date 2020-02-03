<?php include('database.php'); ?>

<?php 
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$author = $_POST['author'];

		$pic = $_FILES['pic']['name'];
      	
      	$pic_tmp =$_FILES['pic']['tmp_name'];

      	$pdf = $_FILES['pdf']['name'];
      	$pdf_tmp = $_FILES['pdf']['tmp_name'];

      	move_uploaded_file($pic_tmp, 'images/'.$pic);
      	move_uploaded_file($pdf_tmp, 'pdf/'.$pdf);

      	$sql  = "INSERT INTO book_list(name,author,pic,pdf) VALUES('$name', '$author', '$pic','$pdf')";
      	$obj = mysqli_query($con, $sql);

      	if ($obj) {
      		echo "insert";
      	}


	}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="text-center"><h1>Libery mangement system</h1></div>
<form method="post"  enctype="multipart/form-data">
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Book name</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control"  placeholder="Book name">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Author name</label>
    <div class="col-sm-10">
      <input type="text" name="author" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Picture</label>
    <div class="col-sm-10">
      <input type="file" name="pic" class="form-control" id="inputPassword3" >
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">PDF</label>
    <div class="col-sm-10">
      <input type="file" name="pdf" class="form-control" id="inputPassword3" >
    </div>
  </div>
 
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
</body>
</html>