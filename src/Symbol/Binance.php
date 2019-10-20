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
            'ripple' => 'XRP',
        ];

        return isset($symbols[$symbol]) ? $symbols[$symbol] : null;
    }
}