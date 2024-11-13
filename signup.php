<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup - ChatApp</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="signup-container">
    <form class="signup-form">
      <h2>Create Your Account</h2>
      
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required placeholder="Enter your username">
      
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required placeholder="Enter your email">
      
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required placeholder="Enter your password">
      
      <label for="confirm-password">Confirm Password</label>
      <input type="password" id="confirm-password" name="confirm-password" required placeholder="Confirm your password">
      
      <button type="submit" class="signup-btn">Sign Up</button>
      
      <p class="terms">
        By signing up, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.
      </p>
    </form>
  </div>
  <br>
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
