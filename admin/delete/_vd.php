
<?php
include('../config.php');


 
  $id = $_GET['vid'];
  $sql = "DELETE FROM `videos` WHERE `videos`.`vid` = $id ";
  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("Location: ../page/video.php");
  } else {
    echo "Error updating record: " . $conn->error;
  }   
?>