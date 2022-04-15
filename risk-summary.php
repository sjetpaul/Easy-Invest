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
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>Easy Invest</span></strong
        >. All Rights Reserved
      </div>
      <div class="credits">Designed by <a href="#">Easy Invest</a></div>
    </footer>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="inc/main.js"></script>
  </body>
</html>
