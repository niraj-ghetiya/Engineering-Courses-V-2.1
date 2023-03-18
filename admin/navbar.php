
<nav class="bg-cyan-50 dark:bg-gray-800 border-gray-200 px-2 sm:px-4 py-2.5 rounded">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
  <a href="../../index.php" class="flex items-center">
      <img src="../../img/main.svg" class="mr-3 h-6 sm:h-9" alt="Logo">
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">EC</span>
  </a>
  <!-- user -->
  
  
  <div class="flex items-center mx-4 md:order-2">
      <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown" data-dropdown-placement="bottom">
        
        <img class="w-8 h-8  rounded-full" src="../../img/user.svg" alt="user photo">
      </button>
      <!-- Dropdown menu -->
    <?php
      
      session_start();

      if(isset($_SESSION['log']) && $_SESSION['log']==true){
        
     echo' <div class="z-50 my-4 text-base list-none bg-white dark:bg-gray-800 dark:text-cyan-300 rounded divide-y divide-gray-100 shadow  dark:divide-gray-600 block" id="dropdown" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(602px, 74px);">
        <div class="py-3 px-4">
          <span class="block text-sm text-gray-900 dark:text-cyan-300">'.$_SESSION['name'] .'</span>
          <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">'.$_SESSION['useremail'].' </span>
        </div>
        <ul class="py-1" aria-labelledby="dropdown">
          <li>
            <a href="../../tools/_Hlogout.php" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-cyan-300 dark:hover:text-white">Sign out</a>
          </li>
        </ul>
      </div>';}
      else{
        echo' <div class="z-50 my-4 text-base list-none bg-white dark:bg-gray-800 rounded 
        divide-y divide-gray-100 shadow dark:text-cyan-300 dark:divide-gray-600 block" id="dropdown" data-popper-placement="bottom" 
        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(602px, 74px);">
        <ul class="py-1" aria-labelledby="dropdown">
        <li>
          <a href="login.php" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 
     dark:text-gray-200 dark:hover:text-white">login</a>
        </li>
        <li>
        <a href="signup.php" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 
           rk:text-gray-200 dark:hover:text-white">sign up</a>
      </li>
      </ul></div>' ;}?>
      <!-- -(*=*)- -->
  
      <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      <svg class="hidden w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
    <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
      <li>
        <a href="../../admin/page/admin.php" class="block py-2 pr-4 pl-3 text-gray-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">uesr</a>
      </li>
      <li>
        <a href="../../admin/page/cdb.php" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">courses</a>
      </li>
      <li>
        <a href="../../admin/page/video.php" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Video</a>
      </li>
      <li>
        <a href="../../admin/page/tdb.php" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Team</a>
      </li>
      <li>
        <a href="../../admin/page/main.php" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">comments</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
<hr class="h-1 bg-black dark:bg-white">


  


