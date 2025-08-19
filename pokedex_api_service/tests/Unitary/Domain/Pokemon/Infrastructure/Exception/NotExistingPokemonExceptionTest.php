<?php

namespace Tests\Domains\Pokemon\Infrastructure\Exception;

use Tests\TestCase;
use App\Constants\Domains\PokemonConstants;
use App\Domains\Pokemon\Infrastructure\Exception\NotExistingPokemonException;
use Exception;

class NotExistingPokemonExceptionTest extends TestCase
{
    function testIfExceptionHandlesNotExistingPokemonException()
    {
        try {
            throw new NotExistingPokemonException();
        } catch (Exception $exception) {

            $this->assertEquals(PokemonConstants::NOT_EXISTING_POKEMON_EXCEPTION_MESSAGE, $exception->getMessage());
        }
    }
}
