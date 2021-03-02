<?php
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

                        <h2 style="" class="pageheader-title">
                            <img width=60px height=auto; src="./../images/organization.png"/>
                           <b style="color:#71748d; margin-left:7px;">MEMBER'S LIST</b> 

                        </h2>
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
          <strong><i class="icon-user icon-large"></i>&nbsp;Action Completed Sucessfully;  
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

               
                                    
                                    
                                   
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Members</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                                <h5 class="card-header">User Form</h5>
                                                                <div class="card-body">
                                                                    <form action="pages/add_members_action" method="POST">

                                                                  

                                                                    <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">First name</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="firstname" placeholder="Fullname" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Last name</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="lastname" placeholder="Fullname" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                                <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">House</label>
                                                                                <div class="col-9 col-lg-10">

                                                                                    <select required class="form-control" name="name_house">
                                                                                     
                                                                                     <?php $secretary->housesdropdown() ?>

                                                                                   </select>
                                                                                
                                                                                </div>
                                                                            </div>

                                                                        <div class="form-group row">
                                                                                <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Sex</label>
                                                                                <div class="col-9 col-lg-10">

                                                                                    <select required class="form-control" name="sex">
                                                                                     <option></option>
                                                                                     <option>Male</option>
                                                                                     <option>Female</option>

                                                                                   </select>
                                                                                
                                                                                </div>
                                                                            </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Email</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input name="email" type="email" required data-parsley-type="email" placeholder="Email" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Occu.</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input name="occupation" type="text"  placeholder="Occupation" class="form-control">
                                                                            </div>
                                                                        </div>


                                                                        <div class="form-group row">
                                                                            <label for="inputPassword2" class="col-8 col-lg-2 col-form-label text-right">Contact</label>
                                                                            <div class="col-4 col-lg-10">
                                                                                <input name="primarycontact" type="text"  placeholder="Contact" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Residence</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input name="residence" type="text"  placeholder="Residence" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Dob</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input name="dob" type="date"  placeholder="Date of birth" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="submit" name="submitCreateUser" class="btn btn-primary">Submit</button>
                                                                            </div>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                     
                                                
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

                            <a style="float :right; margin-left:15px;" target="_blank" href="./pages/r?inv17ml44=ranks_members_view_ko" class="btn btn-primary">
                                            Print members list
                                        </a>
                                    
                                    <!-- <a style="float :right;" href="./pages/r?inv17ml44=add_members_new" class="btn btn-primary" >
                                            Add Member
                                        </a> -->
                                <h5 class="mb-0"></h5>
                           
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="memberlistdataTables" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th>Photo</th>
                                                <th>Name</th>
                                               
                                                <th>House</th>
                                                <th>Contact</th>
                                                <th>Occupation</th>
                                            
                                             
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php  
                                    
                                        
                                      $secretary->allmembers(); 
                                        
                                        
                                        ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Photo</th>
                                            <th>Name</th>
                                               
                                               <th>House</th>
                                               <th>Contact</th>
                                               <th>Occupation</th>
                                           
                                          
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
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
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