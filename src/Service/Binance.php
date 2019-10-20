<?php

namespace CryptoPrice\Service;

use CryptoPrice\Symbol\Binance as BinanceSymbol;
use Exception;

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

    /***
     * @var string
     */
    private $currency;

    /***
     * @var string
     */
    private $symbol;

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
     * @param $currency
     * @return $this
     * @throws Exception
     */
    public function setCrypto($currency)
    {
        $this->currency = strtolower($currency);

        // Set symbol.
        if (null == $this->symbol = BinanceSymbol::get($this->currency)) {
            throw new Exception('Symbol is not valid.');
        }
        
        return $this;
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @return mixed
     */
    public function getUSDPrice()
    {
        return $this->data[$this->symbol];
    }

    /**
     * @param $symbol
     * @return mixed
     * @throws Exception
     */
    public function getUSDPriceBYSymbol($symbol)
    {
        if (empty($this->data[$symbol])) {
            throw new Exception('Symbol is not valid.');
        }

        return $this->data[$symbol];
    }
}