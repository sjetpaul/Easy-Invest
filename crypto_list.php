<?php include('page/session.php'); ?>
<?php
require_once('inc/config.php');
   $search = ['btc', 'eth', 'usdt', 'bnb', 'usdc', 'xrp', 'sol', 'luna', 'ada', 'dot','avax','ust','doge','busd','shib','wbtc','near','steth','cro','matic',
              'dai','bluna','ltc','trx','atom','link','bch','ftt','leo','okb','ape','xmr','xlm','algo','etc','uni','vet','hbar','icp','fil',
              'axs','egld','sand','theta','mana','ceth','ftm','mim','cake','frax','xtz','klay','rune','grt','aave','eos','dfi','flow','kcs','cusdc',
              'zec','gmt','miota','waves','tfuel','osmo','fxs','hnt','xec','btt','xcn','zil','hbtc','mkr','cdai','bsv','cvx','neo','ksm','ht',
              'gala','qnt','ar','one','tusd','enj','nexo','celo','snx','xrd','stx','chz','lrc','bit','bat','dash','mina','amp','usdp','crv',
              'dome','gt','usdn','kava','cel','comp','dcr','ldo','kda','xem','hot','glmr','audio','cusdt','scrt','ln','rose','juno','omi','zrx',
              'iost','xdc','iotx','okt','nxm','msol','qtum','sushi','omg','lpt','yfi','anc','skl','slp','srm','paxg','gno','ankr','icx','1inch',
              'xido','elon','sxp','kub','btg','bnt','sapp','fei','pokt','cvxcrv','waxp','rvn','sc','rpl','knc','raca','astr','jst','aca',
              'xaut','lusd','ont','woo','ohm','rndr','renbtc','nft','dag','zen','ever','glm','dydx','sfm','imx','sgb','twt','uma','astro','looks',
              'poly','rly','chsb','nu','vlx','babydoge','plex','dgb','deso','ren','spell','hive','cspr','ceek','ilv','tomb','stsol','ckb','tel','vvs',
              'snx'];

