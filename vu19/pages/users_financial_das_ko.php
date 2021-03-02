<?php 
require_once './../class/accountant.php';

require_once './../pdoconn/accountantconfig.php';

 

?>
<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                  
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Finance Dashboard </h2>

                                
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Member's Finance Dashboard </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                  
                                        <h5 class="text-muted">Total Revenue</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">
                                                
                                            <?php
                                            if(!$accountant->total_revenue()){
                                                echo '0.00';
                                            }else{

                                                echo "GHS ". number_format($accountant->total_revenue(), 2, '.', ',');
                                               
                                            }
                                           
                                            
                                            ?> 

                                            </h1>
                                            

                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                        <img style="margin-top: -50px;" width=90px height=auto; src="./../images/revenue.png"/>
                                            <!-- <span><i class="fa fa-fw fa-arrow-up"></i></span><span></span> -->
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue"></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Payment Received</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">
                                                
                                            <?php
                                            if(!$accountant->total_payments()){
                                                echo '0.00';
                                            }else{

                                                echo "GHS ". number_format($accountant->total_payments(), 2, '.', ',');
                                               
                                            }
                                           
                                            
                                            ?> 


                                            </h1>
                                        </div>

                                        <div  class="metric-label d-inline-block float-right text-success font-weight-bold">
                                               <img style="margin-top: -50px;" width=90px height=auto; src="./../images/payment-method.png"/>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue2"></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Added Income</h5>
                                        <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">
                                                
                                                <?php
                                                if(!$accountant->total_income()){
                                                    echo '0.00';
                                                }else{
    
                                                    echo "GHS ". number_format($accountant->total_income(), 2, '.', ',');
                                                   
                                                }
                                               
                                                
                                                ?> 
    
    
                                                </h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                                        <img style="margin-top: -50px;" width=90px height=auto; src="./../images/coins.png"/>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue3"></div>
                                </div>
                            </div>

                            <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Expense</h5>
                                        <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">
                                                
                                                <?php
                                                // if(!$accountant->total_expense()){
                                                //     echo '<a class="nav-link" href="./pages/r?inv17ml44=add_amt_inexp">Add Item</a>';
                                                // }else{
    
                                                //     echo "GHS ". number_format($accountant->total_expense(), 2, '.', ',');
                                                   
                                                // }
                                               
                                                
                                                ?> 
    
    
                                                </h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                          
                                        </div>
                                    </div>
                                    
                                </div>
                            </div> -->



                        </div>

                     
                        <div class="row">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Expense</h5>
                                        <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">
                                                
                                        <?php
                                                if(!$accountant->total_expense()){
                                                    echo '0.00';
                                                }else{
    
                                                    echo "GHS ". number_format($accountant->total_expense(), 2, '.', ',');
                                                   
                                                }
                                               
                                                
                                                ?> 
    
                                                </h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                          
                                        </div>
                                    </div>
                                </div>
                            </div> 
                           
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Cash At Hand</h5>
                                        <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">
                                                
                                                <?php
                                                if(!$accountant->cash_at_hand()){
                                                    // echo '<a class="nav-link" href="./pages/r?inv17ml44=add_bill_items">Add Item</a>';
                                                    echo '00.00';
                                                }else{
                                                  $get_balance_paid =   $accountant->cash_at_hand();
                                                    

                                                    echo "GHS ". number_format($get_balance_paid, 2, '.', ',');
                                                  //  echo "GHS ". ($get_balance_paid);
                                                   
                                                }
                                               
                                                
                                                ?> 
    
    
                                                </h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <!-- <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5.86%</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                          
                           
                            
                          
                          
                           
                      
                        </div>


                        
                        <div class="row" >
                            
                               
                            <div  class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div  class="card">
                                    <div class="card-header">
                                      
                                        <h5 class="mb-0">Expense Report Chart</h5>
                                    </div>
                                    <div style="background : whitesmoke;" class="card-body">
                                    <div style="height : 270px; width :auto;" id="expense_chart" style=""></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div  class="card">
                                    <div class="card-header">
                                      
                                        <h5 class="mb-0">Added Income Report Chart</h5>
                                    </div>
                                    <div style="background : whitesmoke;" class="card-body">
                                    <div style="height : 270px; width :auto;" id="income_added" style=""></div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div  class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0"> Recent Deposits</h5>
                                    </div>
                                    <div class="card-body">
                                    <div class="table-responsive"> -->
                                    <!-- <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Bank Name</th>
                                                <th>Amount Deposited</th>
                                                
                                                <th>Date</th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php  
                                    
                                        
                                    //  $accountant->alldepositsmonthly(); 
                                        
                                        
                                        ?>
                                        </tbody>
                                        <tfoot>
                                        <th>Bank Name</th>
                                                <th>Amount Deposited</th>
                                                
                                                <th>Date</th>
                                            </tr>
                                        </tfoot>
                                    </table> -->
                                <!-- </div>
                                    </div>
                                </div>
                            </div> -->
                          
                           
                        </div>

<!--                         

                        <div class="row">
                          
                            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Revenue by Category</h5>
                                    <div class="card-body">
                                        <div id="c3chart_category" style="height: 420px;"></div>
                                    </div>
                                </div>
                            </div>
                          

                            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header"> Total Revenue</h5>
                                    <div class="card-body">
                                        <div id="morris_totalrevenue"></div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="display-7 font-weight-bold"><span class="text-primary d-inline-block">$26,000</span><span class="text-success float-right">+9.45%</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                         -->

                         
                        <div class="row">
	                       
	                        <div class="col-lg-12">
	                            <div class="section-block">
	                                <h3 class="section-title">My Monthly Activities Timelines</h3>
	                            </div>
	                            <div class="card">
	                                <div class="campaign-table table-responsive">
                                    <table id="usersactivityfinancials" class="table">
	                                        <thead>
	                                            <tr class="border-0">
	                                                <th class="border-0">Activity</th>
	                                                <th class="border-0">Activity Summary</th>
	                                                <th class="border-0">Date</th>
	                                                <th class="border-0">Timestamp</th>
	                                                
	                                            </tr>
	                                        </thead>
	                                        <tbody>
	                                          <?php $accountant -> get_users_activity(); ?>
	                                        </tbody>

											<tfoot>
                                            <tr>
											<th class="border-0">Activity</th>
	                                                <th class="border-0">Activity Summary</th>
	                                                <th class="border-0">Date</th>
	                                                <th class="border-0">Timestamp</th>
                                            </tr>
                                        </tfoot>
	                                    </table>
	                                </div>
	                            </div>
	                        </div>
	                     
						</div>




                    </div>
                </div>
            </div>
           
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        Copyright © 2019 Linutek. All rights reserved. Dashboard by <a href="#">Linutek</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <!-- <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>