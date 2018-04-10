<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("layouts/header.php") ?>
  <script src="assets/js/common.js"></script>
  <script src="assets/js/register.js"></script>
  <script src="assets/lib/jquery/js/jquery.min.js"></script>
  <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>
<body class="login-page">
  <section class="h-100">
    <div class="container h-100">
      <div class="row  h-100">
          <div class="brand-lg">
            <a href="index.php">
              <img src="assets/images/logoteam-alpha.png">
            </a>
          </div>
          <div class="card-wrapper">
          <div class="brand">
            <a href="index.php">
              <img src="assets/images/logoteam-alpha.png">
            </a>
          </div>
          <div class="card fat">
            <div class="card-body">
              <h4 class="card-title">Register</h4>
              <form method="POST">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6 form-group">
                      <label for="username">Username</label>
                      <input class="form-control" name="username" id="username" type="text"  placeholder="Username">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="email">Email</label>
                      <input class="form-control" name="email" id="email" type="email"  placeholder="Email Address">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <label for="password">Password</label>
                      <input type="password" class="form-control" name="password" id="password" type="password" placeholder="Password"> 
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                  <label for="repeatPassword">Confirm Password</label>
                    <input type="password" class="form-control" name="repeatPassword" type="password" id="repeatPassword" placeholder="Confirm Password">
                  </div>
                </div>


                <div class="form-group no-margin">
                  <button type="submit" class="btn btn-success btn-block">
                    Register
                  </button>
                </div>
                <div class="margin-top20 text-center">
                  Already have an account? <a href="login.php">Login now</a>
                </div>
              </form>
            </div>
          </div>
          <div class="footer">
            Copyright &copy; 2018 &mdash; UPOU-CMSC-207-Team-Alpha 
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
