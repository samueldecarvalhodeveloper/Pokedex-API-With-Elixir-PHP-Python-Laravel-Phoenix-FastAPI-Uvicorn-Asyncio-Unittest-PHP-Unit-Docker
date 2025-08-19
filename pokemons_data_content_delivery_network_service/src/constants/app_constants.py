from os.path import realpath

SERVER_MODULE_ATTRIBUTE = "src.server:server"

STATIC_FILES_DIRECTORY = realpath(f"{realpath(__file__)}/../../../static")

PORT_ENVIRONMENT_VARIABLE = "PORT"

HOST_NAME = "0.0.0.0"

GET_HTTP_METHOD = "GET"
