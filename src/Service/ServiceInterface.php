<?php

namespace CryptoPrice\Service;

/**
 * Interface ServiceInterface
 * @package CryptoPrice\Service
 */
interface ServiceInterface
{
    /**
     * @param $currency
     * @return mixed
     */
    public function setCrypto($currency);

    /**
     * @return mixed
     */
    public function getSymbol();

    /**
     * @return mixed
     */
    public function getUSDPrice();

    /**
     * @param $symbol
     * @return mixed
     */
    public function getUSDPriceBYSymbol($symbol);
}