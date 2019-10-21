# CryptoPrice
Getting easily cryptocurrency prices

## Features
- Simple to use
- Supporting Binance and Coin Market Cap
- Clean structure

## Installing

The recommended way to install CryptoPrice is through [Composer](http://getcomposer.org).

Run the Composer command to install the latest stable version:

```bash
composer require mostafasoufi/cryptoprice
```

After installing, you need to require Composer's autoloader:

```php
<?php
include '../vendor/autoload.php';

use CryptoPrice\CryptoPrice;
use CryptoPrice\Service\Binance;
use CryptoPrice\Service\CoinMarketCap;

// Initial CryptoPrice class.
$Binance = new CryptoPrice(new Binance());
$Binance->setCrypto('Bitcoin');

$CoinMarketCap = new CryptoPrice(new CoinMarketCap());
$CoinMarketCap->setCrypto('Bitcoin');
```

#### Available Methods

Getting symbol
```php
$Binance->getSymbol();
$CoinMarketCap->getSymbol();
```

Getting USD price
```php
$Binance->getUSDPrice();
$CoinMarketCap->getUSDPrice();
```

Getting USD price by symbol
```php
$Binance->getUSDPriceBYSymbol('BTCTUSD');
$CoinMarketCap->getUSDPriceBYSymbol('BTC');
```

## Running Tests

To run the unit tests, execute the following command:
```bash
vendor\bin\phpunit
```
