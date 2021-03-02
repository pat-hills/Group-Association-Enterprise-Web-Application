<?php
require_once './../class/user.php';
require_once './../pdoconn/config.php';

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
                            <h2 class="pageheader-title">Users Task</h2>
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
                  <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Alert On Activity</h2>
                          <div class="alert alert-success" role="alert">
                            <strong>Successfully</strong>Done!.
                          </div>
                          
                          
                          
                      </div>
                  </div>
              </div>
          </div>
         
                <?php } ?>

                <?php if ($a == 6) { ?>
                  <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Alert On Activity</h2>
                          <div class="alert alert-danger" role="alert">
                            <strong>Failed On</strong> Activity!.
                          </div>
                          
                          
                          
                      </div>
                  </div>
              </div>
          </div>
         
                <?php } ?>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->

               
                                    
                                    
                              


                             
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                            <form    method="post"   role="form" enctype="multipart/form-data">   
                            <div style="" class="form-group row">
                            <table>
                                <tr>
                                    <td> <label for="inputWebSite" class="col-4 col-lg-2 col-form-label text-right">Select User </label></td>
                               
                                    <td> 
                                    <div class="col-4 col-lg-10">
                                           <select style="width:auto;" required name="house_name" class="form-control">
                   <option>---SELECT OPTION---</option>
                   <?php $user->usersdropdown() ?>
                   </select>
                                           </div>

                                    </td>

                                    <td>
                                    <div class="col-4 col-lg-10">
                                           <button type="submit" name="save" class="btn btn-primary">Load Activity</button>
                                           </div>
                                 </td>
                                  
                                </tr>
                            </table>
                                           
                                         

                                         

                                       </div>


                 
                                    
                 
</form>

<form method="post"  class='form-horizontal' role='form'> 

                   

                            </div>


                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="loadusertaskdatable" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                          
                              <th>Task</th>
                              <th>Summary</th>
                             <th>Date Time</th>
                           
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php  
                                    
                                    if(isset($_POST['save'])){
                                        
                                       
                                            $user -> load_users_task();
                                      
                                        
                                       
                                   }
                                        
                                        
                                        ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Task</th>
                              <th>Summary</th>
                             <th>Date Time</th>
                                               
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                 
                        </div>
                    </div>
            

 
                </div>

              
            </div>

            </form>
      
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        Copyright © 2019 Linutek. All rights reserved. Dashboard by <a href="#">Linutek</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);"></a>
                                <a href="javascript: void(0);"></a>
                                <a href="javascript: void(0);"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


    <!-- </div>
   
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="../../../../../cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="../assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
     <script src="../assets/vendor/datatables/js/data-table.js"></script>
    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="../../../../../cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="../../../../../cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="../../../../../cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    
</body>
 
</html> -->