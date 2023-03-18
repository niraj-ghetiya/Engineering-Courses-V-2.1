
<nav class="bg-cyan-50 dark:bg-gray-800 border-gray-200 px-2 sm:px-4 py-2.5 rounded">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
  <a href="index.php" class="flex items-center">
      <img src="img/main.svg" class="mr-3 h-6 sm:h-9" alt="Logo">
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">EC</span>
  </a>
  <!-- user -->
  
  
  <div class="flex items-center mx-4 md:order-2">
  <?php
  session_start();
  if(isset($_SESSION['log']) && $_SESSION['log']==true){
  
 
    echo'
  <div class="flex">
  <button type="button" class="py-1.5 flex px-2.5 mt-1 mr-1 mb-0.5 text-sm font-medium text-gray-900 
focus:outline-none 
  bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 
 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 
 dark:hover:text-white dark:hover:bg-gray-700"> <div class="mt-1">'.$_SESSION['name'] .'</div>';
 if($_SESSION['name'] = 'niraj'){
  echo'
  <img class="w-7 h-7 ml-1 rounded-full" src="img/timg/niraj2.png" alt=""> </button></a>';

 }else{
  echo'
  <img class="w-8 h-8 ml-1 rounded-full" src="img/user.svg" alt=""> </button></a>';

 }

 
 echo'<a href="tools/_Hlogout.php">
<button type="button" class="mt-1.5 mr-1 mb-0.5 text-sm font-medium text-gray-900 focus:outline-none 
bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 
focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 
dark:hover:text-white dark:hover:bg-gray-700">
<img class="w-9 h-9 rounded-full" src="img/logout.svg" alt=""></button></a>
 
 
    
    
   </div>'; }
   else{
  
  
  
  
  
    echo'
    <div>
    <a href="login.php">
  <button type="button" class="py-1.5 px-2.5 mt-1 mr-1 mb-0.5 text-sm font-medium text-gray-900 focus:outline-none 
  bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 
  focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 
  dark:hover:text-white dark:hover:bg-gray-700">Login</button></a>
    <a href="signup.php">
    <button type="button" class="py-1.5 px-2.5 mt-1 mr-1 mb-0.5 text-sm font-medium text-gray-900 focus:outline-none 
  bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 
  focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 
  dark:hover:text-white dark:hover:bg-gray-700">Sign Up</button></a>
   </div>';
   }
   ?>
   
   

   
    
  
      <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      <svg class="hidden w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
    <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
      <li>
        <a href="index.php" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
      </li>
      <li>
        <a href="Chennel.php" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Channel</a>
      </li>
      <li>
        <a href="Compiler.php" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Compiler</a>
      </li>
    
    
    
      <li>
        <a href="contact.php" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
<hr class="h-1 bg-black dark:bg-white">


  


