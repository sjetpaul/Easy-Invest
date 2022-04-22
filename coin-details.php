<?php include('page/session.php'); ?>
<?php
// API Calling
// Crypto Data 

// ./coin-details.php?coin=btc, symbol of crypto coin
if (!empty($_GET['coin'])) {
  $coin_json = file_get_contents('https://api.coingecko.com/api/v3/coins/markets?vs_currency=gbp&order=market_cap_desc&per_page=250&page=1&sparkline=false&price_change_percentage=1h%2C%2024h%2C7d%2C30d%2C1y');

  $coin_data = json_decode($coin_json, true);

  $coin = array();
  foreach ($coin_data as $key1 => $value1) {
    foreach ($value1 as $key2 => $value2) {
      if ($key2 == "symbol" && $value2 == $_GET['coin']) {
        foreach ($value1 as $key => $value) {
          $coin[$key] = $value;
        }
        break;
      }
    }
  }
  // Back to Search Page if Coin Symbol not mathced
  if (empty($coin)) {
    header("location:search.php");
  }
} else {
  // Back to Search Page if coin value Empty
  header("location:search.php");
}

// Chart Data

$symbol = strtoupper($coin['symbol']);
$api_key = "HGJVKQ3LVWIXR4X1";
// https://www.alphavantage.co/query?function=DIGITAL_CURRENCY_MONTHLY&symbol=BTC&market=USD&apikey=HGJVKQ3LVWIXR4X1"
$url = "https://www.alphavantage.co/query?function=DIGITAL_CURRENCY_MONTHLY&symbol=" . $symbol . "&market=USD&apikey=" . $api_key;
$chart_json = file_get_contents($url);
// $chart_json = file_get_contents('temp/data.php');

$chart_data = json_decode($chart_json, true);

