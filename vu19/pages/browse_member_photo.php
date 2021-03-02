<?php
require_once './../class/accountant.php';

require_once './../pdoconn/accountantconfig.php';
require_once './../class/secretary.php';
require_once './../class/constants.php';

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
                            <h2 class="pageheader-title">Update Member Photo</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
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
          <strong><i class="icon-user icon-large"></i>&nbsp;Action Completed Sucessfully;    <a style = "color :green;" class="nav-link" href="./pages/r?inv17ml44=appraisal_list">Click To Member List</a></strong>  <br/>

       

      </div>
       </div>
         
                <?php } ?>

             
          
                <div class="row">
                       
                       <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                           <div class="card">
                               <h5 class="card-header">Member Information</h5>
                               <br/>
                               <div class="text-center">
                              
                                                <img src="
                                                <?php 
                                                $root_url = $accountant ->get_root_url();
                                                $picture_url =  $accountant -> get_member_detail_by_id();  
                                                
                                            echo $root_url.$picture_url['picture_url'];
                                                
                                                ?>
                                                
                                                " alt="User Avatar" class="rounded-circle user-avatar-xxl">
	                                            </div>
                               <div class="card-body">
                                   <form action="#" id="basicform" data-parsley-validate="">
                                       <div class="form-group">
                                           <label for="inputUserName">First name</label>
                                           <input readonly id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter first name" autocomplete="off" 
                                           value="<?php 
                                          $firstname =  $accountant -> get_member_detail_by_id();
                                          echo $firstname['first_name'];
                                           ?>"
                                           class="form-control">
                                       </div>
                                       <div class="form-group">
                                           <label for="inputEmail">Last name</label>
                                           <input readonly id="inputEmail" type="email"    value="<?php
                                             $last_name =  $accountant -> get_member_detail_by_id();
                                             echo $last_name['last_name'];
                                       
                                           
                                           ?>" name="email" data-parsley-trigger="change" required="" placeholder="Enter last name" autocomplete="off" class="form-control">
                                       </div>
                                       <div class="form-group">
                                           <label for="inputPassword">Phone number</label>
                                           <input readonly id="inputPassword" type="text" placeholder="Password" required=""
                                           
                                           value="<?php
                                             $telephone_1 =  $accountant -> get_member_detail_by_id();
                                             echo $telephone_1['phone_number'];
                                       
                                           
                                           ?>"
                                           class="form-control">
                                       </div>
                                       <div class="form-group">
                                           <label for="inputRepeatPassword">House Address</label>
                                           <input readonly id="inputRepeatPassword" data-parsley-equalto="#inputPassword" type="text" required=""
                                           
                                             
                                           value="<?php
                                             $house_number =  $accountant -> get_member_detail_by_id();
                                             echo $house_number['house_address'];
                                       
                                           
                                           ?>"
                                           placeholder="House Address" class="form-control">
                                       </div>

                                       
                                   </form>
                               </div>
                           </div>
                       </div>
                      
                       <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                           <div class="card">
                               <h5 class="card-header">Photo Form</h5>
                               <div class="card-body">

                                

                                   <form method="post" action="pages/browse_member_photo_action"  enctype="multipart/form-data">
                                   

                                       <div class="form-group row">
                                           <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Browse Photo</label>
                                           <div class="col-9 col-lg-10">
                                           <input type="file" name="file" required class="btn btn-space btn-success">
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
                                                   <button name="submit" class="btn btn-space btn-primary">Submit</button>
                                                   <button type="" class="btn btn-space btn-secondary">Cancel</button>
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


    