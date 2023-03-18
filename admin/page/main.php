<?php include('../hader.php'); ?>
<?php include('../navbar.php'); ?>
<?php include('../config.php'); ?>







<br>
<div class="flex justify-center">
    <form action="../up/_main.php" method="post">
<textarea rows="20" cols="80" name="sql" id="sql">SELECT * FROM `table` WHERE </textarea>
<div>
    <?php
      $sql="show tables";
      $result = mysqli_query($conn, $sql);

      while($row = mysqli_fetch_assoc($result)){
     print_r($row);
     echo'<br><hr class="bg-black">';}
     ?>
</div>
<button type="submit"
 
 class="
   w-11
   px-6
   py-2.5
   bg-blue-600
   text-white
   font-medium
   text-xs
   leading-tight
   uppercase
   rounded
   shadow-md
   hover:bg-blue-700 hover:shadow-lg
   focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
   active:bg-blue-800 active:shadow-lg
   transition
   duration-150
   ease-in-out">Go</button>
</form>
</div>


