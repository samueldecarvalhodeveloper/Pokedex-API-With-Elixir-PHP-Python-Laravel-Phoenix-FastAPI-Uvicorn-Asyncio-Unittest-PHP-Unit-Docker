from os import environ
from unittest import TestCase

from src.constants.app_constants import PORT_ENVIRONMENT_VARIABLE
from src.constants.server_constants import PORT, NOT_DEFAULT_PORT
from src.port_selector import PortSelector


class TestPortSelector(TestCase):
    def test_method_get_port_returns_the_port_defined_on_environment_variable(
            self,
    ):
        environ[PORT_ENVIRONMENT_VARIABLE] = str(NOT_DEFAULT_PORT)

        port = PortSelector.get_port()

        self.assertEqual(port, NOT_DEFAULT_PORT)

        environ[PORT_ENVIRONMENT_VARIABLE] = ""

    def test_if_method_get_port_returns_the_default_port_if_port_is_not_set_by_the_environment_or_command_line_argument(
            self,
    ):
        port = PortSelector.get_port()

        self.assertEqual(port, PORT)
