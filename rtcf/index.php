<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login-page-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style></style>
   </head>
<body>
  <div class="container">
    
    <div class="cover">
      <div class="front">
        <img src="dist/images/frontImg.jpg" alt="">
        
        
      </div>
      
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
            <?php if (isset($_SESSION['login_failed'])) : ?>
        <div class="alert">
          Incorrect username or password or user type mismatch!
        </div>
      <?php
        unset($_SESSION['login_failed']);
      endif;
      ?>
          <form action="./auth.php" method="post" class="form">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="username" placeholder="Enter your username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
              <div class="user">
        <label for="user">Select  a user:</label>
        <select name="user" id="user">
          <option value="admin">admin</option>
          <option value="journalist">journalist</option>
          <option value="unambassador">un_ambassador</option>
          <option value="educationalinstitute">educational_institute</option>
          <option value="visitor">visitor</option>
          <option value="environmentalscientist">environmentalscientist</option>
        </select>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" name="submit" value="Login">
              </div>

              </div>
            </div>
        </form>

    </div>
    <div>      <label for="">Dont have an account?</label>

    <div class="text sign-up-text"><button onclick="window.location.href='signup.php';">Signup!</button>
    </div>
  </div>
</body>
</html>
