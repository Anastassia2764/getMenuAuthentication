<?php

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

if(isset($_POST['add'])){
  $id = $_POST['id'];

  $fname = $_POST['forname'];

  $sql5="INSERT INTO menus (ID, menu_name, parent_id) VALUES (NULL, $fname, $id) ";
  if($result5 = mysqli_query($conn, $sql5)){
    echo "Added";
    header("location:logout.php");

  }
  else{
    echo "Error: " . mysqli_error($conn);
  }
  mysqli_close($conn);

}


?>
