<?php
include('config.php');
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name= $_POST['name'];
    $user_email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    // Check whether this email exists
    $Sql = "select * from `uesr` where name= '$name'";
    $result = mysqli_query($conn , $Sql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError = "Name already in use";
    }
    else{
        if($pass == $cpass){
            // $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `uesr` ( `name`, `passwords`, `email`, `date`) VALUES ('$name', '$pass', 
'$user_email', current_timestamp());";
            $result = mysqli_query($conn, $sql);
            
            if($result){
                $showAlert = true;
                header("Location: ../index.php?signupsuccess=true");
                exit();
            }

        }
        else{
            $showError = "Passwords do not match"; 
            
        }
    }
    header("Location: ../index.php?signupsuccess=false&error=$showError");

}
?>