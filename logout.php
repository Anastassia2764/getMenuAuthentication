<?php
if (isset ($_POST ['submit'])) {
  session_start();
  session_unset();
  session_destroy();
  $_SESSION['logged_in'] = false;
  if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == false) {
    echo "Session End!";
    header('Location: login.php');
  } else {
    echo "Doesn't Ends!";
  }
}

?>



<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <script src="https://kit.fontawesome.com/1463bad6a0.js" crossorigin="anonymous"></script>
  <style>
    input {width: 170px; font-family: courier;}
    input[type='submit'] {margin-top: 30px; width: 170px; font-family: courier; align: center; color: white;}
    h4 {color: white; font-family: courier;}
    h6 {color: white; font-family: courier; text-align: left; margin-left: 36px;}
    label {color: white; font-family: courier;}
    .container {width: 250px;
      height: 350px;
      text-align: center;
      padding-top: 40px;
      margin: 7px;
      margin: 0 auto;
      background-color: rgb(52,69,94);
      border-radius: 14px;
      margin-top: 160px;}
    .btn_login {background-color: rgb(38,166,154);
      text-align: center;
      width: 180px;
      margin-top: 30px;
      font-family: courier;
      margin-left: -50px;}
    input[type='checkbox'] {
      float: left;
      width: 20px;
      margin-left: 34px;
      margin-top: 30px;}
    input[type='checkbox'] + label {
      display: block;
      float: left;
      width: auto;
      margin-top: 30px;
      font-size: 11.5px;}
    div#listMenu {width: 400px;
      height: auto;
      text-align: left;
      padding-top: 40px;
      margin: 7px;
      margin: 0 auto;
      background-color: rgb(52,69,94);
      border-radius: 14px;
      margin-top: 160px;
      color: white;
      font-family: courier;}
  </style>
</head>
<body>
<div class="container">
  <form method="POST" action="#">
    <h4>Login Form</h4>
    <h6>User Name</h6>
    <div class="form_input">
      <input type="email" name="username" placeholder="Enter Your E-mail" />
    </div>
    <h6>Password</h6>
    <div class="form_input">
      <input type="password" name="password" placeholder="Enter Your Password" />
    </div>
    <div class="item">
      <input type="checkbox" name="remember_me"><label for='remember_me'>Remember Me</label>
    </div>

    <input type="submit" name="submit" value="LOGOUT" class="btn_login" />
  </form>
</div>
<div id="listMenu">
  <?php include "functions.php"; ?>
  <?php display_menu(); ?>
</div>

</body>
</html>





