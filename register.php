<?php
session_start();
require_once('inc/config.php');
$msg = '';
if (isset($_POST['register'])) {

  $myname = stripslashes($_POST['name']);
  $myemail = stripslashes($_POST['email']);
  $myusername = stripslashes($_POST['username']);
  $mypassword = stripslashes($_POST['password']);
  $myconfirmpassword = stripslashes($_POST['confirmpassword']);

  $myname = mysqli_real_escape_string($con, $myname);
  $myemail = mysqli_real_escape_string($con, $myemail);
  $myusername = mysqli_real_escape_string($con, $myusername);
  $mypassword = mysqli_real_escape_string($con, $mypassword);
  $myconfirmpassword = mysqli_real_escape_string($con, $myconfirmpassword);

  $user_id = $myusername.rand(1000,9999);

  if ($mypassword == $myconfirmpassword) {
    $sql = "SELECT * FROM $tb_login WHERE myusername = '$myusername'";
    $res = mysqli_query($con, $sql);
    if (mysqli_num_rows($res) == 0) {
      $mypassword = hash('sha256', $mypassword);
      $sql = "INSERT INTO $tb_login (user_id, myname, myemail, myusername,mypassword) VALUES ('$user_id','$myname', '$myemail', '$myusername', '$mypassword')";
      $result = mysqli_query($con, $sql);
      if ($result) {
        session_start();
        $_SESSION['user_id']=$user_id;
        $_SESSION['username'] = $myusername;
        header('location:risk.php');
      } else {
        echo " <script> alert('You Have an error insert value'); </script>";
      }
    } else {
      echo " <script> alert('Opps email already exists'); </script>";
    }
  } else {
    echo "<script> alert('Password Not Matched'); </script>";
  }

}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once('page/head.php'); ?>
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.php" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Easy Invest</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form action="" method="post" class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" name="name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label"> Confirm Password</label>
                      <input type="password" name="confirmpassword" class="form-control" id="yourConfirmPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="register">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                Designed by <a href="#">Easy Invest</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <?php require_once('page/script.php'); ?>

</body>

</html>