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

if(isset($_POST['delete'])){
  $id = $_POST['id'];

  $sql4="DELETE FROM menus WHERE ID='$id' ";
  if($result4 = mysqli_query($conn, $sql4)){
    echo "Deleted";
    header("location:logout.php");

  }
  else{
    echo "Error: " . mysqli_error($conn);
  }
  mysqli_close($conn);
}

?>