$coin_json = file_get_contents('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=250&page=1&sparkline=false&price_change_percentage=24h&days=max&type=json&price_change_percentage=1h%2C%2024h%2C7d%2C30d%2C1y');

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
      <h1>Crypto Currency List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <!--<li class="breadcrumb-item">Search</li> -->
          <li class="breadcrumb-item active">Crypto Currency List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Today's Cryptocurrency Prices by Market Cap</h5>
              <p>The global cryptocurrency market cap today is $1.95 Trillion, a 0.2% change in the last 24 hours {Static Data}</p>

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
                    <th scope="col">24h Volume</th>
                    <th scope="col">Circulating Supply</th>
                    <th scope="col">Total Supply</th>
                 
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
                    <td><img src="<?php echo  $value["image"] ;?>" height="30" width="30"></td>     
                    <td><?php echo strtoupper($value["symbol"]);?></td>
                    <td><?php 
                     $curr_price= $value["current_price"];
                     if (!function_exists('number_format_short')) {
                     function number_format_short( $n, $precision = 2 ) {
                      if ($n < 1) {
                        // 0 - 900
                        $n_format = number_format($n, $precision = 6);
                        $suffix = '';
                      } else if ($n < 900) {
                          // 0 - 900
                          $n_format = number_format($n, $precision );
                          $suffix = '';
                      } else if ($n < 900000) {
                          // 0.9k-850k
                          $n_format = number_format($n , $precision);
                          $suffix = '';
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
                      if ( $precision > 0 ) {
                          $dotzero = ',' . str_repeat( '0', $precision );
                          $n_format = str_replace( $dotzero, '', $n_format );
                      }
                      return $n_format . $suffix;
                  }
                } 
                        echo "$".number_format_short($curr_price);
                       // echo "$".round($value["current_price"],8);
                    ?></td>
                    
                    <td><?php echo bcadd(0,$value["price_change_percentage_24h"],2)."%";?></td>
                    <td><?php echo bcadd(0,$value["price_change_percentage_7d_in_currency"],2)."%";?></td>
                    <td><?php echo round($value["price_change_percentage_30d_in_currency"],2)."%";?></td>
                    <td><?php echo bcadd(0,$value["price_change_percentage_1y_in_currency"],2)."%";?></td>
                    
                    <td><?php 
                         //php  market cap function start
                           $n= $value["market_cap"];
                           if (!function_exists('number_format_short')) {
                           function number_format_short( $n, $precision = 2 ) {
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
                            if ( $precision > 0 ) {
                                $dotzero = '.' . str_repeat( '0', $precision );
                                $n_format = str_replace( $dotzero, '', $n_format );
                            }
                            return $n_format . $suffix;
                        }
                      } 
                              echo "$".number_format_short($n);
                        
                         ?></td> 
                         <!--PHP market cap function END-->
                         <td><?php   $total_vol= $value["total_volume"];
                           if (!function_exists('number_format_short')) {
                           function number_format_short( $n, $precision = 2 ) {
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
                            if ( $precision > 0 ) {
                                $dotzero = '.' . str_repeat( '0', $precision );
                                $n_format = str_replace( $dotzero, '', $n_format );
                            }
                            return $n_format . $suffix;
                        }
                      } 
                              echo "$".number_format_short($total_vol);
                        ?></td> 
                        <td><?php 
                              $total_supply= $value["circulating_supply"];
                              if (!function_exists('number_format_short')) {
                              function number_format_short( $n, $precision = 2 ) {
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
                               } else if ($n < 900000000000000){
                                   // 0.9t+
                                   $n_format = number_format($n / 1000000000000, $precision);
                                   $suffix = 'T';
                               } else {
                                // 0.9t+
                                $n_format = number_format($n / 1000000000000000, $precision);
                                $suffix = 'Q';
                            }
                             // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
                             // Intentionally does not affect partials, eg "1.50" -> "1.50"
                               if ( $precision > 0 ) {
                                   $dotzero = '.' . str_repeat( '0', $precision );
                                   $n_format = str_replace( $dotzero, '', $n_format );
                               }
                               return $n_format . $suffix;
                           }
                         } 
                                 echo "$".number_format_short($total_supply);
                                 // echo $value["total_supply"];
                        ?></td>
                        <td><?php 
                              $max_supply= $value["total_supply"];
                              if (!function_exists('number_format_short')) {
                              function number_format_short( $n, $precision = 2 ) {
                               if ($n < 900) {
                                   // 0 - 900
                                   $n_format = number_format($n, $precision =0 );
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
                               } else if ($n < 900000000000000){
                                // 0.9t+
                                $n_format = number_format($n / 1000000000000, $precision);
                                $suffix = 'T';
                               } else {
                             // 0.9t+
                                 $n_format = number_format($n / 1000000000000000, $precision);
                                 $suffix = 'Q';
                              }
                             // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
                             // Intentionally does not affect partials, eg "1.50" -> "1.50"
                               if ( $precision > 0 ) {
                                   $dotzero = '.' . str_repeat( '0', $precision );
                                   $n_format = str_replace( $dotzero, '', $n_format );
                               }
                               return $n_format . $suffix;
                           }
                         } 
                                 echo "$".number_format_short($max_supply);
                                // echo $value["max_supply"];
                                 ?></td> 

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

 <!---  All responses from the API Key ! remember API Key has been modified
  {
        "id": "bitcoin",
        "symbol": "btc",
        "name": "Bitcoin",
        "image": "https://assets.coingecko.com/coins/images/1/large/bitcoin.png?1547033579",
        "current_price": 37282,
        "market_cap": 695279311602,
        "market_cap_rank": 1,
        "fully_diluted_valuation": 779474926827,
        "total_volume": 52300678011,
        "high_24h": 38849,
        "low_24h": 34846,
        "price_change_24h": 2176.11,
        "price_change_percentage_24h": 6.19871,
        "market_cap_change_24h": 40112069740,
        "market_cap_change_percentage_24h": 6.12242,
        "circulating_supply": 18731668.0,
        "total_supply": 21000000.0,
        "max_supply": 21000000.0,
        "ath": 64805,
        "ath_change_percentage": -42.55568,
        "ath_date": "2021-04-14T11:54:46.763Z",
        "atl": 67.81,
        "atl_change_percentage": 54799.24708,
        "atl_date": "2013-07-06T00:00:00.000Z",
        "roi": null,
        "last_updated": "2021-06-10T14:42:39.019Z",
        "price_change_percentage_24h_in_currency": 6.198713712795321
    },   ->