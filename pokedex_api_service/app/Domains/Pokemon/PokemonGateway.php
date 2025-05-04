<?php

namespace App\Domains\Pokemon;

use App\Constants\Domains\PokemonConstants;
use App\Domains\HttpClient\HttpClient;

class PokemonGateway
{
    private function __construct()
    {
    }

    /**
     * @return PokemonDataTransferObject[]
     */
    public static function getListOfPokemonDataTransferObjects(): array
    {
        return HttpClient::getRequestResponse(PokemonConstants::STATIC_POKEMONS_DATA_URL)->getBody();
    }
}
