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
                            <h2 class="pageheader-title">Edit Payments</h2>
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
          <strong><i class="icon-user icon-large"></i>&nbsp;Action Completed Sucessfully;    <a style = "color :green;" class="nav-link" href="./pages/r?inv17ml44=members_payment_list">Click To Member List</a></strong>  <br/>

       

      </div>
       </div>
         
                <?php } ?>

             
          
                <div class="row">
                       
                       <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                           <div class="card">
                               <h5 class="card-header">Member Information</h5>
                               <br/>
                               <div class="text-center">
	                                            <img src="assets/images/avatar-1.jpg" alt="User Avatar" class="rounded-circle user-avatar-xxl">
	                                            </div>
                               <div class="card-body">
                                   <form action="#" id="basicform" data-parsley-validate="">
                                       <div class="form-group">
                                           <label for="inputUserName">First name</label>
                                           <input readonly id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter first name" autocomplete="off" 
                                           value="<?php 
                                          $firstname =  $accountant -> get_member_detail_by_id_();
                                          echo $firstname['first_name'];
                                           ?>"
                                           class="form-control">
                                       </div>
                                       <div class="form-group">
                                           <label for="inputEmail">Last name</label>
                                           <input readonly id="inputEmail" type="email"    value="<?php
                                             $last_name =  $accountant -> get_member_detail_by_id_();
                                             echo $last_name['last_name'];
                                       
                                           
                                           ?>" name="email" data-parsley-trigger="change" required="" placeholder="Enter last name" autocomplete="off" class="form-control">
                                       </div>
                                       <div class="form-group">
                                           <label for="inputPassword">Phone number</label>
                                           <input readonly id="inputPassword" type="text" placeholder="Password" required=""
                                           
                                           value="<?php
                                             $telephone_1 =  $accountant -> get_member_detail_by_id_();
                                             echo $telephone_1['phone_number'];
                                       
                                           
                                           ?>"
                                           class="form-control">
                                       </div>
                                       <div class="form-group">
                                           <label for="inputRepeatPassword">House Address</label>
                                           <input readonly id="inputRepeatPassword" data-parsley-equalto="#inputPassword" type="text" required=""
                                           
                                             
                                           value="<?php
                                             $house_number =  $accountant -> get_member_detail_by_id_();
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
                               <h5 class="card-header">Payment Form</h5>
                               <div class="card-body">

                                

                                   <form method="post" action="pages/payments_ledger_edit_action" class='form-horizontal' role='form'>
                                   <?php 
                                     
                                    //  if(isset($_POST['submitt'])){
                                    //     $accountant ->make_payments();
                                    // }
                                     ?>

<div class="form-group row">
                                           <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">ID</label>
                                           <div class="col-9 col-lg-10">
                                               <input readonly name="id" id="inputEmail2" type="decimal"
                                               
                                               value="<?php 
                                             $id  =   $accountant -> get_details_of_payment_id();
                                               echo $id ['id'];
                                               ?>"
                                               
                                                required  placeholder="AMOUNT" class="form-control">
                                           </div>
                                       </div>

                                       <div class="form-group row">
                                           <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">AMOUNT</label>
                                           <div class="col-9 col-lg-10">
                                               <input name="amountpadi" id="inputEmail2" type="decimal"
                                               
                                               value="<?php 
                                             $amount  =   $accountant -> get_details_of_payment_id();
                                               echo $amount ['amount'];
                                               ?>"
                                               
                                                required  placeholder="AMOUNT" class="form-control">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">MODE</label>
                                           <div class="col-9 col-lg-10">
                                              <select class="form-control" name="mop">
                                                  <option>
                                                  <?php 
                                             $mop  =   $accountant -> get_details_of_payment_id();
                                               echo $mop ['mode_of_payment'];
                                               ?>
                                                  
                                                  </option>
                                                  <option>CASH</option>
                                                  <option>CHEQUE</option>
                                              </select>
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">CHEQ. NO</label>
                                           <div class="col-9 col-lg-10">
                                               <input name="chequenumber"
                                               
                                               value="   <?php 
                                             $mode_of_payment  =   $accountant -> get_details_of_payment_id();
                                               echo $mode_of_payment ['mode_of_payment_number'];
                                               ?>"
                                               
                                               
                                                id="inputWebSite" type="text"  placeholder="ENTER CHEQUE NO." class="form-control">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">PAID BY</label>
                                           <div class="col-9 col-lg-10">
                                               <input name="paid_by" id="inputWebSite"
                                               
                                               value="   <?php 
                                             $paid_by  =   $accountant -> get_details_of_payment_id();
                                               echo $paid_by ['paid_by'];
                                               ?>"
                                                type="text" required placeholder="PAID BY" class="form-control">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">BAL</label>
                                           <div class="col-9 col-lg-10">
                                               <input id="inputWebSite"
                                               
                                               

                                               value="<?php
                                             echo $accountant -> member_balance();
                                         
                                       
                                           
                                           ?>"
                                               
                                               
                                               readonly type="text" required=""  placeholder="BAL" class="form-control">
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
                                               <button type="submit" onclick="return(confirm('Are you sure you want to edit? Click OK to finish action or Cancel'))" class="btn btn-space btn-primary">EDIT</button>
                                             
                                             <a href="./pages/r?inv17ml44=members_payment_list" class="btn btn-space btn-secondary">Cancel</a>
                                               </p>
                                           </div>
                                       </div>
                                   </form>
                               </div>
                           </div>
                       </div>
                      
                   </div>
               
<!--                                            
                <div class="row">
                   
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">

                           
                                <h5 class="mb-0">List Of Member Payments</h5>
                           
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Amount</th>
                                                
                                                <th>Date</th>
                                                <th>Action</th>                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php  
                                    
                                        
                                      $accountant->all_payments_of_member_list(); 
                                        
                                        
                                        ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Name</th>
                                                <th>Amount</th>
                                                
                                                <th>Date</th>
                                                <th>Action</th>
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


    