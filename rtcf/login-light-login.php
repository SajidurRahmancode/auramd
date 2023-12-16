
<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />


  <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login </title>

<style>body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-color: #f5f5f5;
}

.container {
  background-color: #fff;
  border-radius: 5px;
  padding: 20px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.box {
  text-align: center;
}

.box__title {
  font-size: 24px;
  margin-bottom: 10px;
  color: #444;
}

.box__subtitle {
  font-size: 16px;
  color: #666;
  margin-bottom: 20px;
}

.form {
  display: flex;
  flex-direction: column;
  width: 100%;
}

.form__input {
  margin-bottom: 10px;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  width: 100%;
  font-size: 16px;
}

.form__button {
  background-color: #0095ff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}

.alert {
  background-color: #f5f5f5;
  color: #ff4747;
  padding: 10px;
  border-radius: 5px;
  margin-bottom: 20px;
}
</style>
</head>

<body>
  <div class="container">
    <div class="box">
      <h1 class="box__title">Carbon</h1>
      <p class="box__subtitle">Please login! let's help others reduce Carbon footprint</p>
      <?php if (isset($_SESSION['login_failed'])) : ?>
        <div class="alert">
          Incorrect username or password or user type mismatch!
        </div>
      <?php
        unset($_SESSION['login_failed']);
      endif;
      ?>
      <form action="./auth.php" method="post" class="form">
        <input type="text" class="form__input" placeholder="Username" name="username" required />
        <input type="password" class="form__input" placeholder="Password" name="password" required />
        <div>
        <label for="user">Select  a user:</label>
        <select name="user" id="user">
          <option value="admin">admin</option>
          <option value="journalist">journalist</option>
          <option value="un_ambassador">un ambassador</option>
          <option value="educational_institute">educational institute</option>
          <option value="visitor">visitor</option>
          <option value="environmental_scientist">environmental scientist</option>
        </select>
        </div>
        <button class="form__button" type="submit" name="submit">LOGIN</button>

      </form>
      
      <div>
      <label for="">Dont have an account?</label></div>
      <div class="text sign-up-text"><button onclick="window.location.href='signup.php';">Go to Facebook</button>
    </div>
    
  </div>
  
</body>

</html>