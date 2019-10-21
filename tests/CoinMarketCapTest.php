<?php

namespace CryptoPrice\Tests;

use CryptoPrice\CryptoPrice;
use CryptoPrice\Service\CoinMarketCap;
use PHPUnit\Framework\Constraint\IsType;
use PHPUnit\Framework\TestCase;

class CoinMarketCapTest extends TestCase
{
    public $coinparmetcap;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->coinparmetcap = new CryptoPrice(new CoinMarketCap());
        $this->coinparmetcap->setCrypto('Bitcoin');
    }

    public function testSymbol()
    {
        $this->assertEquals('BTC', $this->coinparmetcap->getSymbol());
    }

    public function testUSDPrice()
    {
        $this->assertInternalType(IsType::TYPE_STRING, $this->coinparmetcap->getUSDPrice());
    }

    public function testUSDPriceBYSymbol()
    {
        $this->assertInternalType(IsType::TYPE_STRING, $this->coinparmetcap->getUSDPriceBYSymbol('BTC'));
    }
}
