defmodule LoadBalancingProxyServiceWeb.LoadBalancingController do
  require ServerConstants
  use LoadBalancingProxyServiceWeb, :controller

  def index(conn, _params) do
    redirect(conn, external: ServerSelector.get_server)
  end

  def show(conn, params) do
    pokemon_id = params[ServerConstants.pokemon_id_map_key]

    redirect(conn, external: ServerSelector.get_server <> pokemon_id)
  end
end
