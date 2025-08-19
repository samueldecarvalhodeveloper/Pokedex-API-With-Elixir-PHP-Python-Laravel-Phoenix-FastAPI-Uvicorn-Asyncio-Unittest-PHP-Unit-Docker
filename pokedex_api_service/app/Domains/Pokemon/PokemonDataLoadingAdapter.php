<?php

namespace App\Domains\Pokemon;

class PokemonDataLoadingAdapter
{
    /**
     *  @var array<PokemonEntity>
     */
    private static $listOfPokemonData = [];
    /**
     *  @var array<array<PokemonEntity>>
     */
    private static $matrixOfPokemonData = [];

    private function __construct()
    {
    }

    static function getListOfPokemonsData()
    {
        if (empty(self::$listOfPokemonData)) {
            $listOfPokemonDataTransferObjects = PokemonGateway::getListOfPokemonDataTransferObjects();

            self::$listOfPokemonData = PokemonMapper::getMappedListOfPokemonEntities($listOfPokemonDataTransferObjects);
        }

        return self::$listOfPokemonData;
    }

    static function getMatrixOfPokemonsData()
    {
        if (empty(self::$matrixOfPokemonData)) {
            self::$matrixOfPokemonData = MatrixOfPokemonsDataTransformingAdapter::getMatrixOfPokemonsData();
        }

        return self::$matrixOfPokemonData;
    }
}
