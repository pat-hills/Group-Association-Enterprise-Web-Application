<?php
session_start();
  $a = "";
  if(isset($_GET['email'])){
      $a = $_GET['email'];
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
            <div class="card-header text-center"><a href="index"><img class="logo-img" height="auto" width="150" src="./assets/images/logo.png" alt="logo"></a>
            <span class="splash-description">Forgot Password.</span>
        
            <?php if ($a == "sent ") { ?>
                  <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                    <h6 class="card-title">Password Reset Link Sent To:  <?php echo $_SESSION['verified_email']; ?></h6>
                          <div class="alert alert-success" role="alert">
                            <strong>Please Check Your Email</strong>!.
                          </div>
                          
                          
                          
                      </div>
                  </div>
              </div>
          </div>
         
                <?php } ?>


                <?php if ($a == "wrong") { ?>
                  <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                    <h2 class="card-title">There Is No Email,   <?php echo $_SESSION['verified_email']; ?> Found On Account</h2>
                          <div class="alert alert-success" role="alert">
                            <strong>Please Make Sure You Entered Correct Account Email</strong>!.
                          </div>
                          
                          
                          
                      </div>
                  </div>
              </div>
          </div>
         
                <?php } ?>
        
        </div>
            <div class="card-body">
                <form method="POST" action="pages/forgotaction_password_reset">
                <!-- <h3 class="mb-1">Forgot Password</h3> -->
                    <div class="form-group">
                        <input required class="form-control form-control-lg" name="email" type="text" placeholder="Enter Email" autocomplete="off">
                    </div>
                    <!-- <div class="form-group">
                        <input class="form-control form-control-lg" name="pass" type="password" placeholder="Password">
                    </div> -->

                    <!-- <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div> -->

                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Send Password Link</button>
                </form>
            </div>

            <div class="card-footer bg-white p-0  ">
                <!-- <div class="card-footer-item card-footer-item-bordered">
                    <a style="" href="index" class="footer-link">Create An Account</a></div> -->
                <!-- <div class="card-footer-item card-footer-item-bordered">
                    <a href="reset-password" class="footer-link">Reset Password</a>
                </div> -->
            </div>

          
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