import asyncio

import uvicorn

from src.constants.app_constants import *
from src.port_selector import PortSelector


async def main(port: int):
    server_configurations = uvicorn.Config(app=SERVER_MODULE_ATTRIBUTE, port=port, host=HOST_NAME)
    server = uvicorn.Server(server_configurations)

    await server.serve()


if __name__ == "__main__":
    port = PortSelector.get_port()

    asyncio.run(main(port=port))
