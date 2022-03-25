<?php
/*
$servername = "localhost";
$username = "root";
$password = "";
$db="getmenuauthentication";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$user_email = "name.surname@project.com";
$password_to_hash = "123abc!KM";
$hashed_password = password_hash($password_to_hash, PASSWORD_DEFAULT);

$sql1="INSERT INTO users (ID, Email, Pass) VALUES (null, '$user_email', '$hashed_password')";
$result1 = mysqli_query($conn, $sql1);

// Close connection
mysqli_close($conn);
*/
//$password_to_hash = "123abc!KM";
//$hashed_password = password_hash($password_to_hash, PASSWORD_DEFAULT);

$servername = "localhost";
$username = "root";
$password = "";
$db="getmenuauthentication";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

session_start();
if(isset($_COOKIE['email_username']) && isset($_COOKIE['password'])){
  $id=$_COOKIE['email_username'];
  $pass=$_COOKIE['password'];
}else{
  $id="";
  $pass="";
}

if(isset($_POST['username'])){
  $uname=$_POST['username'];
  $password=$_POST['password'];

  $sql2="SELECT * FROM users WHERE Email='$uname'";

  if($result = mysqli_query($conn, $sql2)){
    if(mysqli_num_rows($result) > 0){

      while($row = mysqli_fetch_array($result)){
        $for_pass = $row['Pass'];
        if(password_verify($password, $for_pass)==1){
          echo "Hello, " . $row['Email'] . "! You're Successfully In!";
          $_SESSION['logged_in'] = true;
          $_SESSION['username']=$row['Email'];
          if(!empty($_POST['remember_me']))
          {
            setcookie('email_username', $uname, time()+(6*20*30*20)); // days; hours; minutes; seconds
            setcookie('password', $password, time()+(6*20*30*20));
          }

          header('Location: logout.php');

        }else{
          echo "No, Password Is Different!";
        }
      }

      // Close result set
      mysqli_free_result($result);
    } else{
      echo "No records matching your query were found.";
    }
  } else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn);
  }
}
// Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>

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
  </style>
</head>
<body>
<div class="container">
  <form method="POST" action="#">
    <h4>Login Form</h4>
    <h6>User Name</h6>
    <div class="form_input">
      <input type="email" name="username" placeholder="Enter Your E-mail" value="<?php echo $id ?>" />
    </div>
    <h6>Password</h6>
    <div class="form_input">
      <input type="password" name="password" placeholder="Enter Your Password" value="<?php echo $pass ?>" />
    </div>
    <div class="item">
      <input type="checkbox" id="remember_me" name="remember_me"><label for='remember_me'>Remember Me</label>
    </div>

    <input type="submit" name="submit" value="LOGIN" class="btn_login" />
  </form>
</div>
</body>
</html>
