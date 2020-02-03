<?php 
  session_start();
  include('database.php');
  

  if (isset($_POST['submit'])) {
   $username = $_POST['username'];
   $pass = $_POST['pass'];

   $sql = "SELECT * FROM admin";
   $result = mysqli_query($connection, $sql);

   if (mysqli_num_rows($result)>0) {
     $_SESSION['username'] = $username;
     header('Location: index.php');
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
    <p><input type="password" name="pass" placeholder="password"></p>
    <p><input type="submit" name="submit" value="Log in"></p>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
</body>
</html>
