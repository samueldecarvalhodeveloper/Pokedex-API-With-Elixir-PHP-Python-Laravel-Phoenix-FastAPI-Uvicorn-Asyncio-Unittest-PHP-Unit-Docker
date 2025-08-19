defmodule ServerSelectorTest do
  require ServerConstants
  use LoadBalancingProxyServiceWeb.ConnCase, async: true

  test "Test If Method \"get_server\" Returns The Current Server Based Of Round-Robin Index Choosing Algorithm" do
    System.put_env(
      ServerConstants.current_server_index_environment_variable_name,
      ServerConstants.first_server_index
    )

    first_server = ServerSelector.get_server

    assert first_server === Enum.at(ServerConstants.list_of_server_to_be_balanced, 0)

    second_server = ServerSelector.get_server

    assert second_server === Enum.at(ServerConstants.list_of_server_to_be_balanced, 1)

    third_server = ServerSelector.get_server

    assert third_server === Enum.at(ServerConstants.list_of_server_to_be_balanced, 2)

    returned_to_first_server = ServerSelector.get_server

    assert returned_to_first_server === Enum.at(ServerConstants.list_of_server_to_be_balanced, 0)
  end
end
