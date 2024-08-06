from os import environ
from src.constants.app_constants import PORT_ENVIRONMENT_VARIABLE
from src.constants.server_constants import PORT
from sys import argv


class PortSelector:
    @staticmethod
    def get_port():
        try:
            return int(environ[PORT_ENVIRONMENT_VARIABLE])
        except:
            ...

        return PORT
