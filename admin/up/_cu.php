<?php
include('../config.php');



$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name= $_POST['name'];
    $titel= $_POST['titel'];
    $other= $_POST['other'];
    $pid = $_POST['pid'];
    $cid = $_POST['cid'];

    // echo $name , $pass ,$id ,$user_email;
    // Check whether this email exists
    $sql = "UPDATE `courses` SET `cid` = '$cid', `name` = '$name' ,`titel` = '$titel', `other` = '$other' , `pid`= '$pid' WHERE `courses`.`cid` = $cid";
    $result = mysqli_query($conn , $sql);
    
        // echo "Record updated successfully";
        header("Location: ../page/cdb.php");
     
     
}
   
?>