<?php

namespace App\Http\Controllers;

use App\Constants\ApplicationConstants;
use App\Constants\Domains\PokemonConstants;
use App\Domains\Pokemon\PokemonEntity;
use Tests\TestCase;
use Symfony\Component\HttpFoundation\Response;

class PokemonControllerTest extends TestCase
{
    function testIfMethodIndexRespondsPaginatedMatrixOfAllPokemons()
    {
        $requestResponse = $this->get(ApplicationConstants::INDEX_ROUTER);

        $bulbasaurData =
            new PokemonEntity(
                PokemonConstants::BULBASAUR_ID,
                PokemonConstants::BULBASAUR_NAME,
                PokemonConstants::BULBASAUR_IMAGE,
                PokemonConstants::BULBASAUR_TYPES
            );

        $this->assertEquals($requestResponse->json()[0][0], (array) $bulbasaurData);

        $requestResponse->assertStatus(Response::HTTP_OK);
    }

    function testIfMethodShowRespondsWantedPokemonData()
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

    function testIfMethodShowRespondsNotFoundPageIfWantedPokemonDoesNotExistOrIdIsNotANumericValue()
    {
        $requestResponse = $this->get(ApplicationConstants::INDEX_ROUTER . PokemonConstants::BULBASAUR_NAME);

        $requestResponse->assertStatus(Response::HTTP_NOT_FOUND);
    }
}
