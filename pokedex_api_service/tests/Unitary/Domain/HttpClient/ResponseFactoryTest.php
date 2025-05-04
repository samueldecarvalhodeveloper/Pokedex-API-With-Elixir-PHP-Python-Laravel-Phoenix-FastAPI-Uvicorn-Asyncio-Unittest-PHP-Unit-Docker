<?php

namespace Tests\Domains\HttpClientTest;

use Tests\TestCase;
use App\Constants\ApplicationConstants;
use App\Domains\HttpClient\ResponseEntityFactory;

class ResponseFactoryTest extends TestCase
{
    function testIfMethodGetInstanceReturnsAWorkingInstance()
    {
        $response = ResponseEntityFactory::getInstance(ApplicationConstants::ANY_JSON_RESPONSE);

        $responseBody = $response->getBody();

        $this->assertEquals(ApplicationConstants::ANY_JSON_RESPONSE, $responseBody);
    }
}
