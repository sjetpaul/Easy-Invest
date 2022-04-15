<?php 
session_start();
  require_once('inc/config.php');
  $msg='';
  if(isset($_POST['login'])){
  
        $myusername = stripslashes($_POST['username']);
        $mypassword = stripslashes($_POST['password']);

        $myusername = mysqli_real_escape_string($con,$myusername);
        $mypassword = mysqli_real_escape_string($con,$mypassword);

        $sql = "select * from $tb_login where username = '$myusername' ";
        $res = mysqli_query($con,$sql);
        if(mysqli_num_rows($res) == 1){
          $val = mysqli_fetch_assoc($res);
          if($val['password'] == $mypassword){
            session_start();
            $_SESSION['id'] = $val['id'];
            $_SESSION['user'] = $val['username'];
            header('location:index.php');

          }else{ echo $msg='<code><p>Wrong Username or Password</p></code>'; }
        }else{ echo $msg='<code><p>Wrong Username or Password</p></code>'; }

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
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Easy Invest</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form class="row g-3 needs-validation" action="" method="POST" novalidate>
                    <div class="col-12">
                    <div style:<?php if(empty($msg)){echo "display:block";}else{ echo "display:hidden"; } ?> > <?php echo $msg; ?> </div>
                    </div>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="passwword" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <!-- <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div> -->
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="login" >Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="register.html">Create an account</a></p>
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