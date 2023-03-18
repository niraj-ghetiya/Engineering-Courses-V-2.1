<?php include('tools/hader.php'); ?>

<?php include('tools/config.php'); ?>
<?php include('tools/navbar.php');?>
<?php
//  error_reporting(0);
// $apikey='AIzaSyA6FbUbDqT2wjaluio3CvRhvWSywYJEcPg';
// $chennel_id = $_GET['cid'];
// $url = 'https://youtube.googleapis.com/youtube/v3/search?part=snippet%2CcontentDetails%20%2C%20statistics&id='.  
// $chennel_id.'&key=AIzaSyA6FbUbDqT2wjaluio3CvRhvWSywYJEcPg';

// $apiKey = 'AIzaSyA6FbUbDqT2wjaluio3CvRhvWSywYJEcPg';
$channelId =  $_GET['cid'];
$resultsNumber = 17;
 
$Url = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyCjyMmaKmgdfgEOliPiP575ETY1aqATiUY&channelId=' . $channelId . '&part=snippet,id&maxResults=' . $resultsNumber .'&order=date';

$video = json_decode(file_get_contents($Url),true);
// echo '<pre>';
// print_r($video);?>
<div class="flex flex-wrap mt-4 justify-center">
    <?php

if (isset($_GET['cid']) )
{

  for ($i = 1; $i <17; $i++) {
      
      $videoId = $video['items'][$i]['id']['videoId'];
      $title = $video['items'][$i]['snippet']['title'];
      $description = $video['items'][$i]['snippet']['description'];
      $img = $video['items'][$i]['snippet']['thumbnails']['medium']['url'];
    //   $cid= $video['items'][$i]['snippet']['channelId'];
     

      echo'
      <a href="video24.php?vid=' . $videoId . '&cid='.$channelId.'"><section class="flex">
   
  <div  class="mx-2 my-2 flex w-80 flex-col justify-center bg-white dark:bg-black dark:text-white rounded-2xl 
shadow-xl shadow-gray-400/20">
<img src="'.$img.'" class="aspect-video w-80 rounded-t-2xl object-cover object-center"  alt="">


   <div class="p-6">
   <h1>'.$videoId.'</h1>
   <h1 class="text-2xl font-medium dark:text-slate-200 text-gray-700 pb-2">'.
$title.'</h1>
     <p class="text text-gray-500 leading-6">'. substr($description, 0, 90).'...</p>
     
   </div>
 </div>

  </section></a>';
  }}
?>
<?php include('tools/footer.php'); ?> 