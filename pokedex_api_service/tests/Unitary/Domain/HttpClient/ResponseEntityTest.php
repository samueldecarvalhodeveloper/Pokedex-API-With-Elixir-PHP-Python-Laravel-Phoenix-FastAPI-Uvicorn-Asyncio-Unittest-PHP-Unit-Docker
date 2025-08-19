<?php

namespace Tests\Domains\HttpClientTest;

use Tests\TestCase;
use App\Domains\HttpClient\ResponseEntity;
use App\Constants\ApplicationConstants;

class ResponseEntityTest extends TestCase
{
    function testIfEntityDescribesHowResponseShouldBeUsedByTheClientCode()
    {
        $response = new ResponseEntity(ApplicationConstants::ANY_JSON_RESPONSE);

        $responseBody = $response->getBody();

        $this->assertEquals(ApplicationConstants::ANY_JSON_RESPONSE, $responseBody);
    }
}
