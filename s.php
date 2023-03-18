<?php include('tools/hader.php'); ?>

<?php include('tools/config.php'); ?>
<?php include('tools/navbar.php');?>
<?php error_reporting(0); ?>
<?php
// $apikey='AIzaSyA6FbUbDqT2wjaluio3CvRhvWSywYJEcPg';
if (isset($_POST['submit']) )
{
   $keyword = $_POST['keyword'];
          
   if (empty($keyword))
   {
       $response = array(
             "type" => "error",
             "message" => "Please enter the keyword."
           );
   } 
}
if (isset($_POST['submit']) )
{
                             
  if (!empty($keyword))
  {
    $max = 9;
    // $apikey = 'AIzaSyA6FbUbDqT2wjaluio3CvRhvWSywYJEcPg'; 
    $url = 'https://www.googleapis.com/youtube/v3/search?part=snippet&q=' . $keyword .'&maxResults='. $max .'&key='.$apikey.'';
    // print_r($url);

    $video = json_decode(file_get_contents($url),true);
  }
}?>
<div class="flex flex-wrap mt-4 justify-center">
<?php
if (isset($_POST['submit']) )
{

  for ($i = 1; $i <9; $i++) {
      
      $videoId = $video['items'][$i]['id']['videoId'];
      $title = $video['items'][$i]['snippet']['title'];
      $description = $video['items'][$i]['snippet']['description'];
      $img = $video['items'][$i]['snippet']['thumbnails']['medium']['url'];
      $cid= $video['items'][$i]['snippet']['channelId'];
      if(empty($videoId)){
        $videoId = $video['items'][$i]['id']['playlistId'];
      }
      // echo '<pre>';
      // print_r($video);
      if(!empty($keyword)){
      echo'
      <section class="flex">
    
  <div  class="mx-2 my-2 flex w-80 flex-col justify-center bg-white dark:bg-black dark:text-white rounded-2xl 
shadow-xl shadow-gray-400/20">

<iframe class="aspect-video w-80 rounded-t-2xl object-cover object-center" src="https://www.youtube.com/embed/'.$videoId.'" width="560" height="250" frameborder="0" allow="autoplay; 
  fullscreen; 
    picture-in-picture" allowfullscreen></iframe>  


   <div class="p-6">
  
   <h1 class="text-2xl font-medium dark:text-slate-200 text-gray-700 pb-2">'.
$title.'</h1>
     <p class="text text-gray-500 leading-6">'. substr($description, 0, 90).'...</p>
     
   </div>
 </div>

  </section>';
  }}
}?>
<?php include('tools/footer.php'); ?> 