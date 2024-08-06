defmodule ServerSpecificationsTest do
  require ServerConstants
  use LoadBalancingProxyServiceWeb.ConnCase, async: true

  test "Test If Method \"is_current_server_index_the_last_server_index\"" do
    current_index_is_the_last_server_index =
      ServerSpecifications.is_current_server_index_the_last_server_index (
          length ServerConstants.list_of_server_to_be_balanced
        ) - 1
    current_index_is_not_the_last_server_index =
      ServerSpecifications.is_current_server_index_the_last_server_index 0


    assert current_index_is_the_last_server_index === true
    assert current_index_is_not_the_last_server_index === false
  end
end
