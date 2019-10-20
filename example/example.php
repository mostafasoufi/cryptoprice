<?php

include '../vendor/autoload.php';

use CryptoPrice\CryptoPrice;
use CryptoPrice\Service\Binance;
use CryptoPrice\Service\CoinMarketCap;

// Initial CryptoPrice class.
$Binance = new CryptoPrice(new Binance());
$Binance->setCrypto('Bitcoin');

echo '<b>Binance</b><br>';
echo 'Get Symbol: ' . $Binance->getSymbol() . '<br>';
echo 'Get USD Price: ' . $Binance->getUSDPrice() . '<br>';
echo 'Get USD Price by Symbol: ' . $Binance->getUSDPriceBYSymbol('BTCTUSD') . '<br>';

// Initial CryptoPrice class.
$CoinMarketCap = new CryptoPrice(new CoinMarketCap());
$CoinMarketCap->setCrypto('Bitcoin');

echo '<b>Coin Market Cap</b><br>';
echo 'Get Symbol: ' . $CoinMarketCap->getSymbol() . '<br>';
echo 'Get USD Price: ' . $CoinMarketCap->getUSDPrice() . '<br>';
echo 'Get USD Price by Symbol: ' . $CoinMarketCap->getUSDPriceBYSymbol('BTC') . '<br>';