//Reshape the Array to Workable Format ['date','open','close','lowest','highest','-']
$dataSet = array();
function arrayToDataset($value)
{
  global $dataSet;
  $i = 0;
  foreach ($value as $key => $value) {
    $dataSet[$i][0] = $key;
    foreach ($value as $key => $value) {
      if ($key == "1b. open (USD)")
        $dataSet[$i][1] = $value;
      if ($key == "4b. close (USD)")
        $dataSet[$i][2] = $value;
      if ($key == "3b. low (USD)")
        $dataSet[$i][3] = $value;
      if ($key == "2b. high (USD)")
        $dataSet[$i][4] = $value;
    }
    $dataSet[$i][5] = "-";
    $i++;
  }
}
foreach ($chart_data as $key => $value) {
  if ($key == "Time Series (Digital Currency Monthly)") {
    arrayToDataset($value);
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
      <h1><?php echo $coin['name']; ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Search</li>
          <li class="breadcrumb-item active">Coin Details</li>
          <li class="breadcrumb-item active"><?php echo $coin['id']; ?></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><img src="<?php echo $coin['image']; ?>" alt="<?php echo $coin['id']; ?>" width="40px" height="40px"> <?php echo $coin['name']; ?> Chart</h5>

              <!-- Chart -->
              <div id="chart" style="min-height: 400px;" class="echart"></div>
              <!-- Script to display the chart -->
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var json = <?php echo json_encode($dataSet); ?>;
                  const rawData = Object.values(json);
                  rawData.reverse();
                  console.log(rawData);

                  function calculateMA(dayCount, data) {
                    var result = [];
                    for (var i = 0, len = data.length; i < len; i++) {
                      if (i < dayCount) {
                        result.push('-');
                        continue;
                      }
                      var sum = 0;
                      for (var j = 0; j < dayCount; j++) {
                        sum += +data[i - j][1];
                      }
                      result.push(sum / dayCount);
                    }
                    return result;
                  }
                  const dates = rawData.map(function(item) {
                    return item[0];
                  });
                  const data = rawData.map(function(item) {
                    return [+item[1], +item[2], +item[3], +item[4]];
                  });
                  echarts.init(document.querySelector("#chart")).setOption({
                    legend: {
                      data: ['日K'],
                      inactiveColor: '#777'
                    },
                    tooltip: {
                      trigger: 'axis',
                      axisPointer: {
                        animation: false,
                        type: 'cross',
                        lineStyle: {
                          color: '#376df4',
                          width: 2,
                          opacity: 1
                        }
                      }
                    },
                    xAxis: {
                      type: 'category',
                      data: dates,
                      axisLine: {
                        lineStyle: {
                          color: '#8392A5'
                        }
                      }
                    },
                    yAxis: {
                      scale: true,
                      axisLine: {
                        lineStyle: {
                          color: '#8392A5'
                        }
                      },
                      splitLine: {
                        show: false
                      }
                    },
                    grid: {
                      bottom: 80
                    },
                    dataZoom: [{
                        textStyle: {
                          color: '#8392A5'
                        },
                        handleIcon: 'path://M10.7,11.9v-1.3H9.3v1.3c-4.9,0.3-8.8,4.4-8.8,9.4c0,5,3.9,9.1,8.8,9.4v1.3h1.3v-1.3c4.9-0.3,8.8-4.4,8.8-9.4C19.5,16.3,15.6,12.2,10.7,11.9z M13.3,24.4H6.7V23h6.6V24.4z M13.3,19.6H6.7v-1.4h6.6V19.6z',
                        dataBackground: {
                          areaStyle: {
                            color: '#8392A5'
                          },
                          lineStyle: {
                            opacity: 0.8,
                            color: '#8392A5'
                          }
                        },
                        brushSelect: true
                      },
                      {
                        type: 'inside'
                      }
                    ],
                    series: [{
                        type: 'candlestick',
                        name: 'Day',
                        data: data,
                        itemStyle: {
                          color: '#0CF49B',
                          color0: '#FD1050',
                          borderColor: '#0CF49B',
                          borderColor0: '#FD1050'
                        }
                      },
                      // {
                      //   name: 'MA9',
                      //   type: 'line',
                      //   data: calculateMA(9, data),
                      //   smooth: true,
                      //   showSymbol: false,
                      //   lineStyle: {
                      //     width: 1
                      //   }
                      // }
                    ]
                  })
                })
              </script>
              <!-- End Chart -->

            </div>
          </div>

        </div>
      </div>
      <div class="col-lg-12">
        <div class="row">

          <!-- Price Card -->
          <div class="col-6">
            <div class="card info-card sales-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Price <span>| Today</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-currency-dollar"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?php echo $coin['current_price']; ?></h6>
                    <span class="<?php echo ($coin['price_change_percentage_24h']>0)?"text-success":"text-danger";?> small pt-1 fw-bold"><?php echo $coin['price_change_percentage_24h']; ?>%</span> <span class="text-muted small pt-2 ps-1"><?php echo ($coin['price_change_percentage_24h']>0)?"increase":"decrease";?></span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <!-- Market Cap Card -->
          <div class="col-6">
            <div class="card info-card revenue-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Market Cap <span>| Today</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bx bx-money"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?php echo $coin['market_cap']; ?></h6>
                    <span class="<?php echo ($coin['market_cap_change_percentage_24h']>0)?"text-success":"text-danger";?> small pt-1 fw-bold"><?php echo $coin['market_cap_change_percentage_24h']; ?>%</span> <span class="text-muted small pt-2 ps-1"><?php echo ($coin['price_change_percentage_24h']>0)?"increase":"decrease";?></span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->

          <!-- Customers Card -->
          <!-- <div class="col-xxl-4 col-xl-4">

            <div class="card info-card customers-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Volume <span>| This Year</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6></h6>
                    <span class=" small pt-1 fw-bold">%</span> <span class="text-muted small pt-2 ps-1"></span>

                  </div>
                </div>

              </div>
            </div>

          </div> -->
          <!-- End Customers Card -->

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