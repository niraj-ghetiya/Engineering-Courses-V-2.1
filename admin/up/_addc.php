


 <?php
 include('D:\myphp\t1\tools\config.php');

 if($_SERVER["REQUEST_METHOD"] == "POST"){
 $name= $_POST['name'];
 $titel= $_POST['titel'];
 $other= $_POST['other'];
 $pid = $_POST['pid'];
//  =======
 $targetDir = "../../img/cimg/";
 $img =  basename($_FILES["img"]["name"]);
 $targetFilePath = $targetDir . $img;
 $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
 if(move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath)){
    // Insert image file name into database

 $sql = "INSERT INTO `courses` ( `name`, `titel`, `img`, `other`, `img_name`,`pid`) VALUES ( '$name', '$titel',Now(),'$other', '$img', '$pid')
";
// $result = mysqli_query($conn , $sql);
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header("Location: ../page/video.php");
} else {
  echo "Error updating record: " . $conn->error;
}   
 }
}?>