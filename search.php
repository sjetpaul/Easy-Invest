<?php include('page/session.php'); ?>
<?php
require_once('inc/config.php');

$search = array();
$myusername = $_SESSION['username'];
// User Risk Data will fetched from Database
$sql = "SELECT * FROM $tb_risk WHERE myusername = '$myusername'";
$res = mysqli_query($con, $sql);
if ($res) {
  $val = mysqli_fetch_assoc($res);
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
              <p>featured Crypto Data shown based on your Risk Profile</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                   
                    <th scope="col">Rank</th>
                    <th scope="col">Name</th>
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
                  foreach($search_coin as $key=>$value){
                  ?>
                  <tr>                
                    <td><?php echo $value["market_cap_rank"];?></td>
                    <th scope="row"><a href="coin-details.php?coin=<?php echo $value["symbol"];?>"><?php echo $value["name"];?></a></th>
                    <td><?php echo "$".$value["current_price"];?></td>
                    <td><?php echo $value["price_change_percentage_24h"];?></td>
                    <td><?php echo $value["price_change_percentage_7d_in_currency"];?></td>
                    <td><?php echo $value["price_change_percentage_30d_in_currency"];?></td>
                    <td><?php echo $value["price_change_percentage_1y_in_currency"];?></td>
                    <td><?php echo "$ ".$value["market_cap"];?></td> 
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
      </div>
    </section>

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php require_once('page/footer.php'); ?>
  <!-- End Footer -->

  <?php require_once('page/script.php'); ?>