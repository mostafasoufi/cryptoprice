<?php

namespace CryptoPrice\Tests;

use CryptoPrice\CryptoPrice;
use CryptoPrice\Service\Binance;
use PHPUnit\Framework\Constraint\IsType;
use PHPUnit\Framework\TestCase;

class BinanceTest extends TestCase
{
    public $binance;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->binance = new CryptoPrice(new Binance());
        $this->binance->setCrypto('Bitcoin');
    }

    public function testSymbol()
    {
        $this->assertEquals('BTCTUSD', $this->binance->getSymbol());
    }

    public function testUSDPrice()
    {
        $this->assertInternalType(IsType::TYPE_STRING, $this->binance->getUSDPrice());
    }

    public function testUSDPriceBYSymbol()
    {
        $this->assertInternalType(IsType::TYPE_STRING, $this->binance->getUSDPriceBYSymbol('BTCTUSD'));
    }
}
