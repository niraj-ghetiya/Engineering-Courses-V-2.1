<?php
include('../config.php');

$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name= $_POST['name'];
    $user_email = $_POST['email'];
    $pass = $_POST['pass'];
    $id = $_POST['uid'];

    // echo $name , $pass ,$id ,$user_email;
    // Check whether this email exists
    $sql = "UPDATE `uesr` SET `name` = '$name', `passwords` = '$pass', `email` = '$user_email' WHERE `uesr`.`uid` =  $id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: ../page/admin.php");
      } else {
        echo "Error updating record: " . $conn->error;
      }

    
     
               
            

      
      
      
      
      
}
   


?>