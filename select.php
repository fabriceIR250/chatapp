<?php

include "conn.php";

 if (isset($_POST['send'])) {
 
     $email=$_POST['email'];
     $password=$_POST['password'];

     $result=mysqli_query($con,"SELECT * FROM users WHERE email='$email' AND password='$password'");

     if (mysqli_num_rows($result)>0) {
       $data=mysqli_fetch_assoc($result);
       session_start();
       $_SESSION['id'] = $data['id'];
       $_SESSION['email'] = $data['email'];
       $_SESSION['name'] = $data['username'];
       $_SESSION['login'] = true;
       header("Location: chat.php");
       exit();

     }
     else {
         echo "Invalid email or password";
     }


    }



?>