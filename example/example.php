<?php

include '../vendor/autoload.php';

use CryptoPrice\CryptoPrice;
use CryptoPrice\Service\Binance;
use CryptoPrice\Service\CoinMarketCap;

// Initial CryptoPrice class.
$Binance = new CryptoPrice(new Binance());

echo 'Binance Prices:' . PHP_EOL;
echo '<pre>'.print_r($Binance->setCrypto('Bitcoin')->getSymbol(), 1).'</pre>';
echo '<pre>'.print_r($Binance->setCrypto('Bitcoin')->getUSDPrice(), 1).'</pre>';
echo '<pre>'.print_r($Binance->getUSDPriceBYSymbol('ETHBTC'), 1).'</pre>';