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
                            <h2 class="pageheader-title">Report On Member</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                          
                            <!-- <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                                    </ol>
                                </nav>
                            </div> -->

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
                                          $detailswithphoto =  $accountant -> get_member_detail_by_id();
                                        $img =  $detailswithphoto['picture_url'];
                                        $root_url = $accountant->get_root_url();
                                        if($img){
                                            echo $root_url.$img;
                                        }else{
                                            echo "assets/images/avatar-1.jpg";
                                        }
                                          

                                           ?>" 
                                              alt="User Avatar" class="rounded-circle user-avatar-xxl">

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
                                             echo $house_number['street_name_house_address'];
                                       
                                           
                                           ?>"
                                           placeholder="House Address" class="form-control">
                                       </div>

                                       
                                   </form>
                               </div>
                           </div>
                       </div>
                      
                       <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                           <div class="card">
                               <h5 class="card-header">Report Form</h5>
                               <div class="card-body">

                                

                                   <form method="post" action="pages/appraisal_add_action" class='form-horizontal' role='form'>
                                   <?php 
                                     
                                    //  if(isset($_POST['submitt'])){
                                    //     $accountant ->make_payments();
                                    // }
                                     ?>

                                       <div class="form-group row">
                                           <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Report</label>
                                           <div class="col-9 col-lg-10">
                                               <textarea name="appraisal" id="inputEmail2" type="decimal" required  placeholder="Appraisal" class="form-control">
                                    </textarea>
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
                                                   <button name="submitt" class="btn btn-space btn-primary">Submit</button>
                                                   <button type="" class="btn btn-space btn-secondary">Cancel</button>
                                               </p>
                                           </div>

                                       </div>

                                       
                                   </form>
                               </div>
                           </div>
                       </div>
                      
                   </div>
               
                                           
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">

                            <!-- <a style="float :right; margin-left:15px;" target="_blank" href="pages/pr_mem" class="btn btn-primary">
                                            Print members list
                                        </a> -->
                                    
                                    <!-- <a style="float :right;" href="pages/members_ind_payment_print" target="_blank" class="btn btn-primary" >
                                           Print Member Payments
                                        </a> -->
                                <h5 class="mb-0">List Of Member Appraisals</h5>
                           
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Member's Name</th>
                                                <th>Appraisal</th>
                                                
                                                <th>Date</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php  
                                    
                                        
                                      $secretary->members_appraisals(); 
                                        
                                        
                                        ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Member's Name</th>
                                                <th>Appraisal</th>
                                                
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <!-- ============================================================== -->
                </div>

              
            </div>            
                                    
                                   
 
            <div class="footer"> 
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        Copyright © 2019 Linutek. All rights reserved. Dashboard by <a href="#">Linutek</a>.
                        </div>

                        <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
            
        </div>


    