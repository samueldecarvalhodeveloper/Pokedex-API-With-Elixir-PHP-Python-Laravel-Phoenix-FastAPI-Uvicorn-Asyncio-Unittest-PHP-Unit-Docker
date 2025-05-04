<?php

use App\Constants\ApplicationConstants;
use App\Constants\Domains\PokemonConstants;
use App\Domains\Pokemon\PokemonEntity;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class ServerComponentTest extends TestCase
{
    function testFetchingPokemonData()
    {
        $indexRouterResponse = $this->get(ApplicationConstants::INDEX_ROUTER);
        $pokemonDetailsRouterResponse = $this->get(ApplicationConstants::INDEX_ROUTER . PokemonConstants::BULBASAUR_ID);

        $bulbasaurData =
            new PokemonEntity(
                PokemonConstants::BULBASAUR_ID,
                PokemonConstants::BULBASAUR_NAME,
                PokemonConstants::BULBASAUR_IMAGE,
                PokemonConstants::BULBASAUR_TYPES
            );

        $this->assertEquals($indexRouterResponse->json()[0][0], (array) $bulbasaurData);
        $this->assertEquals($pokemonDetailsRouterResponse->json(), (array) $bulbasaurData);

        $indexRouterResponse->assertStatus(Response::HTTP_OK);
        $pokemonDetailsRouterResponse->assertStatus(Response::HTTP_OK);
    }
}
