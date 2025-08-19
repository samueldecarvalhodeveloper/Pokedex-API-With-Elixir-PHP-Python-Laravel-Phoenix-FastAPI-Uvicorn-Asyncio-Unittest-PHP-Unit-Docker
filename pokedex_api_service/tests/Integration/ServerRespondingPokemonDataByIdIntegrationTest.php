<?php

use App\Constants\ApplicationConstants;
use App\Constants\Domains\PokemonConstants;
use App\Domains\Pokemon\PokemonEntity;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class ServerRespondingPokemonDataByIdIntegrationTest extends TestCase
{
    function testIfServerRespondsWantedPokemonDataToTheClient()
    {
        $requestResponse = $this->get(ApplicationConstants::INDEX_ROUTER . PokemonConstants::BULBASAUR_ID);

        $bulbasaurData =
            new PokemonEntity(
                PokemonConstants::BULBASAUR_ID,
                PokemonConstants::BULBASAUR_NAME,
                PokemonConstants::BULBASAUR_IMAGE,
                PokemonConstants::BULBASAUR_TYPES
            );

        $this->assertEquals($requestResponse->json(), (array) $bulbasaurData);

        $requestResponse->assertStatus(Response::HTTP_OK);
    }
}
