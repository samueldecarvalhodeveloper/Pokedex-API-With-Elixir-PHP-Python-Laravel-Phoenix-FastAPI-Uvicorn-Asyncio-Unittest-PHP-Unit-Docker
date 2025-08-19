from http import HTTPStatus
from unittest import TestCase

from starlette.testclient import TestClient

from src.constants.routers_constants import STATIC_FILES_ROUTER, POKEMON_DATA_ROUTER
from src.server import server


class TestSystem(TestCase):
    _client: TestClient

    @classmethod
    def setUpClass(cls):
        cls._client = TestClient(server)

    def test_if_static_router_is_set(self):
        response = self._client.get(STATIC_FILES_ROUTER + POKEMON_DATA_ROUTER)

        self.assertEqual(response.status_code, HTTPStatus.OK)
