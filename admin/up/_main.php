<?php include('../hader.php'); ?>
<?php include('../navbar.php'); ?>
<?php include('../config.php'); 
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $main=$_POST['sql'];
    $sql="$main";
    $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_assoc($result);
    while($row = mysqli_fetch_assoc($result)){
    print_r($row);
    // echo'<br><hr class="bg-black">';
}
    if($result){
        echo 'ok';
    }
}?>