<?php

namespace App\Domains\HttpClient;

use App\Domains\HttpClient\ResponseEntity;

class ResponseEntityFactory
{
    private function __construct()
    {
    }

    /**
     * @param T $body
     */
    public static function getInstance($body): ResponseEntity
    {
        return new ResponseEntity($body);
    }
}
