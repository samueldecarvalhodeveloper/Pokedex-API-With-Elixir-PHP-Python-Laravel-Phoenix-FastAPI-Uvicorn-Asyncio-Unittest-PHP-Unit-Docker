<?php

use App\Constants\ApplicationConstants;
use App\Http\Controllers\PokemonController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get(ApplicationConstants::INDEX_ROUTER, [PokemonController::class, ApplicationConstants::INDEX_ROUTER_HANDLER_METHOD]);

Route::get(ApplicationConstants::POKEMON_DETAILS_ROUTER, [PokemonController::class, ApplicationConstants::POKEMON_DETAILS_ROUTER_HANDLER_METHOD]);

Route::fallback(function () {
    return response()->json(ApplicationConstants::NOT_FOUND_JSON_RESPONSE, Response::HTTP_NOT_FOUND);
});
