<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../assests/css/login.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="img/Login.png" alt="Logo">
        </div>
        <h1 class="title">Welcome Back !</h1>
        <div class="signin-form">

            <form action="../../app/controllers/auth/Authentificate.php" method="post">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required><br>

                <button type="submit" name="login" class="login-button">Login</button>
            </form>
        </div>
        <div class="forgot-password">
            <a href="#">Forgot Password?</a>
        </div>
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
            <p>Don't have an account? <a href="register.php">Sign Up</a></p>
        </div>
    </div>
</body>

</html>