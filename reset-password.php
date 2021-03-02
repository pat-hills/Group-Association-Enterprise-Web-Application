<?php

  $a = "";
  if(isset($_GET['token'])){
      $a = $_GET['token'];
  }

?>


<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="./assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/libs/css/style.css">
    <link rel="stylesheet" href="./assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="#"><img class="logo-img" height="auto" width="150" src="./assets/images/logo.png" alt="logo"></a>
            <span class="splash-description">Change Password.</span>
            
            <?php if ($a == "expired") { ?>
                  <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                    <h2 class="card-title">Password Reset Link Is Expired</h2>
                          <div class="alert alert-warning" role="alert">
                            <strong>Please Request For Another Reset Link. Thank You</strong>!.
                          </div>
                          
                          
                          
                      </div>
                  </div>
              </div>
          </div>
         
                <?php } ?>
            
            
            </div>
            <div class="card-body">
                <form method="POST" action="v19/pages/action_password_reset">
                <!-- <h3 class="mb-1">Forgot Password</h3> -->
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" type="text" placeholder="New Password"
                       
                         autocomplete="off">
                    </div>

                    <div class="form-group">
                        <input value="<?php 
                        if(isset($_GET['token'])){
                            echo $_GET['token'];
                        }
                      
                        
                        ?>" class="form-control form-control-lg" name="token" type="hidden" placeholder="token" autocomplete="off">
                    </div>
                   
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="confirmpassword" type="text" placeholder="Confirm New Password" autocomplete="off">
                    </div>
                   

                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Change Password</button>
                </form>
            </div>

            <!-- <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="index" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div> -->

          
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="./../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="./../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>