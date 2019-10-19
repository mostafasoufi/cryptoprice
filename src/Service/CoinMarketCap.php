<?php

namespace CryptoPrice\Service;

/**
 * Class CoinMarketCap
 * @package CryptoPrice\Service
 */
class CoinMarketCap extends ServiceAbstract implements ServiceInterface
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

        $this->sendRequest('https://api.coinmarketcap.com/v1/ticker/', self::GET);

        foreach (json_decode($this->getBody()) as $item) {
            $this->data[$item->symbol] = $item->price_usd;
        }
    }

    /**
     * @return mixed|void
     */
    public function getBitcoin()
    {
        return $this->data['BTC'];
    }

    /**
     * @return int|mixed
     */
    public function getEthereum()
    {
        return $this->data['ETH'];
    }

    /**
     * @return int|mixed
     */
    public function getRipple()
    {
        return $this->data['XRP'];
    }

    /**
     * @return int|mixed
     */
    public function getTether()
    {
        return $this->data['USDT'];
    }
}