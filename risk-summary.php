<?php 

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
                        <div class="col-lg-9 col-md-8 label">1. What is your current age?</div>
                        <div class="col-lg-3 col-md-4"><?php echo $riskSummary[0]; ?></div>
                      </div>
                      <div class="row">
                        <div class="col-lg-9 col-md-8 label">2. How many months of expenses can your emergency funds
                          cover?</div>
                        <div class="col-lg-3 col-md-4"><?php echo $riskSummary[1]; ?></div>
                      </div>
      
                      <div class="row">
                        <div class="col-lg-9 col-md-8 label">3. What percentage of monthly income can be invested?</div>
                        <div class="col-lg-3 col-md-4"><?php echo $riskSummary[2]; ?></div>
                      </div>
      
                      <div class="row">
                          <div class="col-lg-9 col-md-8 label">4. How many people depend on you financially?</div>
                          <div class="col-lg-3 col-md-4"><?php echo $riskSummary[3]; ?></div>
                        </div>
      
                        <div class="row">
                          <div class="col-lg-9 col-md-8 label">5. I prefer to keep capital safe rather than have high
                              returns</div>
                          <div class="col-lg-3 col-md-4"><?php echo $riskSummary[4]; ?></div>
                        </div>
      
                        <div class="row">
                          <div class="col-lg-9 col-md-8 label">6. What is your primary investment objective?</div>
                          <div class="col-lg-3 col-md-4"><?php echo $riskSummary[5]; ?></div>
                        </div>
      
                        <div class="row">
                          <div class="col-lg-9 col-md-8 label">7. I would start to worry about my investments if my portfolio
                              value falls</div>
                          <div class="col-lg-3 col-md-4"><?php echo $riskSummary[6]; ?></div>
                        </div>
                        <div class="row">
                          <div class="col-lg-9 col-md-8 label">8. In order to achieve high returns I am willing to choose high risk investments.</div>
                          <div class="col-lg-3 col-md-4"><?php echo $riskSummary[7]; ?></div>
                        </div>
                        <div class="row">
                          <div class="col-lg-9 col-md-8 label">9. What is your expected rate of return from your investments?</div>
                          <div class="col-lg-3 col-md-4"><?php echo $riskSummary[8]; ?></div>
                        </div>
                        <div class="row">
                          <div class="col-lg-9 col-md-8 label">10. You have Rs.10 lakh to invest at the start of the year. Below are the three hypothetical investment portfolio returns scenarios with likely best and worst-case annual returns. Which scenario would you prefer?</div>
                          <div class="col-lg-3 col-md-4"><?php echo $riskSummary[9]; ?></div>
                        </div>
                        <a href="/risk-analyze.php">update Risk Profile</a>
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
