<?php 
  session_start();
  include('database.php');
  

  if (isset($_POST['submit'])) {
   $student_id = $_POST['student_id'];
   $email = $_POST['email'];

   $sql = "SELECT * FROM student";
   $result = mysqli_query($connection, $sql);

   if (mysqli_num_rows($result)>0) {
     $_SESSION['student_id'] = $student_id;
     header('Location: student_profile.php');
   }else{
    echo "Account invalid";
   }


  }

?>



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
      <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

  <form method="post" class="login-container">
    <p><input type="text" name="student_id" placeholder="Enter ID"></p>
    <p><input type="email" name="email" placeholder="Email"></p>
    <p><input type="submit" name="submit" value="Log in"></p>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
</body>
</html>
