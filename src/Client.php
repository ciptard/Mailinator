<?php namespace Brnlbs\Mailinator;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\RequestException;

/**
 * Class Client
 * @package Brnlbs\Mailinator
 */
class Client
{

    /**
     * @var string
     */
    private $baseUrl = 'https://api.mailinator.com/api/';

    /**
     * @var string
     */
    private $userAgent = 'Mailinator/1.0.0';

    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->httpClient = new HttpClient([
            'base_url' => $this->baseUrl,
            'defaults' => [
                'headers' => ['User-Agent' => $this->userAgent],
            ]
        ]);
    }

    /**
     * @param $method
     * @param array $params
     * @throws Exception
     */
    protected function get($method, $params = [])
    {
        try {
            $params['token'] = $this->apiKey;
            return $this->client->get($this->baseUrl . $method, ['query' => $params])->json(['object' => true]);
        } catch (RequestException $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

}
