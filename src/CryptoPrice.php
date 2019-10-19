<?php

namespace CryptoPrice;

use CryptoPrice\Service\ServiceInterface;

/**
 * Class CryptoPrice
 * @package CryptoPrice
 */
class CryptoPrice
{
    /**
     * @var ServiceInterface
     */
    private $service;

    /**
     * CryptoPrice constructor.
     * @param ServiceInterface $service
     */
    public function __construct(ServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @throws \Exception
     */
    public function __call($name, $arguments)
    {
        if (!method_exists($this->service, $name)) {
            throw new \Exception('Method is not available.');
        }

        return $this->service->$name();
    }
}