<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}

// Retrieve the email from session
$id=$_SESSION['id'];
$email = $_SESSION['email'];
$name = $_SESSION['name'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <style>
         .container {
            width: 100%;
            max-width: 1000px;
            margin: 30px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile-header img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .profile-header h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .profile-header p {
            margin: 5px 0;
            color: #555;
        }

        .profile-details {
            margin-top: 20px;
        }

        .profile-details h2 {
            font-size: 20px;
            color: #333;
        }

        .profile-details p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }

        .btn-edit {
            display: inline-block;
            padding: 10px 15px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .btn-edit:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    
    <!-- Navbar -->
    <header>
        <div class="navbar">
            <h1>ChatApp</h1>
            <nav>
                <a href="#">Home</a>
                <a href="#">Features</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </nav>
        </div>
    </header>
    <br>


    <div class="container">
        <div class="profile-header">
            <img src="https://th.bing.com/th/id/OIP.7tlP1ph61ompULJdycVJlQHaHa?rs=1&pid=ImgDetMain" alt="Profile Picture"> <!-- Change with actual image URL -->
            <div>
                <h1><?php echo $name;  ?></h1>
                <p><?php echo $email;  ?></p>
                <p>Location: New York, USA</p>
            </div>
        </div>

        <div class="profile-details">
            <h2>About Me</h2>
            <p>Hello, I'm John! I am a web developer with a passion for building interactive and user-friendly websites. I love working with the latest web technologies and continuously improving my skills.</p>

            <h2>Interests</h2>
            <p>Programming, Photography, Traveling, Gaming, Hiking</p>

            <h2>Contact</h2>
            <p>Phone: +1 123 456 7890</p>
            <p><?php echo $email;  ?></p>
        </div>

        <a href="edit-profile.php?id=<?php echo $id; ?>" class="btn-edit">Edit Profile</a>
        <a href="logout.php" class="btn-edit">logout</a>
    </div>

    <br>
    <!--this is footer--->

<footer class="chat-footer">
  <div class="footer-content">
    <p>© 2024 ChatApp | All rights reserved</p>
    <div class="social-links">
      <a href="#" class="social-icon">FB</a>
      <a href="#" class="social-icon">TW</a>
      <a href="#" class="social-icon">IG</a>
    </div>
  </div>
</footer>


</body>
</html>
