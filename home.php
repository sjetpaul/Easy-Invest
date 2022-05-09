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
  $riskStatus = $val['risk_status'];
}
switch ($riskStatus) {
  case 1:
    $search = ['usdt', 'usdc', 'ust', 'busd', 'dai', 'tusd', 'usdn', 'usdp', 'fei', 'frax'];
    break;
  case 2:
    $search = ['shib', 'trx', 'vet', 'btt', 'xec', 'zil', 'hot', 'iotx', 'rvn', 'sc'];
    break;
  case 3:
    $search = ['matic', 'stx', 'ftm', 'enj', 'mana', 'crv', 'mina', 'sand', 'celo', 'theta'];
    break;
  case 4:
    $search = ['ape', 'uma', 'dydx', 'fil', 'waves', 'etc', 'cake', 'uni', 'atom', 'hnt'];
    break;
  case 5:
    $search = ['btc', 'eth', 'bnb', 'wbtc', 'yfi', 'renbtc', 'mkr', 'sol', 'luna', 'xmr'];
    break;
  default:
    $search = ['btc', 'eth', 'bnb', 'sol'];
}
$coin_json = file_get_contents('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=250&page=1&sparkline=false&price_change_percentage=1h%2C%2024h%2C7d%2C30d%2C1y');

$coin_data = json_decode($coin_json, true);

$coin = array();
$search_coin=array();
foreach ($coin_data as $key1 => $value1) {
  foreach ($value1 as $key2 => $value2) {
    foreach ($search as $symbol) {
      if ($key2 == "symbol" && $value2 == $symbol) {
        foreach ($value1 as $key => $value) {
          $coin[$key] = $value;
        }
       array_push($search_coin,$coin); 
      }
    }
  }
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
                      <a href="#riskSummary"><h6><?php echo $val['risk_str']; ?></h6></a>
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
                      <a href="#suggest"><h6>10</h6></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- End Revenue Card -->

            <!-- Reports -->
            <div class="col-lg-12">

              <div class="card">
                <div class="card-body" id="suggest">
                  <h5 class="card-title">Suggested Result</h5>
                  <p>Suggested Crypto Data shown based on your Risk Profile</p>

                  <!-- Table with stripped rows -->
                  <table class="table datatable">
                    <thead>
                      <tr>

                        <th scope="col">Rank</th>
                        <th scope="col">Name</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Code</th>
                        <th scope="col">Price</th>
                        <th scope="col">24h%</th>
                        <th scope="col">7d%</th>
                        <th scope="col">30d%</th>
                        <th scope="col">1Y%</th>
                        <th scope="col">Market Cap</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- render tr -->
                      <?php
                      foreach ($search_coin as $key => $value) {
                      ?>
                        <tr>
                          <td><?php echo $value["market_cap_rank"]; ?></td>
                          <th scope="row"><a href="coin-details.php?coin=<?php echo $value["symbol"]; ?>"><?php echo $value["name"]; ?></a></th>
                          <td><img src="<?php echo  $value["image"]; ?>" height="30" width="30"></td>
                          <td><?php echo strtoupper($value["symbol"]); ?></td>
                          <td><?php echo "$" . $value["current_price"]; ?></td>
                          <td><?php echo bcadd(0, $value["price_change_percentage_24h"], 2) . "%"; ?></td>
                          <td><?php echo bcadd(0, $value["price_change_percentage_7d_in_currency"], 2) . "%"; ?></td>
                          <td><?php echo bcadd(0, $value["price_change_percentage_30d_in_currency"], 2) . "%"; ?></td>
                          <td><?php echo bcadd(0, $value["price_change_percentage_1y_in_currency"], 2) . "%"; ?></td>
                          <td><?php
                              //php  market cap function start
                              $n = $value["market_cap"];
                              if (!function_exists('number_format_short')) {
                                function number_format_short($n, $precision = 2)
                                {
                                  if ($n < 900) {
                                    // 0 - 900
                                    $n_format = number_format($n, $precision);
                                    $suffix = '';
                                  } else if ($n < 900000) {
                                    // 0.9k-850k
                                    $n_format = number_format($n / 1000, $precision);
                                    $suffix = 'K';
                                  } else if ($n < 900000000) {
                                    // 0.9m-850m
                                    $n_format = number_format($n / 1000000, $precision);
                                    $suffix = 'M';
                                  } else if ($n < 900000000000) {
                                    // 0.9b-850b
                                    $n_format = number_format($n / 1000000000, $precision);
                                    $suffix = 'B';
                                  } else {
                                    // 0.9t+
                                    $n_format = number_format($n / 1000000000000, $precision);
                                    $suffix = 'T';
                                  }
                                  // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
                                  // Intentionally does not affect partials, eg "1.50" -> "1.50"
                                  if ($precision > 0) {
                                    $dotzero = '.' . str_repeat('0', $precision);
                                    $n_format = str_replace($dotzero, '', $n_format);
                                  }
                                  return $n_format . $suffix;
                                }
                              }
                              echo "$ " . number_format_short($n);

                              ?></td>
                          <!--PHP market cap function END-->
                        </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                  <!-- End Table with stripped rows -->

                </div>
              </div>

            </div>
            <!-- Risk Summary-->
            <div class="col-lg-12">
              <div class="card basic">
                <div class="card-body" id="riskSummary">
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