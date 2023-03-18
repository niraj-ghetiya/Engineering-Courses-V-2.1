<?php include('hader.php'); ?>
<?php include('navbar.php'); ?>
<?php include('config.php'); ?>

<div class="flex justify-center my-8">
<div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
  <?php
  $id = $_GET['cid'];
  
  $sql = "SELECT * FROM `courses` WHERE cid=$id"; 
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $cid = $row['cid'];
  $name = $row['name'];
  $img = $row['img'];
  $other = $row['other'];
  $titel = $row['titel'];
  $pid = $row['pid'];
 

    echo'<form action=" up/_cu.php" method="post">
   <div class="form-group mb-6">
    <input type="text"  class="form-control block
    w-full
    px-3
    py-1.5
    text-base
    font-normal
    text-gray-700
    bg-white bg-clip-padding
    border border-solid border-gray-300
    rounded
    transition
    ease-in-out
    m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput90"
    value="'.$cid.'"
    name="cid"
    id="cid"
    placeholder="cid">
   </div>
    <div class="form-group mb-6">
      <input type="text"  class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput90"
        value="'.$name.'"
        name="name"
        id="name"
        placeholder="Name">
    </div>
    <div class="form-group mb-6">
    <input type="text" class="form-control block
      w-full
      px-3
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput91"
      value="'. $titel.'"
      name="titel"
      id="titel"
      placeholder="titel">
      </div>
    <div class="form-group mb-6">
    <input type="text" class="form-control block
      w-full
      px-3
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput91"
      value="'. $other.'"
      name="other"
      id="other"
      placeholder="other">
      </div>
      <div class="form-group mb-6">
      <input type="text"  class="form-control block
      w-full
      px-3
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput90"
      value="'.$pid.'"
      name="pid"
      id="pid"
      placeholder="pid">
     </div>

    <div class="form-group form-check text-center mb-6">
      <input type="checkbox"
        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
        id="exampleCheck96" checked>
      <label class="form-check-label inline-block text-gray-800" for="exampleCheck96">I have read and agree to the terms</label>
    </div>
    <button type="submit"
    
    class="
      w-full
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
      ease-in-out">Submit</button>
  </form>';
  ?>
</div>
</div>