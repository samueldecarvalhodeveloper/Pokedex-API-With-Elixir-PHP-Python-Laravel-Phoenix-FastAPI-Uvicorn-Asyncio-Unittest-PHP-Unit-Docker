defmodule ServerSpecificationsTest do
  require ServerConstants
  use LoadBalancingProxyServiceWeb.ConnCase, async: true

  test "Test If Method \"is_current_server_index_the_last\"" do
    current_index_is_the_last =
      ServerSpecifications.is_current_server_index_the_last (
          length ServerConstants.list_of_server_to_be_balanced
        ) - 1
    current_index_is_not_the_last =
      ServerSpecifications.is_current_server_index_the_last 0


    assert current_index_is_the_last === true
    assert current_index_is_not_the_last === false
  end
end
