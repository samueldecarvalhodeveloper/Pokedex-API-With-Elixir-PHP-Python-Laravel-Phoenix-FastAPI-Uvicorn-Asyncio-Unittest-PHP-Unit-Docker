from typing import Any

from fastapi import FastAPI, Request
from fastapi.responses import JSONResponse
from fastapi.staticfiles import StaticFiles
from starlette.exceptions import HTTPException

from src.constants.app_constants import *
from src.constants.server_constants import *
from src.constants.routers_constants import STATIC_FILES_ROUTER

server = FastAPI()

server.mount(
    STATIC_FILES_ROUTER,
    StaticFiles(directory=STATIC_FILES_DIRECTORY),
)


@server.exception_handler(HTTPException)
async def not_found_handler(request: Request, exc: Any):
    return JSONResponse(
        status_code=NOT_FOUND_ERROR_STATUS_CODE,
        content={NOT_FOUND_ERROR_MESSAGE: NOT_FOUND_ERROR_DESCRIPTION},
    )
