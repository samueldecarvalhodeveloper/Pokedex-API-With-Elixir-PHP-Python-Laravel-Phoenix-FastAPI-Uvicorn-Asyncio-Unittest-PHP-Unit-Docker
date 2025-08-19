<?php

namespace App\Domains\Pokemon;

use App\Constants\Domains\PokemonConstants;
use App\Domains\Pokemon\Infrastructure\PokemonSpecifications;
use App\Domains\Pokemon\PokemonDataLoadingAdapter;

class MatrixOfPokemonsDataTransformingAdapter
{
    private function __construct()
    {
    }

    /**
     *  @return array<array<PokemonEntity>>
     */
    public static function getMatrixOfPokemonsData()
    {
        $listOfPokemonData = PokemonDataLoadingAdapter::getListOfPokemonsData();

        /**
         *  @var array<array<PokemonEntity>>
         */
        $matrixOfPokemonData = [];

        $currentPage = PokemonConstants::INITIAL_PAGE;

        $isTransformationNotDone = true;

        while ($isTransformationNotDone) {
            $currentPagePokemonsData = array_slice($listOfPokemonData, $currentPage, PokemonConstants::NUMBER_OF_POKEMON_ON_EACH_PAGE);

            array_push($matrixOfPokemonData, $currentPagePokemonsData);

            $currentPage += PokemonConstants::NUMBER_OF_POKEMON_ON_EACH_PAGE;

            if (PokemonSpecifications::isCurrentNumberOfPagesEqualsToNumberOfPagesOfPaginatedMatrixOfPokemonsData($matrixOfPokemonData)) {
                $isTransformationNotDone = false;
            }
        }

        return $matrixOfPokemonData;
    }
}
