<?php

namespace App\Http\Middleware;

use App\Constants\ApplicationConstants;
use Tests\TestCase;

class AllowAllCrossOriginResourceSharingTest extends TestCase
{
    function testIfMiddlewareAddsAllowAllCrossOriginResourceSharingHeaderToAllApplicationRequests()
    {
        $response = $this->get(ApplicationConstants::INDEX_ROUTER);

        $response->assertHeader(ApplicationConstants::ACCESS_CONTROL_ALLOW_ORIGIN_HEADER_KEY, ApplicationConstants::ACCESS_CONTROL_ALLOW_ORIGIN_ALLOW_ALL);
    }
}
