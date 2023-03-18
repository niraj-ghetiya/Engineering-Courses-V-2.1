
 <?php include('tools/hader.php'); ?>

<?php include('tools/config.php'); ?>
<?php include('tools/navbar.php'); ?>
<!--  -->
<?php
$id = $_GET['vid'];
$sql = "SELECT * FROM `videos` WHERE vid=$id"; 
$result = mysqli_query($conn, $sql);
$noResult = true;
while($row = mysqli_fetch_assoc($result)){
    $noResult = false;
    $title = $row['tital'];
    $desc = $row['ds']; 
    $src = $row ['src'];
    $date = $row ['date'];
 




 echo' <section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
    
    <iframe  width="560" height="315" class=" h-56 w-96  mb-10 object-cover object-center rounded"
      src="https://www.youtube.com/embed/'.$src.'" title="YouTube video player" frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen></iframe></a>
    <div class="text-center lg:w-2/3 w-full">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium dark:text-white text-gray-900">'.$title.'</h1>
      <p class="mb-8 leading-relaxed dark:text-slate-100">'.$desc.'</p>
      <div class="flex justify-center">
        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">baka</button>
         <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Next</button>
      </div>
    </div>
  </div>
 </section>';
}?>
<!--  --><h1 class="dark:text-white"></h1>
<!-- footer -->
<br>
<?php include('tools/footer.php'); ?> 