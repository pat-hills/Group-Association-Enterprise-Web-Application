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
                            <h2 class="pageheader-title">Deleting Information</h2>
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
                                    <form method="post" action="pages/add_bill_prep_action_delete" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">ID</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" readonly name="id" required placeholder="Last Name" 
                                                
                                                value="<?php
                                             $last_ =  $accountant -> get_member_bill_detail_by_id();
                                             echo $last_['id'];
                                       
                                           
                                           ?>"
                                                 class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Bill Item</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" readonly required name="billname"  placeholder="First Name"
                                                
                                                value="<?php
                                             $bill_item =  $accountant -> get_member_bill_detail_by_id();
                                             echo $bill_item['bill_item'];
                                       
                                           
                                           ?>"
                                                
                                                 class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">House Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" readonly required name="billname"  placeholder="First Name"
                                                
                                                value="<?php
                                             $house_name =  $accountant -> get_member_bill_detail_by_id();
                                             echo $house_name['house_name'];
                                       
                                           
                                           ?>"
                                                
                                                 class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Amount On Bill Item</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" readonly required name="amountonbill"  placeholder="First Name"
                                                
                                                value="<?php
                                             $amount_involved =  $accountant -> get_member_bill_detail_by_id();
                                             echo $amount_involved['amount_involved'];
                                       
                                           
                                           ?>"
                                                
                                                 class="form-control">
                                            </div>
                                        </div>

                                 


                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                            <button type="submit" onclick="return(confirm('Are you sure you want to delete? Click OK to finish action or Cancel'))" class="btn btn-space btn-primary">DELETE</button>
                                          
                                             
                                                <a href="./pages/r?inv17ml44=add_bill_preparation" class="btn btn-space btn-secondary">Cancel</a>
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


    