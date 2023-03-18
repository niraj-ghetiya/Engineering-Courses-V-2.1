<?php
include('../config.php');



$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id= $_POST['vid'];
    $tital= $_POST['tital'];
    $ds= $_POST['ds'];
    $cid = $_POST['cid'];
    $src = $_POST['src'];

    // echo $name , $pass ,$id ,$user_email;
    // Check whether this email exists
    $sql = "INSERT INTO `videos`(`vid`, `tital`, `ds`, `cid`, `src`) VALUES ('$id','$tital','$ds','$cid','$src')";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: ../page/video.php");
      } else {
        echo "Error updating record: " . $conn->error;
      }   
   }
?>