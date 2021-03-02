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
                            <h2 class="pageheader-title">Editing Member Appraisals</h2>
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
                       
                       
                      
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                           <div class="card">
                               <h5 class="card-header">Appraisal Form</h5>
                               <div class="card-body">

                                

                                   <form method="post" action="pages/appraisal_del_member_acttion" class='form-horizontal' role='form'>
                                   <?php 
                                     
                                    //  if(isset($_POST['submitt'])){
                                    //     $accountant ->make_payments();
                                    // }
                                     ?>

                                       <div class="form-group row">
                                           <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">ID</label>
                                           <div class="col-9 col-lg-10">
                                               <input  name="id" type="text" required 
                                               readonly value ="<?php $id = $secretary->get_appraisal_by_id();
                                                 
                                                 echo $id['id'];
                                               
                                               ?>"
                                               
                                                placeholder="Appraisal" class="form-control"/>

                                             
                                 
                                           </div>
                                       </div>

                                       <div class="form-group row">
                                           <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Appraisal</label>
                                           <div class="col-9 col-lg-10">
                                               <textarea readonly name="appraisal" id="inputEmail2" type="text" required  placeholder="Appraisal" class="form-control">

                                               <?php $app = $secretary->get_appraisal_by_id();
                                                 
                                                 echo $app['appraisal'];
                                               
                                               ?>
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
                                                   <button name="submitt" onclick="return(confirm('Are you sure you want to delete? Click OK to finish action or Cancel'))" class="btn btn-space btn-primary">DELETE</button>
                                                
                                                   <a href="./pages/r?inv17ml44=appraisal_list" class="btn btn-space btn-secondary">CANCEL</a>
                                               </p>
                                           </div>
                                       </div>
                                   </form>
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


    