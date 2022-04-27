<?php include('page/session.php'); ?>
<?php
require_once('inc/config.php');
$myusername = $_SESSION['username'];
$sql = "SELECT * FROM $tb_login WHERE myusername = '$myusername'";
$res = mysqli_query($con, $sql);
$val = mysqli_fetch_assoc($res);
?>
<?php
if (isset($_POST['edit_profile'])) {

  $myname = stripslashes($_POST['fullName']);
  $myemail = stripslashes($_POST['email']);
  $image = $_FILES['file'];
 
  $imagefilename = $image['name'];
  $imagefileerror = $image['error'];
  $imagefiletemp=$image['tmp_name'];
  $filename_separate = explode('.',$imagefilename);
  
  //$file_extension = strtolower($filename_separate[1]);
  //print_r($file_extension);
  $file_extension = strtolower(end($filename_separate));
  $extension = array('jpeg','jpg','png');

  $myname = mysqli_real_escape_string($con, $myname);
  $myemail = mysqli_real_escape_string($con, $myemail);
  

     if(in_array($file_extension,$extension)){
      $upload_image='images/'.$imagefilename;
      move_uploaded_file($imagefiletemp,$upload_image);
      $sql = "UPDATE $tb_login SET `image_url` = '$upload_image'  WHERE $tb_login.`myusername` = '$myusername'";
      $res = mysqli_query($con, $sql);
    }
    
  $sql = "UPDATE $tb_login SET `myname` = '$myname', `myemail` = '$myemail'  WHERE $tb_login.`myusername` = '$myusername'";
  $res = mysqli_query($con, $sql);
  
  if ($res) {
   //echo " <script> alert('Successfully Updated'); </script>";
  } else {
    echo " <script> alert('Opps!!! Something went Wrong'); </script>";
  } 
 //else{  remove part
   // echo " <script> alert('File Uploading Error!!'); </script>";
 // }
  
}
?>
<?php
if (isset($_POST['change_password'])) {

  $mypassword = stripslashes($_POST['newpassword']);
  $myconfirmpassword = stripslashes($_POST['renewpassword']);

  $mypassword = mysqli_real_escape_string($con, $mypassword);
  $myconfirmpassword = mysqli_real_escape_string($con, $myconfirmpassword);

  

  if ($mypassword == $myconfirmpassword) {
    $sql = "UPDATE $tb_login SET `mypassword` = '$mypassword' WHERE $tb_login.`myusername` = '$myusername'";
    $res = mysqli_query($con, $sql);
    if ($res) {
      echo " <script> alert('Successfully Updated'); </script>";
    } else {
      echo " <script> alert('Opps!!! Something went Wrong'); </script>";
    }
  } else {
    echo "<script> alert('Password Not Matched'); </script>";
  }
}


if(isset($_POST['delete_img'])){
   $profile_image = $_POST['del_img']; 
    if ($val['image_url'] != 'images/profile.png') {
     unlink($profile_image);
   }
  
  // unlink('images/'. $profile_image);
   $sql = "UPDATE $tb_login SET `image_url` = NULL WHERE $tb_login.`myusername` = '$myusername'" ;
   $res = mysqli_query($con, $sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once('page/head.php'); ?>
  
</head>

<body>

  <!-- ======= Header ======= -->
  <?php require_once('page/header.php'); ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php require_once('page/sidebar.php'); ?>
  <!-- End Sidebar-->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">User</li>
          <li class="breadcrumb-item"><a href="profile.php" class="active">Profile</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
             
            
            <img style="width: 200px;
                       height: 120px;
                       border-radius: 60%;
                       overflow: hidden;
                       float: left;
                       display:inline-block;
                       vertical-align:middle;" 
            src="<?php echo $val['image_url']; ?>" alt="profile" onerror="this.src='images/profile.png';"> 
            
              <h2><?php echo $val['myname']; ?></h2>
              <!-- <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div> -->
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <!-- <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li> -->

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">
                <!-- Profile Overview -->
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <!-- <h5 class="card-title">About</h5>
                  <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p> -->

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">User</div>
                    <div class="col-lg-9 col-md-8"><?php echo $val['myusername']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $val['myname']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $val['myemail']; ?></div>
                  </div>

                  <!-- <div class="row">
                    <div class="col-lg-3 col-md-4 label">Job</div>
                    <div class="col-lg-9 col-md-8">Web Designer</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8">USA</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
                  </div> -->

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                 
                
                  <!-- Profile Edit Form -->
                  <form method="POST" enctype="multipart/form-data">

                  <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                       
                      <img style="width: 200px;
                       height: 120px;
                       border-radius: 60%;
                       overflow: hidden;
                       float: left;
                       display:inline-block;
                       vertical-align:middle;"  src="<?php echo $val['image_url']; ?>" alt="profile" onerror="this.src='images/profile.png';">
                    
                        <div class="pt-2">
                        <!--  <input type="file" id="file" name="file" class="btn btn-primary btn-sm bi bi-upload" title="Upload new profile image">   -->
                        <div style="height:0px;overflow:hidden; display: inline-block;  " >
                                <input type="file" id="file" name="file" />
                        </div>
                        <button style=" border: 4px solid #6c5ce7;  
                                        padding: .2em .4em;
                                        border-radius: .2em;
                                        background-color: #a29bfe;
                                        transition: 1s;" 
                         type="button" onclick="chooseFile();"> <i class="bi bi-cloud-upload"></i></button>

                         <script>
                              function chooseFile() {
                                  document.getElementById("file").click();
                               }
                         </script>

                              &nbsp; 
                          <input type="hidden" name="del_img" value="<?php echo $val['image_url']; ?>">  
                       <!--   <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a> -->
                       <button style =" border: 4px solid #B1270A;"type="submit" name="delete_img" class="btn btn-danger btn-sm" title="Remove my profile image" ><i class="bi bi-trash"></i></button>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullName" type="text" class="form-control" id="fullName" value="<?php echo $val['myname']; ?>">
                      </div>
                    </div>

                    <!-- <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                      </div>
                    </div> -->

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="<?php echo $val['myemail']; ?>">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name="edit_profile"  >Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form method="POST">

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name="change_password">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php require_once('page/footer.php'); ?>
  <!-- End Footer -->

  <?php require_once('page/script.php'); ?>
  <script>
    
   
    </script>
