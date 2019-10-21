<?php

namespace CryptoPrice\Tests;

use CryptoPrice\CryptoPrice;
use CryptoPrice\Service\Binance;
use CryptoPrice\Service\CoinMarketCap;
use PHPUnit\Framework\TestCase;

class CryptoPriceTest extends TestCase
{
    public function testInstanceBinance()
    {
        $instance = new CryptoPrice(new Binance());
        $this->assertInstanceOf(CryptoPrice::class, $instance);
    }

    public function testInstanceOfCoinMarketCap()
    {
        $instance = new CryptoPrice(new CoinMarketCap());
        $this->assertInstanceOf(CryptoPrice::class, $instance);
    }
}
