<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include('config.php');
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    $sql = "Select * from `uesr` where name='$name'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        
       
        $row = mysqli_fetch_assoc($result);
        if($pass == $row['passwords']){
            session_start();
            $_SESSION['log'] = true;
            $_SESSION['uid'] = $row['uid'];
            $_SESSION['name'] = $name;
            $_SESSION['useremail'] = $row['email'];

            if ($name=='niraj' && $pass== '6624') {
                header("Location: ../admin/page/admin.php"); 
                exit; 
            }
            else{
            header("Location: ../index.php"); } 
        }
      
    }
}


?>