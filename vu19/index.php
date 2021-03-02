<?php
 $a = 0;
  if(isset($_GET['m'])){
      $a = $_GET['m'];
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
        background: url("back-cover.jpg") no-repeat center center fixed !important;
    background-size: cover !important;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="index">
            <img height="" width="150" class="logo-img" src="./assets/images/logo.png" alt="logo">
            </a><span class="splash-description">Organization User's Account Login.</span>
            <?php if ($a == 5) { ?>
                  <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h6 class="card-title">Invalid Email / Password</h6>
                          <div class="alert alert-warning" role="alert">
                            <strong>Please Try </strong>Again!.
                          </div>
                          
                          
                          
                      </div>
                  </div>
              </div>
          </div>
         
                <?php } ?>
            
            
            
            </div>
            <div class="card-body">
                <form method="POST" action="pages/forgotaction">
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="email" type="text" placeholder="Email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="pass" type="password" placeholder="Password">
                    </div>
                    <!-- <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div> -->
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>

            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="../index" class="footer-link">Home</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="forgot-password" class="footer-link">Forgot Password</a>
                </div>
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