from http import HTTPStatus
from unittest import TestCase

from fastapi.testclient import TestClient

from src.constants.routers_constants import *
from src.constants.server_constants import *
from src.server import server

from json import loads


class TestServer(TestCase):
    _client: TestClient

    @classmethod
    def setUpClass(cls):
        cls._client = TestClient(server)

    def test_if_static_router_is_set(self):
        response = self._client.get(STATIC_FILES_ROUTER + POKEMON_DATA_ROUTER)

        self.assertEqual(response.status_code, HTTPStatus.OK)

    def test_if_function_not_found_handler_respond_not_found_message(self):
        response = self._client.get(INDEX_ROUTER)

        parsed_json_of_response_body: dict[str, str] = loads(response.content)

        self.assertEqual(response.status_code, HTTPStatus.NOT_FOUND)
        self.assertEqual(
            parsed_json_of_response_body.get(NOT_FOUND_ERROR_MESSAGE),
            NOT_FOUND_ERROR_DESCRIPTION,
        )
