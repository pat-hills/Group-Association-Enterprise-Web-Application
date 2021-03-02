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
                            <h2 class="pageheader-title">Editing Information</h2>
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
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Records Form</h5>
                                <div class="card-body">

                                    <form method="post" action="pages/bank_deposit_edit_action" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">ID</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" readonly name="id" required placeholder="Last Name" 
                                                
                                                value="<?php
                                             $last_ =  $accountant -> get_details_of_bank_deposits_id();
                                             echo $last_['id'];
                                       
                                           
                                           ?>"
                                                 class="form-control">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Bank Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select class="form-control"  required name="bank_name">
                                                <option>
                                                <?php
                                             $bank_name =  $accountant -> get_details_of_bank_deposits_id();
                                             echo $bank_name['bank_name']; ?>
                                                </option>
                                               <?php   $accountant -> bankdropdown();  ?>
                                              
                                               </select>  
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Amount</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required name="acc_amt"  placeholder="First Name"
                                                
                                                value="<?php
                                             $amount_deposited =  $accountant -> get_details_of_bank_deposits_id();
                                             echo $amount_deposited['amount_deposited'];
                                       
                                           
                                           ?>"
                                                
                                                 class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Depositor</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required name="depositor"  placeholder="First Name"
                                                
                                                value="<?php
                                             $depositor =  $accountant -> get_details_of_bank_deposits_id();
                                             echo $depositor['depositor'];
                                       
                                           
                                           ?>"
                                                
                                                 class="form-control">
                                            </div>
                                        </div>

                                 


                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" onclick="return(confirm('Are you sure you want to edit? Click OK to finish action or Cancel'))" class="btn btn-space btn-primary">EDIT</button>
                                                <a href="./pages/r?inv17ml44=bank_deposits" class="btn btn-space btn-secondary">Cancel</a>
                                            </div>
                                        </div>
                                    </form>


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


    