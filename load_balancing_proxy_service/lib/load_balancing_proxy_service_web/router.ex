defmodule LoadBalancingProxyServiceWeb.Router do
  require ServerConstants
  use LoadBalancingProxyServiceWeb, :router
  use Plug.ErrorHandler

  def handle_errors(conn, %{reason: %Phoenix.Router.NoRouteError{}}) do
    conn
    |> put_status(:not_found)
    |> put_resp_content_type("application/json")
    |> json(%{Message: ServerConstants.not_found_error_message})
    |> halt()
  end

  resources ServerConstants.index_router, LoadBalancingProxyServiceWeb.LoadBalancingController
end
