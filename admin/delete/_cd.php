<?php
include('../config.php');

 
  $cid = $_GET['cid'];
  $sql = "DELETE FROM `courses` WHERE `courses`.`cid` = $cid ";
  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("Location: ../page/cdb.php");
  } else {
    echo "Error updating record: " . $conn->error;
  }   
?>