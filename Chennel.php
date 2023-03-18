<?php include('tools/hader.php'); ?>

<?php include('tools/config.php'); ?> 
<?php include('tools/navbar.php');?>
<section class="bg-white dark:bg-gray-900">
    
    <div class="container px-6 py-8 mx-auto">
        <h2 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-white">Chanael</h2>
</div>
    <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
<?php
 $sql ="SELECT * FROM `channel`";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    $Channel_ID = $row['Channel_name'];



$max = 3;
// $apikey = 'AIzaSyA6FbUbDqT2wjaluio3CvRhvWSywYJEcPg'; 
$url = 'https://youtube.googleapis.com/youtube/v3/channels?part=snippet%2CcontentDetails%20%2C%20statistics&id='.  $Channel_ID.'&key='.$apikey.'';
$channel = json_decode(file_get_contents($url),true);
// echo '<pre>';
// print_r($channel);
$title = $channel['items'][0]['snippet']['title'];
$img = $channel['items'][0]['snippet']['thumbnails']['medium']['url'];
$sub= $channel['items'][0]['statistics']['subscriberCount'];

echo '
 <div class="overflow-hidden transition-shadow duration-300 dark:bg-black dark:text-white bg-cyan-50 rounded shadow-sm">
 <div class="flex mt-3 justify-center">
 <a href="chennel23.php?cid=' . $Channel_ID . '">
 <img src="'.$img.'" class="object-cover w-24 rounded-full h-24" alt="" /></a></div>
 <div class="p-5 border border-t-0 flex-col justify-center">
   <p class="mb-3 text-xs font-semibold tracking-wide uppercase">
   <div class="flex mt-3 justify-center"> <a href="/" class="transition-colors duration-200 text-blue-gray-900 hover:text-deep-purple-accent-700" aria-label="Category" 
title="traveling">'. $sub.' </a>
    </div>
   </p>
   <div class="flex mt-3 justify-center">
   <a href="chennel23.php?cid=' . $Channel_ID . '" aria-label="Category" title="Visit the East" class="inline-block mb-3 text-2xl dark:text-blue-500 
font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700">'.$title.'</a>
   </div>
   
   


 </div>
</div>';
//  



        
           



}?>
</div>
</div>
</section>
<?php include('tools/footer.php'); ?> 
<!-- https://youtube.googleapis.com/youtube/v3/channels?part=snippet%2CcontentDetails%20%2C%20statistics&id='$Channel_ID'&key=AIzaSyA6FbUbDqT2wjaluio3CvRhvWSywYJEcPg -->

<!-- https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$Channel_ID.'&maxResults='.$Max_Results.'&key='.$API_Key.'; -->