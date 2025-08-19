<?php

namespace Tests\Domains\HttpClientTest;

use Tests\TestCase;
use App\Domains\HttpClient\HttpClient;
use App\Domains\HttpClient\ResponseEntity;
use App\Constants\Domains\PokemonConstants;
use App\Domains\Pokemon\PokemonDataTransferObject;

class HttpClientTest extends TestCase
{
    function testIfMethodGetRequestResponseMakesAHttpRequestAndReturnItsResponse()
    {
        /**
         * @var ResponseEntity<array<PokemonDataTransferObject>>
         */
        $response = HttpClient::getRequestResponse(PokemonConstants::STATIC_POKEMONS_DATA_URL);

        $this->assertNotNull($response->getBody());
    }
}
