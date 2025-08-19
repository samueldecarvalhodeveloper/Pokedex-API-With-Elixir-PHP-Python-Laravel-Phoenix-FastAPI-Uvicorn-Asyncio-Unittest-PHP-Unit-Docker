<?php

namespace App\Domains\Pokemon\Infrastructure\Exception;

use App\Constants\Domains\PokemonConstants;
use Exception;

class NotExistingPokemonException extends Exception
{
    public $message = PokemonConstants::NOT_EXISTING_POKEMON_EXCEPTION_MESSAGE;
}
