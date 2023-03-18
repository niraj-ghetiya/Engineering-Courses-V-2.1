
<?php
include('../config.php');


 
  $id = $_GET['uid'];
  $sql = "DELETE FROM `uesr` WHERE `uesr`.`uid` = $id ";
  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("Location: ../page/admin.php");
  } else {
    echo "Error updating record: " . $conn->error;
  }   
?>