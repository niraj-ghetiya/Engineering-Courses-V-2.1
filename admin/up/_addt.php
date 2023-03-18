




 <?php
 include('../config.php');

 if($_SERVER["REQUEST_METHOD"] == "POST"){
 $name= $_POST['name'];
 $work= $_POST['work'];
 $git= $_POST['git'];
 $insta = $_POST['insta'];
//  =======
 $targetDir = "../../img/timg/";
 $img =  basename($_FILES["img"]["name"]);
 $targetFilePath = $targetDir . $img;
 $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
 if(move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath)){
    // Insert image file name into database

 $sql = "INSERT INTO `team`(`name`, `img`, `work`, `git`, `insta`) VALUES ('$name','$img','$work','$git','$insta')
";
 
 if ($conn->query($sql) === TRUE) {
//    echo "Record updated successfully";
   header("Location: ../page/tdb.php");
 } else {
   echo "Error updating record: " . $conn->error;
 } }  
}?>