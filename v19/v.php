<?php

 
session_start();
if (isset($_SESSION['userid'])) {
    if (isset($_SESSION['pg'])) {
        
        
         if ($_SESSION['pg'] == 'admin_users_das') {
            require_once "./templates/header.php";
            require_once "./templates/admin_navbar.php";
            require_once "./pages/admin_users_das.php";
            require_once "./templates/footer.php";
        } 

        if ($_SESSION['pg'] == 'admin_financial_das') {
            require_once "./templates/header.php";
            require_once "./templates/admin_navbar.php";
            require_once "./pages/admin_financial_das.php";
            require_once "./templates/footer.php";
        } 
        //load_users_task

        if ($_SESSION['pg'] == 'add_u_sers') {
            require_once "./templates/header.php";
            require_once "./templates/admin_navbar.php";
            require_once "./pages/admin_add_user.php";
            require_once "./templates/footer.php";
        } 

        if ($_SESSION['pg'] == 'load_users_task') {
            require_once "./templates/header.php";
            require_once "./templates/admin_navbar.php";
            require_once "./pages/load_users_task.php";
            require_once "./templates/footer.php";
        } 
        
         


        if ($_SESSION['pg'] == 'logout') {require_once './pages/logout.php'; }
        
        
          
        
         
        
      
      
    }  else {
        
           header('Location:' . '../index');
        
    }
     
}
else {header('Location:' . '../index');}

?>