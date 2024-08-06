<?php

namespace App\Domains\Pokemon;

use App\Domains\Pokemon\Infrastructure\Exception\NotExistingPokemonException;

class PokemonDataAccessObject
{
    private function __construct()
    {
    }

    public static function getPokemonData(int $id): PokemonEntity
    {
        $listOfPokemonData = PokemonDataLoadingAdapter::getListOfPokemonsData();

        $firstPokemonFromTheList = 0;
        $lastPokemonFromTheList = count($listOfPokemonData) - 1;

        while ($firstPokemonFromTheList <= $lastPokemonFromTheList) {
            $pokemonFromTheMiddleOfTheList = floor(($firstPokemonFromTheList + $lastPokemonFromTheList) / 2);
            $pokemonFromTheMiddleOfTheListValue = $listOfPokemonData[$pokemonFromTheMiddleOfTheList]->id;

            if ($pokemonFromTheMiddleOfTheListValue === $id) {
                return $listOfPokemonData[$pokemonFromTheMiddleOfTheList];
            } elseif ($pokemonFromTheMiddleOfTheListValue < $id) {
                $firstPokemonFromTheList = $pokemonFromTheMiddleOfTheList + 1;
            } else {
                $lastPokemonFromTheList = $pokemonFromTheMiddleOfTheList - 1;
            }
        }

        throw new NotExistingPokemonException();
    }

    /**
     * @return array<array<PokemonEntity>>
     */
    public static function getMatrixOfPokemonsData(): array
    {
        return PokemonDataLoadingAdapter::getMatrixOfPokemonsData();
    }
}
