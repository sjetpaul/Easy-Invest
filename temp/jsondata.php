<?php
$json = file_get_contents('https://api.coingecko.com/api/v3/coins/markets?vs_currency=gbp&order=market_cap_desc&per_page=100&page=1&sparkline=false&price_change_percentage=1h%2C%2024h%2C7d%2C30d%2C1y');

$data = json_decode($json, true);

$coin = array();
foreach ($data as $key1 => $value1) {
    foreach($value1 as $key2 => $value2){
        if($key2=="symbol" && $value2=="btc"){
            foreach($value1 as $key => $value){
                $coin[$key]=$value;
            }
        break;
        }
    }
}
echo var_dump($coin);

?>