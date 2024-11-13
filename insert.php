

 <?php
 
  include "conn.php";


  if (isset($_POST['send'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
  }

  if ($confirm_password==$password) {
    $sql = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$password')";
    $result = mysqli_query($con, $sql);

    header("location:signin.php");

  }
  
  else {
    
    $ms="<h1>Re-tyeps password Again!!!</h1>";

    //header("location:signup.php");
  }
 
 
 
 ?>