<?php 
session_start();

if(!isset($_SESSION['id'])){

  header('location:login.php');

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
        <h1>Form Layouts</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Risk Profile</li>
            <li class="breadcrumb-item active">Risk Analyze</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->
      <!-- Risk Analyze Form -->
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Risk Summary</h5>
                <!-- Risk Summary -->
                <div class="risk-summary">
                    <div class="row">
                        <div class="col-lg-9 col-md-8 label">What is your current age?</div>
                        <div class="col-lg-3 col-md-4">age1</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-9 col-md-8 label">How many months of expenses can your emergency funds
                          cover?</div>
                        <div class="col-lg-3 col-md-4">emergency_fund1</div>
                      </div>
      
                      <div class="row">
                        <div class="col-lg-9 col-md-8 label">What percentage of monthly income can be invested?</div>
                        <div class="col-lg-3 col-md-4">income1</div>
                      </div>
      
                      <div class="row">
                          <div class="col-lg-9 col-md-8 label">How many people depend on you financially?</div>
                          <div class="col-lg-3 col-md-4">depend1</div>
                        </div>
      
                        <div class="row">
                          <div class="col-lg-9 col-md-8 label">I prefer to keep capital safe rather than have high
                              returns</div>
                          <div class="col-lg-3 col-md-4">capital_safe1</div>
                        </div>
      
                        <div class="row">
                          <div class="col-lg-9 col-md-8 label">What is your primary investment objective?</div>
                          <div class="col-lg-3 col-md-4">objective1</div>
                        </div>
      
                        <div class="row">
                          <div class="col-lg-9 col-md-8 label">I would start to worry about my investments if my portfolio
                              value falls</div>
                          <div class="col-lg-3 col-md-4">portfolio_falls1</div>
                        </div>
      
                        <!-- <div class="row">
                          <div class="col-lg-3 col-md-4 label">Email</div>
                          <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
                        </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php require_once('page/footer.php'); ?>
  <!-- End Footer -->

  <?php require_once('page/script.php'); ?>
  </body>
</html>
