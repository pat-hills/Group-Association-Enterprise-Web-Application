<?php
require_once './../class/accountant.php';

require_once './../pdoconn/accountantconfig.php';
require_once './../class/secretary.php';

require_once './../pdoconn/secretaryconfig.php';

  $a = 0;
  if(isset($_GET['m'])){
      $a = $_GET['m'];
  }

?>

<div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Change Password</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <!-- <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li> -->
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                
                <?php if ($a == 5) { ?>
                <div>
        <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><i class="icon-user icon-large"></i>&nbsp;Action Completed Sucessfully;    <a style = "color :green;" class="nav-link" href="./pages/r?inv17ml44=members_payment_list">Click To Member List</a></strong>  <br/>

       

      </div>
       </div>
         
                <?php } ?>


                <?php if ($a == 6) { ?>
                <div>
        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><i class="icon-user icon-large"></i>&nbsp;Password Change Successfully

       

      </div>
       </div>
         
                <?php } ?>




                <?php if ($a == 1) { ?>
                <div>
        <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><i class="icon-user icon-large"></i>&nbsp;Password Doesnot Match! 

       

      </div>
       </div>
         
                <?php } ?>
             
          
                <div class="row">
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                           <div class="card">
                               <h5 class="card-header"> Password Form</h5>
                               <div class="card-body">

                                

                                   <form method="post" action="pages/change_password_ko_action" class='form-horizontal' role='form'>
                                   <div class="form-group row">
                                           <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-left">New Password</label>
                                           <div class="col-9 col-lg-10">
                                               <input autocomplete="off" name="newpassword" id="inputWebSite" type="password"  required placeholder="New Password" class="form-control">
                                           </div>
                                       </div>

                                       <div class="form-group row">
                                           <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-left">Confirm Password</label>
                                           <div class="col-9 col-lg-10">
                                               <input autocomplete="off" name="confirmnewpassword" id="inputWebSite" type="password" required placeholder="Confirm Password" class="form-control">
                                           </div>
                                       </div>


                                       
                                       <div class="row pt-2 pt-sm-5 mt-1">
                                           <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                               <!-- <label class="be-checkbox custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Remember me</span>
                                               </label> -->
                                           </div>
                                           <div class="col-sm-6 pl-0">
                                               <p class="text-right">
                                                   <button name="submitt" class="btn btn-space btn-primary">Change Password</button>
                                                   <!-- <button type="cancel" class="btn btn-space btn-secondary">Cancel</button> -->
                                               </p>
                                           </div>
                                       </div>
                                   </form>
                               </div>
                           </div>
                       </div>
                      
                   </div>


                 
                                    
                                   
 
            <div class="footer"> 
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2019 Association MIS. All rights reserved. System by <a href="#">Linutek</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


    