<?php

namespace CryptoPrice\Service;

/**
 * Class Binance
 * @package CryptoPrice\Service
 */
class Binance extends ServiceAbstract implements ServiceInterface
{
    /**
     * @var array
     */
    private $data = [];

    /**
     * Binance constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->sendRequest('https://api.binance.com/api/v3/ticker/price', self::GET);

        foreach (json_decode($this->getBody()) as $item) {
            $this->data[$item->symbol] = $item->price;
        }
    }

    /**
     * @return mixed|void
     */
    public function getBitcoin()
    {
        return $this->data['BTCTUSD'];
    }

    /**
     * @return int|mixed
     */
    public function getEthereum()
    {
        return $this->data['ETHTUSD'];
    }

    /**
     * @return int|mixed
     */
    public function getRipple()
    {
        return $this->data['XRPTUSD'];
    }

    /**
     * @return int|mixed
     */
    public function getTether()
    {
        return $this->data['TUSDUSDT'];
    }
}