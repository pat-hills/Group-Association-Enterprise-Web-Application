
<body>
   
   <div class="dashboard-main-wrapper">
   
       <div class="dashboard-header">
           <nav class="navbar navbar-expand-lg bg-white fixed-top">
           <a class="navbar-brand" href="./pages/r?inv17ml44=users_das"><img width=80px height=auto; src="logo.png"/></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse " id="navbarSupportedContent">
                   <ul class="navbar-nav ml-auto navbar-right-top">
                        
                       <!-- <li class="nav-item dropdown notification">
                           <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                           <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                             
                           </ul>
                       </li> -->
                      
                       <li class="nav-item dropdown nav-user">
                           <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                           <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                               <div class="nav-user-info">
                                   <h5 class="mb-0 text-white nav-user-name"><?php echo $_SESSION['email']; ?> </h5>
                                   <span class="status"></span><span class="ml-2"><?php echo $_SESSION['user_type']; ?></span>
                               </div>  
                         <a class="dropdown-item" href="./pages/r?inv17ml44=change_password_finance"><i class="fas fa-user mr-2"></i>Change Password</a>
                                   <!--   <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a> -->
                               <a class="dropdown-item" href="./pages/r?inv17ml44=logout"><i class="fas fa-power-off mr-2"></i>Logout</a>
                           </div>
                       </li>
                   </ul>
               </div>
           </nav>
       </div>
      
       <div class="nav-left-sidebar sidebar-dark">
           <div class="menu-list">
               <nav class="navbar navbar-expand-lg navbar-light">
                   <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarNav">
                       <ul class="navbar-nav flex-column">
                           <li class="nav-divider">
                               Menu
                           </li>
                           <li class="nav-item ">
                               <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                               <div id="submenu-1" class="collapse submenu" style="">
                                   <ul class="nav flex-column">
                                       <li class="nav-item">
                                           <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">Overview</a>
                                           <div id="submenu-1-2" class="collapse submenu" style="">
                                               <ul class="nav flex-column">
                                                   <!-- <li class="nav-item">
                                                       <a class="nav-link" href="./pages/r?inv17ml44=admin_users_das">Users Dashboard</a>
                                                   </li> -->
                                                   <li class="nav-item">
                                                       <a class="nav-link" href="./pages/r?inv17ml44=users_financial_das"> Financials Dashboard</a>
                                                   </li>
                                                   <!-- <li class="nav-item">
                                                       <a class="nav-link" href="ecommerce-product-single.html">Product Single</a>
                                                   </li>
                                                   <li class="nav-item">
                                                       <a class="nav-link" href="ecommerce-product-checkout.html">Product Checkout</a>
                                                   </li> -->
                                               </ul>
                                           </div>
                                       </li>
                                       <!-- <li class="nav-item">
                                           <a class="nav-link" href="dashboard-finance.html">Finance</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="dashboard-sales.html">Sales</a>
                                       </li> -->

                                       <!-- <li class="nav-item">
                                           <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Infulencer</a>
                                           <div id="submenu-1-1" class="collapse submenu" style="">
                                               <ul class="nav flex-column">
                                                   <li class="nav-item">
                                                       <a class="nav-link" href="dashboard-influencer.html">Influencer</a>
                                                   </li>
                                                   <li class="nav-item">
                                                       <a class="nav-link" href="influencer-finder.html">Influencer Finder</a>
                                                   </li>
                                                   <li class="nav-item">
                                                       <a class="nav-link" href="influencer-profile.html">Influencer Profile</a>
                                                   </li>
                                               </ul>
                                           </div>
                                       </li> -->


                                   </ul>
                               </div>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Bill Management</a>
                               <div id="submenu-2" class="collapse submenu" style="">
                                   <ul class="nav flex-column">

                                       <li class="nav-item">
                                           <a class="nav-link" href="./pages/r?inv17ml44=add_bill_items">Bill Item</a>
                                       </li>

                                       
                                       <li class="nav-item">
                                           <a class="nav-link" href="./pages/r?inv17ml44=add_bill_preparation">Bill Preparation</a>
                                       </li>
                                       

                                       <li class="nav-item">
                                           <a class="nav-link" href="./pages/r?inv17ml44=add_bill_to_ledger">Bill Ledger</a>
                                       </li>

                                      <li class="nav-item">
                                           <a class="nav-link" href="./pages/r?inv17ml44=individual_bill_list">Individual Billing Ledger</a>
                                       </li>  

                                       <li class="nav-item">
                                           <a class="nav-link" href="./pages/r?inv17ml44=members_payment_list">Member Payments</a>
                                       </li>

                                       <li class="nav-item">
                                           <a class="nav-link" href="./pages/r?inv17ml44=member_payments_statement">Search Payments</a>
                                       </li>

