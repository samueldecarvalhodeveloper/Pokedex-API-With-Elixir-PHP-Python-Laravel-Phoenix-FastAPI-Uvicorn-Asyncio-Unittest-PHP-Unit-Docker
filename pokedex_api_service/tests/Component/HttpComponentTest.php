<?php

use App\Constants\Domains\PokemonConstants;
use App\Domains\HttpClient\HttpClient;
use App\Domains\HttpClient\ResponseEntity;
use App\Domains\Pokemon\PokemonDataTransferObject;
use Tests\TestCase;

class HttpComponentTest extends TestCase
{
    function testGettingHttpRequestResponse()
    {
        /**
         * @var ResponseEntity<array<PokemonDataTransferObject>>
         */
        $response = HttpClient::getRequestResponse(PokemonConstants::STATIC_POKEMONS_DATA_URL);

        $this->assertNotNull($response->getBody());
    }
}
