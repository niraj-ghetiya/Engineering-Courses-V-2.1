<?php
include('../config.php');

 
  $id = $_GET['tid'];
  $sql = "DELETE FROM `team` WHERE `team`.`tid` = $id ";
  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("Location: ../page/cdb.php");
  } else {
    echo "Error updating record: " . $conn->error;
  }   
?>