<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assests/css/register.css">
    <title>Register</title>
</head>
<body>
  <div class="container">
    <div class="logo">
      <img src="img/Login.png" alt="Logo">
    </div>
    <h1 class="title">Create an Account</h1>
   <form action="../../app/controllers/auth/Authentificate.php" method="post">
   <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
    </div>
    <div class="form-group">
      <label for="confirm_password">Confirm Password:</label>
      <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
    </div>
    <button type="submit" class="login-button" name="register">Sign Up</button>
   </form>
    <div class="or-divider">OR</div>
    <div class="social-login">
      <p>Login with Social Account</p>
      <div class="social-icons">
        <img src="img/facebook.png" alt="Facebook">
        <img src="img/Twit.png" alt="Twitter">
        <img src="img/insta.png" alt="Instagram">
      </div>
    </div>
    <div class="no-account">
      <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
  </div>
</body>
</html>
