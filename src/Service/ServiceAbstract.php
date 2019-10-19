<?php

namespace CryptoPrice\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class ServiceAbstract
 * @package CryptoPrice\Service
 */
abstract class ServiceAbstract
{
    /**
     * @var Client
     */
    private $client;

    const GET = 'GET';
    const POST = 'POST';

    /**
     * ServiceAbstract constructor.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @param $url
     * @param $method
     * @return Client
     * @throws GuzzleException
     */
    public function sendRequest($url, $method = self::GET)
    {
        $this->client = $this->client->request($method, $url);

        return $this->client;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->client->getBody()->getContents();
    }
}