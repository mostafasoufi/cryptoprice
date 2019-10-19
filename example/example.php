<?php

include '../vendor/autoload.php';

use CryptoPrice\CryptoPrice;
use CryptoPrice\Service\Binance;

$service = new CryptoPrice(new Binance());

echo '<pre>'.print_r($service->getBitcoin(), 1).'</pre>';
echo '<pre>'.print_r($service->getRipple(), 1).'</pre>';
echo '<pre>'.print_r($service->getTether(), 1).'</pre>';
echo '<pre>'.print_r($service->getEthereum(), 1).'</pre>';