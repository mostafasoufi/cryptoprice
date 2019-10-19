<?php

include '../vendor/autoload.php';

use CryptoPrice\CryptoPrice;
use CryptoPrice\Service\Binance;
use CryptoPrice\Service\CoinMarketCap;

// Initial CryptoPrice class.
$Binance = new CryptoPrice(new Binance());

echo 'Binance Prices:' . PHP_EOL;
echo '<pre>' . print_r($Binance->getBitcoin(), 1) . '</pre>';
echo '<pre>' . print_r($Binance->getRipple(), 1) . '</pre>';
echo '<pre>' . print_r($Binance->getTether(), 1) . '</pre>';
echo '<pre>' . print_r($Binance->getEthereum(), 1) . '</pre>';

// Initial CryptoPrice class.
$CoinMarketCap = new CryptoPrice(new CoinMarketCap());

echo 'Coin Market Cap Prices:' . PHP_EOL;
echo '<pre>' . print_r($CoinMarketCap->getBitcoin(), 1) . '</pre>';
echo '<pre>' . print_r($CoinMarketCap->getRipple(), 1) . '</pre>';
echo '<pre>' . print_r($CoinMarketCap->getTether(), 1) . '</pre>';
echo '<pre>' . print_r($CoinMarketCap->getEthereum(), 1) . '</pre>';