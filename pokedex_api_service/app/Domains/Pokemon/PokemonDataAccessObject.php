<?php

namespace App\Domains\Pokemon;

use App\Domains\Pokemon\Infrastructure\Exception\NotExistingPokemonException;
use App\Domains\Pokemon\Infrastructure\PokemonSpecifications;

class PokemonDataAccessObject
{
    private function __construct() {}

    public static function getPokemonData(int $id): PokemonEntity
    {
        if (PokemonSpecifications::isPokemonIdAnIdOfAPokemonFromTheFirstGeneration($id)) {
            return PokemonDataLoadingAdapter::getListOfPokemonsData()[$id - 1];
        } else {
            throw new NotExistingPokemonException();
        }
    }

    /**
     * @return array<array<PokemonEntity>>
     */
    public static function getMatrixOfPokemonsData(): array
    {
        return PokemonDataLoadingAdapter::getMatrixOfPokemonsData();
    }
}
