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
      <h1>Search</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Search</li>
          <li class="breadcrumb-item active">Featured</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Featured Result</h5>
              <p>featured Crypto Data showd based on your Risk Profile</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Mkt Cap</th>
                    <th scope="col">CHG%</th>
                    <th scope="col">1W CHG%</th>
                    <th scope="col">1M CHG%</th>
                    <th scope="col">3-Month PERF</th>
                    <th scope="col">6-MONTH PERF</th>
                    <th scope="col">YTD PERF</th>
                    <th scope="col">YEARLY PERF</th>
                    <th scope="col">VOLATILITY</th>
                  </tr>
                </thead>
                <tbody>
                    <!-- render tr -->
                  <tr>
                    <th scope="row"><a href="#">Bitcoin</a></th>
                    <td>785.861B</td>
                    <td>0.41%</td>
                    <td>-1.94%</td>
                    <td>-9.23%</td>
                    <td>-4.14%</td>
                    <td>-32.12%</td>
                    <td>-10.60%</td>
                    <td>-34.67%</td>
                    <td>-1.08%</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

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