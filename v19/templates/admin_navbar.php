
<body>
   
   <div class="dashboard-main-wrapper">
   
       <div class="dashboard-header">
           <nav class="navbar navbar-expand-lg bg-white fixed-top">
               <a class="navbar-brand" href="#"><img class="logo-img" height="auto" width="100" src="./assets/images/logo.png" alt="logo"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>


               <div class="collapse navbar-collapse " id="navbarSupportedContent">
                   <ul class="navbar-nav ml-auto navbar-right-top">
<!--                        
                       <li class="nav-item dropdown notification">
                           <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                           <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                               <li>
                                   <div class="notification-title"> Notification</div>
                                   <div class="notification-list">
                                       <div class="list-group">
                                           <a href="#" class="list-group-item list-group-item-action active">
                                               <div class="notification-info">
                                                   <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                   <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                       <div class="notification-date">2 min ago</div>
                                                   </div>
                                               </div>
                                           </a>
                                           <a href="#" class="list-group-item list-group-item-action">
                                               <div class="notification-info">
                                                   <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                   <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                       <div class="notification-date">2 days ago</div>
                                                   </div>
                                               </div>
                                           </a>
                                           <a href="#" class="list-group-item list-group-item-action">
                                               <div class="notification-info">
                                                   <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                   <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                       <div class="notification-date">2 min ago</div>
                                                   </div>
                                               </div>
                                           </a>
                                           <a href="#" class="list-group-item list-group-item-action">
                                               <div class="notification-info">
                                                   <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                   <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                       <div class="notification-date">2 min ago</div>
                                                   </div>
                                               </div>
                                           </a>
                                       </div>
                                   </div>
                               </li>
                               <li>
                                   <div class="list-footer"> <a href="#">View all notifications</a></div>
                               </li>
                           </ul>
                       </li> -->

                       
                       <!-- <li class="nav-item dropdown connection">
                           <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                           <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                               <li class="connection-list">
                                   <div class="row">
                                       <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                           <a href="#" class="connection-item"><img src="assets/images/github.png" alt="" > <span>Github</span></a>
                                       </div>
                                       <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                           <a href="#" class="connection-item"><img src="assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                       </div>
                                       <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                           <a href="#" class="connection-item"><img src="assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                           <a href="#" class="connection-item"><img src="assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                       </div>
                                       <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                           <a href="#" class="connection-item"><img src="assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                       </div>
                                       <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                           <a href="#" class="connection-item"><img src="assets/images/slack.png" alt="" > <span>Slack</span></a>
                                       </div>
                                   </div>
                               </li>
                               <li>
                                   <div class="conntection-footer"><a href="#">More</a></div>
                               </li>
                           </ul>
                       </li> -->

                       <li class="nav-item dropdown nav-user">
                           <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                           <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                               <div class="nav-user-info">
                                   <h5 class="mb-0 text-white nav-user-name"><?php echo $_SESSION['email']; ?> </h5>
                                   <span class="status"></span><span class="ml-2"><?php echo $_SESSION['user_type']; ?></span>
                               </div>
                               <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                               <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
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
                                                   <li class="nav-item">
                                                       <a class="nav-link" href="./pages/r?inv17ml44=admin_users_das">Users Dashboard</a>
                                                   </li>
                                                   <!-- <li class="nav-item">
                                                       <a class="nav-link" href="./pages/r?inv17ml44=admin_financial_das">Financials Dashboard</a>
                                                   </li> -->
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
                               <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>General</a>
                               <div id="submenu-2" class="collapse submenu" style="">
                                   <ul class="nav flex-column">

                                       <li class="nav-item">
                                           <a class="nav-link" href="./pages/r?inv17ml44=add_u_sers">Users</a>
                                       </li>

                                       <li class="nav-item">
                                           <a class="nav-link" href="./pages/r?inv17ml44=load_users_task">Load Users</a>
                                       </li>
<!-- 
    load_users_task

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
                               <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Apps <span class="badge badge-secondary">New</span></a>
                               <div id="submenu-7" class="collapse submenu" style="">
                                   <ul class="nav flex-column">
                                       <li class="nav-item">
                                           <a class="nav-link" href="pages/inbox.html">Inbox</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="pages/email-details.html">Email Detail</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="pages/email-compose.html">Email Compose</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="pages/message-chat.html">Message Chat</a>
                                       </li>
                                   </ul>
                               </div>
                           </li> -->

                          

                         

                          


                       </ul>
                   </div>
               </nav>
           </div>
       </div>