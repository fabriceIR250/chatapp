<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In - ChatApp</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="signin-container">
    <form class="signin-form">
      <h2>Welcome Back</h2>
      
      <label>Email</label>
      <input type="email" id="email" name="email" required placeholder="Enter your email">
      
      <label>Password</label>
      <input type="password" id="password" name="password" required placeholder="Enter your password">
      
      <button type="submit" class="signin-btn">Sign In</button>
      
      <p class="forgot-password">
        <a href="#">Forgot password?</a>
      </p>
      
      <p class="signup-link">
        Don't have an account? <a href="signup.php">Sign up here</a>
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
