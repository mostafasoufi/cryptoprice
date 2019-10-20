<?php

namespace CryptoPrice\Symbol;

/**
 * Class Binance
 * @package CryptoPrice\Symbol
 */
class Binance
{
    /**
     * @param $symbol
     * @return array
     */
    public static function get($symbol)
    {
        $symbols = [
            'bitcoin' => 'BTCTUSD',
            'ethereum' => 'ETHTUSD',
            'ripple' => 'XRPTUSD',
            'tether' => 'TUSDUSDT',
            // TODO should be complete from https://api.binance.com/api/v3/ticker/price
        ];

        return isset($symbols[$symbol]) ? $symbols[$symbol] : null;
    }
}