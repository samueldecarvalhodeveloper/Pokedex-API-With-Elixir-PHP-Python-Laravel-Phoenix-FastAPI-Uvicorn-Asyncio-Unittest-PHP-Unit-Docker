<?php

namespace App\Http\Controllers;

use App\Constants\ApplicationConstants;
use App\Domains\Pokemon\Infrastructure\PokemonSpecifications;
use App\Domains\Pokemon\PokemonEntity;
use App\Domains\Pokemon\PokemonRepository;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class PokemonController extends Controller
{
    /**
     * @return array<array<PokemonEntity>>
     */
    public function index()
    {
        $matrixOfPokemonsData = PokemonRepository::getAllPokemons();

        return response()->json($matrixOfPokemonsData, Response::HTTP_OK);
    }

    public function show(?string $id)
    {
        if (is_numeric($id) || !PokemonSpecifications::isPokemonIdAnIdOfAPokemonFromTheFirstGeneration($id)) {
            $wantedPokemon = PokemonRepository::getPokemon((int) $id);

            return response()->json($wantedPokemon, Response::HTTP_OK);
        } else {
            return response()->json(ApplicationConstants::NOT_FOUND_JSON_RESPONSE, Response::HTTP_NOT_FOUND);
        }
    }
}
