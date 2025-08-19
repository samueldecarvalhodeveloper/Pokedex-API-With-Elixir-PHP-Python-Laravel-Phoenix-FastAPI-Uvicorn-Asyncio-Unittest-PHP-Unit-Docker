<?php

namespace App\Domains\Pokemon;


use App\Constants\Domains\PokemonConstants;

class PokemonMapper
{
    private function __construct()
    {
    }

    /**
     * @param PokemonDataTransferObject[] $listOfPokemonDataTransferObject
     * @return PokemonEntity[]
     */
    public static function getMappedListOfPokemonEntities(array $listOfPokemonDataTransferObject): array
    {
        /**
         * @var PokemonEntity[]
         */
        $mappedListOfPokemonEntities = [];

        foreach ($listOfPokemonDataTransferObject as $pokemonDataTransferObject) {
            $pokemonDataTransferObjectId = $pokemonDataTransferObject->id;
            $pokemonDataTransferObjectName = $pokemonDataTransferObject->name;
            $pokemonDataTransferObjectTypes = $pokemonDataTransferObject->types;

            $pokemonImageUrl = PokemonConstants::STATIC_POKEMON_IMAGE_BASE_URL . $pokemonDataTransferObjectId . PokemonConstants::POKEMON_IMAGE_FILE_EXTENSION;

            $pokemonMapped =
                PokemonEntityFactory::getInstance(
                    $pokemonDataTransferObjectId,
                    $pokemonDataTransferObjectName,
                    $pokemonImageUrl,
                    $pokemonDataTransferObjectTypes
                );

            array_push($mappedListOfPokemonEntities, $pokemonMapped);
        }

        return $mappedListOfPokemonEntities;
    }
}
