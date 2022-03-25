

<?php


function display_menu($parent_id = 0){
  $servername = "localhost";
  $username = "root";
  $id = "";
  $db="getmenuauthentication";

  // Create connection
  $conn = mysqli_connect($servername, $username, $id, $db);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql3="SELECT * FROM menus WHERE parent_id='$parent_id'";
  if($result3 = mysqli_query($conn, $sql3)){
    if(mysqli_num_rows($result3) > 0){
      echo "<form action='' method='post'>";
      echo "<input type='text' name='forname' placeholder='' />" . "</form>";
      echo "<ul>";
      while($row = mysqli_fetch_array($result3)){

        echo "<div>" . "<input name='for_menu_name' placeholder='" . $row['menu_name'] . "'>" . "</input>";
        echo "<form action='delete.php' method='post'>" . "<input type='hidden' name='id' value='" . $row['ID'] . "'>" . "<button type='submit' name='delete'>" . "<i class='fa-solid fa-trash-can'>" . "</i>" . "</button>";

        echo "</form>";
        echo "<form action='adddata.php' method='post'>" . "<input type='hidden' name='id' value='" . $row['ID'] . "'>" . "<button type='submit' name='add'>" . "<i class='fa-solid fa-square-plus'>" . "</i>" . "</button>" . "</form>";

        echo "</div>";
        display_menu($row['ID']);



      }
      echo "</ul>";

    }
  }
}

?>

