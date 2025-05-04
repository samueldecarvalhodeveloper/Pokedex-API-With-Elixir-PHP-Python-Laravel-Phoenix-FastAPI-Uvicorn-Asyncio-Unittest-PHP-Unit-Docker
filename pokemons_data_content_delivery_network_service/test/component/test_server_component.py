from http import HTTPStatus
from unittest import TestCase

from fastapi.testclient import TestClient

from src.constants.routers_constants import *
from src.server import server


class TestServerComponent(TestCase):
    _client: TestClient

    @classmethod
    def setUpClass(cls):
        cls._client = TestClient(server)

    def test_fetching_pokemon_data(self):
        valid_router_response = self._client.get(
            STATIC_FILES_ROUTER + POKEMON_DATA_ROUTER
        )
        not_valid_router_response = self._client.get(INDEX_ROUTER)

        self.assertEqual(valid_router_response.status_code, HTTPStatus.OK)
        self.assertEqual(not_valid_router_response.status_code, HTTPStatus.NOT_FOUND)
