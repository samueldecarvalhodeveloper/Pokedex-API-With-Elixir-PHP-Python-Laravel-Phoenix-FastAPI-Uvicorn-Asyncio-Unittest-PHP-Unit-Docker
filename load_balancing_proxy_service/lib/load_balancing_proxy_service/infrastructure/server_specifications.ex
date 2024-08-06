defmodule ServerSpecifications do
  require ServerConstants
  def is_current_server_index_the_last_server_index current_server_index do
    current_server_index === length(ServerConstants.list_of_server_to_be_balanced) - 1
  end
end
