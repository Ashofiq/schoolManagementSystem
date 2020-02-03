<?php 
	include('database.php');
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address =$_POST['address'];
    $book_name = $_POST['book_name'];
    $entry_date = $_POST['entry_date'];
    $given_date  = $_POST['given_date'];
    $day         = $_POST['day'];
    $month       = $_POST['month'];
    $year        = $_POST['year'];

    $sql = "INSERT INTO booK_service (day,  month, year,  name,  address, phone, book_name, entry_date,  given_date) VALUES ('$day','$month', '$year','$name', '$address','$phone','$book_name','$entry_date','$given_date')";
    $obj = mysqli_query($con, $sql);
    if ($obj) {
      echo "success";
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book service</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <h2 class="text-center">Library management System</h2>
  <form action="search.php" method="post" >
    <input class="col-md-2 form-control" type="text" name="search" placeholder="Search book">
    <input class="btn btn-primary" type="submit" name="submit" value="search">
  </form>
  <div class="jumbotron col-md-6">
    <h2 class="display-3 text-center">Book Service, add info!</h2>
    <form method="post" >

      <label> Customer Name:</label>
      <input class="form-control" type="text" name="name" placeholder="Enter name">

      <label>phone number:</label>
      <input class="form-control" type="text" name="phone" placeholder="Enter name">

      <label>Address:</label>
      <input class="form-control" type="text" name="address" placeholder="Enter name">

      <label>Book name:</label>
      <input class="form-control" type="text" name="book_name" placeholder="Enter name">

      <label>Entry date:</label>
      <input class="form-control" type="text" name="entry_date" placeholder="Enter name" value="<?php echo date('d'); ?>">

      <label>back date:</label>
      <input class="form-control" type="date" name="given_date" placeholder="Enter name">

      <label>day:</label>
      <input class="form-control" type="hidden" name="day" placeholder="Enter name" value="<?php echo date('d'); ?>">

      <label>month:</label>
      <input class="form-control" type="hidden" name="month" placeholder="Enter name" value="<?php echo date('m'); ?>">

      <label>year:</label>
      <input class="form-control" type="hidden" name="year" placeholder="Enter name" value="<?PHP echo date('y') ?>">
    
    <p class="lead">
      <input type="submit" name="submit" class="btn btn-primary btn-lg" role="button" value="Submit">
    </p>

    </form>
  </div>

  <div class="jumbotron col-md-6">
    <h1 class="display-3">Notification<i style="color: red" class="fa fa-bell-o" aria-hidden="true"></i>
</h1>
    <button class="btn btn-info pull-right">view all</button>

  <?php 
    $day = date("Y-m-d");
     
      $sql = "SELECT * from booK_service where given_date = '$day'";
      $obj = mysqli_query($con, $sql);

      foreach ($obj as $key => $value) {
  ?>

  <table class="table">
    <tr>
      <td>Name : </td>
      <td> <?php echo $value['name']; ?></td>
    </tr>

    <tr>
      <td>Address : </td>
      <td> <?php echo $value['address']; ?></td>
    </tr>

    <tr>
      <td>Phone : </td>
      <td> <?php echo $value['phone']; ?></td>
    </tr>

    <tr>
      <td>Back date : </td>
      <td style="color: red; font-weight: bold; font-size: 120%"> Today</td>
    </tr>
    
  </table>
  <hr>
    <?php } ?>
</div>
</div>

</body>
</html>


