<?php

namespace CryptoPrice\Service;

/**
 * Interface ServiceInterface
 * @package CryptoPrice\Service
 */
interface ServiceInterface
{
    /**
     * @return mixed
     */
    public function getBitcoin();

    /**
     * @return mixed
     */
    public function getEthereum();

    /**
     * @return mixed
     */
    public function getRipple();

    /**
     * @return mixed
     */
    public function getTether();
}