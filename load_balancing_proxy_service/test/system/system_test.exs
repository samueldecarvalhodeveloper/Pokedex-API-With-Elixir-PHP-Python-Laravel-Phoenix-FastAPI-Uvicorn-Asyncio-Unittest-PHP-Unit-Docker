defmodule SystemTest do
  require ServerConstants
  use LoadBalancingProxyServiceWeb.ConnCase, async: true

  test "Test If System Redirects The Client To Load Balanced Servers", %{conn: conn} do
    System.put_env(
      ServerConstants.current_server_index_environment_variable_name,
      ServerConstants.first_server_index
    )

    request = get conn, ServerConstants.index_router

    assert redirected_to(request) === Enum.at(ServerConstants.list_of_server_to_be_balanced, 0)
  end
end
