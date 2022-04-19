<?php
// session_start();

// if(!isset($_SESSION['id'])){

//   header('location:login.php');

// }

?>
<?php 
// User Risk Data will fetched from Database

//convert riskProfileStr String into array
// $riskSummary = explode('`',$riskProfileStr) ;
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
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-12">
          <div class="row">

            <!-- Risk Type -->
            <div class="col-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Risk Type</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Aggressive</h6>
                      <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- End Risk Type -->

            <!-- Suggestion Card -->
            <div class="col-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Suggestion</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>5</h6>
                      <span class="text-muted small pt-2 ps-1">Result for You</span>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- End Revenue Card -->

            <!-- Reports -->
            <!-- Risk Summary-->
            <div class="col-12">
              <div class="card">

                <div class="card-body">
                  <h5 class="card-title">Risk Summary</h5>

                  <div class="activity">

                    <div class="activity-item d-flex">
                      <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                      <div class="activite-label fw-bold"><?php echo $riskSummary[0]; ?></div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                      <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                      <div class="activite-label fw-bold"><?php echo $riskSummary[1]; ?></div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                      <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                      <div class="activite-label fw-bold"><?php echo $riskSummary[2]; ?></div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                      <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                      <div class="activite-label fw-bold"> <?php echo $riskSummary[3]; ?></div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                      <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                      <div class="activite-label fw-bold"><?php echo $riskSummary[4]; ?></div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                      <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                      <div class="activite-label fw-bold"><?php echo $riskSummary[5]; ?></div>
                    </div><!-- End activity item-->
                    <div class="activity-item d-flex">
                      <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                      <div class="activite-label fw-bold"><?php echo $riskSummary[6]; ?></div>
                    </div><!-- End activity item-->
                    <div class="activity-item d-flex">
                      <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                      <div class="activite-label fw-bold"><?php echo $riskSummary[7]; ?></div>
                    </div><!-- End activity item-->
                    <div class="activity-item d-flex">
                      <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                      <div class="activite-label fw-bold"><?php echo $riskSummary[8]; ?></div>
                    </div><!-- End activity item-->
                    <div class="activity-item d-flex">
                      <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                      <div class="activite-label fw-bold text-wrap"><?php echo $riskSummary[9]; ?></div>
                    </div><!-- End activity item-->

                  </div>

                </div>
              </div>
            </div>
            <!-- End Risk Summary -->
          </div>
        </div>
        <!-- End Left side columns -->
        <!-- show Every Suggest coin in Bar  -->
        <div class="col-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Radial Bar Chart</h5>

              <!-- Radial Bar Chart -->
              <div id="radialBarChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#radialBarChart"), {
                    series: [44, 55, 67, 83],
                    chart: {
                      height: 350,
                      type: 'radialBar',
                      toolbar: {
                        show: true
                      }
                    },
                    plotOptions: {
                      radialBar: {
                        dataLabels: {
                          name: {
                            fontSize: '22px',
                          },
                          value: {
                            fontSize: '16px',
                          },
                          total: {
                            show: true,
                            label: 'Total',
                            formatter: function(w) {
                              // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                              return 249
                            }
                          }
                        }
                      }
                    },
                    labels: ['Apples', 'Oranges', 'Bananas', 'Berries'],
                  }).render();
                });
              </script>
              <!-- End Radial Bar Chart -->

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

</body>

</html>