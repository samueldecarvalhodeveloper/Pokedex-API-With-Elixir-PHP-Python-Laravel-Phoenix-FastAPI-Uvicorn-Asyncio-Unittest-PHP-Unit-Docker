<?php

namespace App\Domains\HttpClient;

/**
 * @template T
 */
class ResponseEntity
{
    /**
     * @var T
     */
    private $body;

    /**
     * @param T $body
     */
    function __construct($body)
    {
        $this->body = $body;
    }

    /**
     * @return T
     */
    function getBody()
    {
        return $this->body;
    }
}
