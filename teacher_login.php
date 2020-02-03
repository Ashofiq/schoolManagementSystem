<?php 
  session_start();
  include('database.php');
  

  if (isset($_POST['submit'])) {
   $teacher_id = $_POST['teacher_id'];
   $email = $_POST['email'];

   $sql = "SELECT * FROM teacher";
   $result = mysqli_query($connection, $sql);

   if (mysqli_num_rows($result)>0) {
     $_SESSION['teacher_id'] = $teacher_id;
     header('Location: teacher_profile.php');
   }else{
    echo "Account invalid";
   }


  }

?>

<!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>

<h2>Login Form</h2>

<form method="post">
  <div class="imgcontainer">
    <p>Teacher Area</p>
  </div>

  <div class="container">
    <label><b>Teacher ID</b></label>
    <input type="text" placeholder="Enter Username" name="teacher_id" required>

    <label><b>Email</b></label>
    <input type="email" placeholder="Enter Password" name="email" required>
        
    <input  type="submit" name="submit" value="submit">
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>

