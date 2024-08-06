<?php

namespace App\Constants;

class ApplicationConstants
{
    const HTTP_GET_METHOD = "GET";

    const ANY_JSON_RESPONSE = "{\"Message\":\"Success\"}";

    const NOT_FOUND_JSON_RESPONSE = ["Message" => "404 Error: Page Not Found"];

    const INDEX_ROUTER = "/";

    const INDEX_ROUTER_HANDLER_METHOD = "index";

    const POKEMON_DETAILS_ROUTER = "/{id}";

    const POKEMON_DETAILS_ROUTER_HANDLER_METHOD = "show";
}
