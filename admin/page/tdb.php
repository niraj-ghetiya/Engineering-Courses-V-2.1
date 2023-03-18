<?php include('../hader.php'); ?>
<?php include('../navbar.php'); ?>
<?php include('../config.php'); ?>

<div class="flex  justify-center">
  <h1 class="text-sky-900">1. Team Data</h1>
</div>
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full">
          <thead class="bg-white border-b">
            <tr>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left"> tid </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left"> name </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">img</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">work</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">git</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">insta</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left"> Update</th>
            </tr>
          </thead>
          </thead>
          <tbody>
          <?php $sql ="SELECT * FROM `team`";
          
           $result = mysqli_query($conn, $sql);
           while($row = mysqli_fetch_assoc($result)){
            
            $name = $row['name'];
            $img = $row['img'];
            $work = $row['work'];
            $git = $row['git'];
            $insta = $row['insta'];
            $tid = $row['tid'];

            echo'<tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">'.$tid.'</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">'.$name.'</td>
              <td class="text-sm text-gray-900 font-light 
              px-6 py-4 whitespace-nowrap"><img class="flex-shrink-0 object-cover w-24 h-24 rounded-full sm:mx-4 ring-4 
            ring-gray-300" src="../../img/timg/'.$img.'" 
              alt=""></td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">'.$work.'</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">'.$git.'...</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">'.$insta.'</td>
            
            
            
            
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><a class="text-red-700 mx-1" href="../delete/_td.php?tid='.$tid.'">delete</a></td>
            </tr>';}?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div><br>
<div class="flex justify-center">
<a href="../add/addt.php"><button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm 
   font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 
  group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 
   focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
  <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md 
    group-hover:bg-opacity-0">
      add new team data
  </span>
</button><a>
<!--  -->
<button onclick="window.print()" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm 
   font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 
  group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 
   focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
  <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md 
    group-hover:bg-opacity-0">
    Print this data
  </span>
</button>
</div>
<br>
