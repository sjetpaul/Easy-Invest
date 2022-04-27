<?php include('page/session.php'); ?>
<?php
require_once('inc/config.php');

$riskSummary = array();
$val = array();
$myusername = $_SESSION['username'];
// User Risk Data will fetched from Database
$sql = "SELECT * FROM $tb_risk WHERE myusername = '$myusername'";
$res = mysqli_query($con, $sql);
if ($res) {
  $val = mysqli_fetch_assoc($res);
  $riskProfileStr = $val['risk_profile'];
  //convert riskProfileStr String into array
  $riskSummary = explode('`', $riskProfileStr);
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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active"><a href="home.php" class="active">Dashboard</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard faq">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-12">
          <div class="row">

            <!-- Risk Type -->
            <div class="col-lg-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Risk Type</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-window"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $val['risk_str']; ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- End Risk Type -->

            <!-- Suggestion Card -->
            <div class="col-lg-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Suggested Coin</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-search"></i>
                    </div>
                    <div class="ps-3">
                      <h6>10</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- End Revenue Card -->

            <!-- Reports -->
            <!-- Risk Summary-->
            <div class="col-12">
              <div class="card basic">
                <div class="card-body">
                  <h5 class="card-title">Risk Summary</h5>

                  <div>
                    <h6>1. What is your current age?</h6>
                    <p><?php echo $riskSummary[0]; ?></p>
                  </div>

                  <div class="pt-2">
                    <h6>2. How many months of expenses can your emergency funds cover?</h6>
                    <p><?php echo $riskSummary[1]; ?></p>
                  </div>

                  <div class="pt-2">
                    <h6>3. What percentage of monthly income can be invested?</h6>
                    <p><?php echo $riskSummary[2]; ?></p>
                  </div>
                  <div class="pt-2">
                    <h6>4. How many people depend on you financially?</h6>
                    <p><?php echo $riskSummary[3]; ?></p>
                  </div>
                  <div class="pt-2">
                    <h6>5. I prefer to keep capital safe rather than have high returns</h6>
                    <p><?php echo $riskSummary[4]; ?></p>
                  </div>
                  <div class="pt-2">
                    <h6>6. What is your primary investment objective?</h6>
                    <p><?php echo $riskSummary[5]; ?></p>
                  </div>
                  <div class="pt-2">
                    <h6>7. I would start to worry about my investments if my portfolio value falls</h6>
                    <p><?php echo $riskSummary[6]; ?></p>
                  </div>
                  <div class="pt-2">
                    <h6>8. In order to achieve high returns I am willing to choose high risk investments.</h6>
                    <p><?php echo $riskSummary[7]; ?></p>
                  </div>
                  <div class="pt-2">
                    <h6>9. What is your expected rate of return from your investments?</h6>
                    <p><?php echo $riskSummary[8]; ?></p>
                  </div>
                  <div class="pt-2">
                    <h6>10. You have Rs.10 lakh to invest at the start of the year. Below are the three hypothetical investment portfolio returns scenarios with likely best and worst-case annual returns. Which scenario would you prefer?</h6>
                    <p><?php echo $riskSummary[9]; ?></p>
                  </div>
                  <p class="text-center"><a href="risk-analyze.php">**update Risk Profile</a></p>
                </div>
              </div>
            </div>
            <!-- End Risk Summary -->
          </div>
        </div>
        <!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require_once('page/footer.php'); ?>
  <!-- End Footer -->

  <?php require_once('page/script.php'); ?>

</body>

</html>