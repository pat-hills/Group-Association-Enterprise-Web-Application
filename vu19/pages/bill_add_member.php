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
                            <h2 class="pageheader-title">Add Bill To Member </h2>
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
                               <h5 class="card-header">Individual Billing Form</h5>
                               <div class="card-body">

                                

                                   <form method="post" class='form-horizontal' role='form'>
 <?php 

if (!isset($entries)) {
    $entries = "";
}

if (isset($_POST["submit_entries"])) {
    
    $entries = trim($_POST["entries"]);
    $_SESSION["entries"] = $entries;

  
}

if(isset($_POST['submitt'])){
    $accountant->in_srt_led_individual();
}                                   
                                     
                                     ?>

                                      <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Enter # Of Bill Items</label>
                                            <div class="col-12 col-sm-9 col-lg-6">
                                                <table>
                                                    <tr>
                                                        <td><input required style="width:150px;" autocomplete="off" type="text" name="entries"  placeholder="No. Of Bill Items" class="form-control"></td>
                                                        <td>    <button name="submit_entries" class="btn btn-space btn-primary">Generate List</button></td>
                                                        <td>
                                                        
                                                        </td>
                                                   
                                                    </tr>
                                                </table> 
                                            </div> 
                                            </form>



                                                <form method="post" class='form-horizontal' role='form'>  
                                            <div class="form-group row">
                                            <!-- <label class="col-12 col-sm-3 col-form-label text-sm-right">House Address</label> -->
                                            <div class="col-12 col-sm-12 col-lg-6">
                                            <?php
                                    $i = 1;

                                    for ($j = 1; $j <= $entries; $j++) {
                                        ?>
                                                <table>
                                                    <!-- <tr>
                                                      <td><label class="col-12 col-sm-3 col-form-label text-sm-right">Fullname</label></td>
                                                      <td><label class="col-12 col-sm-3 col-form-label text-sm-right">Sex</label></td>
                                                    </tr> -->
                                                    <tr>
                                                    <td><label class="col-12 col-sm-3 col-form-label text-sm-right">Bill Item</label></td>
                                                        <td><input required style="width:150px;" type="text" name="bill_item[]"  placeholder="Enter Bill Item" class="form-control"></td>
                                                        <td><label class="col-12 col-sm-3 col-form-label text-sm-right">Amount</label></td>  
                                                         <td><input required style="width:150px;" type="text" name="amount[]"  placeholder="Enter Amount" class="form-control"></td>
                                                       
                                                        <!-- <td>
                                                        <select required style="width:150px;"  name="sex[]" class="form-control">
                                                         <option></option>
                                                         <option>Male</option>
                                                         <option>Female</option>
                                                        </select>
                                                        
                                                        </td> -->
                                                        
                                                    </tr>
                                                </table> 


                                                

                                                <?php
                                    }


                                    
                                    ?>

                                    
                                    
                                            </div> 
                                              
                                        </div>


                                              
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Select Account Type</label>
                                            <div class="col-12 col-sm-9 col-lg-6">
                                                <table>
                                                    <tr>
                                                        <td>
                                                      
                                                        <select required style="width:150px;"  name="accc" class="form-control">
                                                         <option></option>
                                                         <option value="Debit">Debit</option>
                                                         <option value="Credit">Credit</option>
                                                        </select>  
                                                         </td>
                                                      
                                                       
                                                   
                                                    </tr>
                                                </table> 
                                            </div> 

                                        <?php
                                  ///  $i = 1;

                                    if(isset($_POST["submit_entries"])) {
                                        ?>
                                                
                                                <div class="row pt-2 pt-sm-5 mt-1">
                                           <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                               <!-- <label class="be-checkbox custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Remember me</span>
                                               </label> -->
                                           </div>
                                           <div style="margin-right:-75px;"  class="col-sm-6 pl-0">
                                              
                                                   <button name="submitt" class="btn btn-space btn-success">Add Record</button>
                                                  
                                              
                                           </div>

                                       </div>
                                                

                                                <?php
                                    } ?>
                                      


                                 
                               </div>
                           </div>
                       </div>
                      
                   </div>
               
                   </form>
<!--                                            
                <div class="row">
                   
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">

                           
                                <h5 class="mb-0">List Of Member Appraisals</h5>
                           
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Member's Name</th>
                                                <th>Name Of Child</th>
                                                
                                                <th>Gender</th>
                                             
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php  
                                    
                                        
                                    //  $secretary->members_children(); 
                                        
                                        
                                        ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Member's Name</th>
                                                <th>Name Of Child</th>
                                                
                                                <th>Gender</th>
                                             
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>

              
            </div>            
                                    
                                    -->
 
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


    