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
                            <h2 class="pageheader-title">Data Tables</h2>
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

               
                                     
   
                <div class="row">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Member Form</h5>
                                <div class="card-body">
                                    <form method="post" action="pages/add_members_action" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Last Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="last_name" required placeholder="Last Name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">First Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required name="first_name"  placeholder="First Name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Tittle</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select name="tittles" type="text"  class="form-control">
                                                    <option></option>
                                                    <option>Dr.</option>
                                                    <option>Prof.</option>
                                                    <option>Rev. Fr.</option>
                                                    <option>Rev. Msgr. Dr.</option>
                                                    <option>Rev. Msgr. Prof.</option>
                                                    <option>Justice.</option>
                                                    <option>Esq.</option>
                                                    <option>H.E</option>
                                                </select>
                                            </div>
                                        </div>

                                        
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Date Of Birth</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="date" required name="dob"  placeholder="Max 6 chars." class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Place Of Birth</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="place_of_birth" required placeholder="Place Of Birth" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Region Of Birth</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select name="region_of_birth" type="text" required  class="form-control">
                                                    <option></option>
                                                    <option>Ashanti Region</option>
                                                    <option>Eastern Region</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Country Of Birth</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select name="country_of_birth" type="text" required  class="form-control">
                                                    <option></option>
                                                    <option>Ghana</option>
                                                    <option>Benin</option>
                                                </select>
                                            </div>
                                        </div>
                                         
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Profession</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input name="profession" type="text" required placeholder="Profession" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Email ID</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input name="email_id" type="email" required  placeholder="Email ID" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Phone Number</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" name="phone_number"   required  placeholder="Phone Number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">House Address</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required type="text" name="house_address"  placeholder="House Address" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">How Long Have You Lived There?</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" name="long_lived_house"  placeholder="How Long Have You Lived There?" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Former Residence (If (9) Less Than 3 years</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" name="house_less_than_3"  placeholder="Former Residence (If (9) Less Than 3 years" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Postal Address</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="postal_address"  placeholder="Postal Address" class="form-control">
                                            </div>
                                        </div>

                                       

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Are you married</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select type="text" name="married"  placeholder="Postal Address" class="form-control">
                                                    <option>YES</option>
                                                    <option>NO</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">What Kind Of Marriage</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select type="text" name="married_type"  placeholder="Postal Address" class="form-control">
                                                    <option>CUSTOMARY</option>
                                                    <option>REGISTRY</option>
                                                    <option>CHURCH</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Welfare PIN</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="welfare_pin"  placeholder="Welfare PIN" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-right">INNITIATION DATA</label>
                                            <div class="col-sm-6">
                                                <div class="custom-controls-stacked">
                                                    
                                                    <div id="error-container1"></div>
                                                </div>
                                            </div>
                                        </div>


                                        
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Date Of Initiation</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="date" name="date_of_initiation" required  class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Council/Court Of Initiation</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input   type="text" name="court_initiation" required="" placeholder="Council/Court Of Initiation" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Select House</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select required  name="house" class="form-control">
                                                    <option></option>
                                                    <?php $secretary->housesdropdown() ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Current Rank</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select required name="rank" type="text"  placeholder="Postal Address" class="form-control">
                                                     <option>Bro.</option>
                                                    <option>W/Bro.</option>
                                                    <option>Sir Kt. Bro.</option>
                                                    <option>Sir Kt. Bro.</option>
                                                    <option>Sis.</option>
                                                    <option>RL.</option>
                                                    <option>MRL.</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">LDE Status</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select type="text" name="lde_status"  placeholder="Postal Address" class="form-control">
                                                    <option>PASSED</option>
                                                    <option>PASSED WITH DISTINCTION</option>
                                                    <option>YET TO WRITE</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Proposer's Name(s) NB: Saparate each <br/> with comma (,)</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <textarea name="prospers_names"  required=""  class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Name Of Parish</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input  type="text" name="name_of_parish" required="" placeholder="Name Of Parish" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Place Of Baptism</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input name="place_of_baptism"  type="text" required="" placeholder="Place Of Baptism" class="form-control">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-right">FAMILY DATA</label>
                                            <div class="col-sm-6">
                                                <div class="custom-controls-stacked">
                                                    
                                                    <div id="error-container1"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Father's Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input  type="text" name="fathers_name" required="" placeholder="Father's Name" class="form-control">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Father's Address</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input  type="text" name="fathers_address" required="" placeholder="Father's Name" class="form-control">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Mother's Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input  type="text"  name="mothers_name" required="" placeholder="Father's Name" class="form-control">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Mother's Address</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input  type="text" name="mothers_address" placeholder="Father's Name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Name of Spouse</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input  type="text" required=""  name="name_of_spouse" placeholder="Name of Spouse" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Spouse's Phone number</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input name="spouse_number"  type="number" required="" placeholder="Spouse's Phone number" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Spouse's Address</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input  type="text" name="spouse_address" required="" placeholder="Spouse's Address" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Number Of Children</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input  type="number" name="number_of_children" required="" placeholder="Spouse's Address" class="form-control">
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Names of Childeren NB: Saparate each <br/> with comma (,)</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <textarea name="names_of_children" required="" class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <!-- <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Browse For Picture</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input  type="file" name="file_image" required="" placeholder="Spouse's Address" class="form-control">
                                            </div>
                                        </div> -->


                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                <button class="btn btn-space btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

              
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
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