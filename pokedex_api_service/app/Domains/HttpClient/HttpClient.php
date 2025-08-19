<?php

namespace App\Domains\HttpClient;

use GuzzleHttp\Client;
use App\Constants\ApplicationConstants;
use App\Domains\HttpClient\ResponseEntity;
use App\Domains\HttpClient\ResponseEntityFactory;

/**
 * @template T
 */
class HttpClient
{
    private function __constructor()
    {
    }

    /**
     * @return ResponseEntity<T>
     */
    public static function getRequestResponse($url): ResponseEntity
    {
        $httpClient = new Client();

        $serverRequestResponse = $httpClient->request(ApplicationConstants::HTTP_GET_METHOD, $url);

        $serverRequestResponseBody = json_decode($serverRequestResponse->getBody()->getContents());

        return ResponseEntityFactory::getInstance($serverRequestResponseBody);
    }
}