<!--                      members_payment_list                  
                                       <li class="nav-item">
                                           <a class="nav-link" href="pages/general.html">General</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="pages/carousel.html">Carousel</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="pages/listgroup.html">List Group</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="pages/typography.html">Typography</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="pages/accordions.html">Accordions</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="pages/tabs.html">Tabs</a>
                                       </li>
 -->

                                   </ul>
                               </div>
                           </li>


                           <!-- <li class="nav-item">
                               <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Chart</a>
                               <div id="submenu-3" class="collapse submenu" style="">
                                   <ul class="nav flex-column">
                                       <li class="nav-item">
                                           <a class="nav-link" href="pages/chart-c3.html">C3 Charts</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="pages/chart-chartist.html">Chartist Charts</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="pages/chart-charts.html">Chart</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="pages/chart-morris.html">Morris</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="pages/chart-sparkline.html">Sparkline</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="pages/chart-gauge.html">Guage</a>
                                       </li>
                                   </ul>
                               </div>
                           </li> -->


<!--                             
                           <li class="nav-item">
                               <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                               <div id="submenu-5" class="collapse submenu" style="">
                                   <ul class="nav flex-column">
                                       <li class="nav-item">
                                           <a class="nav-link" href="pages/general-table.html">General Tables</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                                       </li>
                                   </ul>
                               </div>
                           </li> -->
                           <li class="nav-divider">
                               Features
                           </li>

                           <li class="nav-item">
                               <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Income & Expense </a>
                               <div id="submenu-6" class="collapse submenu" style="">
                                   <ul class="nav flex-column">
                                       <li class="nav-item">
                                           <a class="nav-link" href="./pages/r?inv17ml44=add_acc_inexp">Accounts</a>
                                       </li>

                                       <li class="nav-item"> 
                                           <a class="nav-link" href="./pages/r?inv17ml44=add_amt_inexp">Recordings</a>
                                       </li>
                                       

                                 <li class="nav-item"> 
                                           <a class="nav-link" href="./pages/r?inv17ml44=add_amt_inexp_income">Income List</a>
                                       </li>
    
                                       <li class="nav-item"> 
                                           <a class="nav-link" href="./pages/r?inv17ml44=add_amt_inexp_expense">Expense List</a>
                                       </li>



                                       <li class="nav-item"> 
                                           <a class="nav-link" href="./pages/r?inv17ml44=income_statement_account">Income Statement</a>
                                       </li>

                                  
                                   </ul>
                               </div>
                           </li>


                      <!-- <li class="nav-item">
                               <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Bank Management </a>
                               <div id="submenu-7" class="collapse submenu" style="">
                                   <ul class="nav flex-column">
                                       <li class="nav-item">
                                           <a class="nav-link" href="./pages/r?inv17ml44=add_bank_details">Bank Details</a>
                                       </li>
                                      
                                       <li class="nav-item">
                                           <a class="nav-link" href="./pages/r?inv17ml44=bank_withdrawals">Withdrawals</a>
                                       </li>
                                       
                                   </ul>
                               </div>
                           </li>   -->


                          

                         


                           <!-- <li class="nav-item">
                               <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Menu Level</a>
                               <div id="submenu-10" class="collapse submenu" style="">
                                   <ul class="nav flex-column">
                                       <li class="nav-item">
                                           <a class="nav-link" href="#">Level 1</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Level 2</a>
                                           <div id="submenu-11" class="collapse submenu" style="">
                                               <ul class="nav flex-column">
                                                   <li class="nav-item">
                                                       <a class="nav-link" href="#">Level 1</a>
                                                   </li>
                                                   <li class="nav-item">
                                                       <a class="nav-link" href="#">Level 2</a>
                                                   </li>
                                               </ul>
                                           </div>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="#">Level 3</a>
                                       </li>
                                   </ul>
                               </div>
                           </li> -->

                       </ul>
                   </div>
               </nav>
           </div>
       </div>