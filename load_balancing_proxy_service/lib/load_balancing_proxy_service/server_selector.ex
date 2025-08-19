defmodule ServerSelector do
  require ServerConstants
  def get_server do
    current_server_index = (
        (System.get_env ServerConstants.current_server_index_environment_variable_name) ||
        ServerConstants.first_server_index
    )

    if ServerSpecifications.is_current_server_index_the_last String.to_integer current_server_index do
      System.put_env(
        ServerConstants.current_server_index_environment_variable_name,
        ServerConstants.first_server_index
      )
    else
      System.put_env(
        ServerConstants.current_server_index_environment_variable_name,
        to_string((String.to_integer current_server_index) + 1)
      )
    end

    Enum.at(ServerConstants.list_of_server_to_be_balanced, String.to_integer current_server_index)
  end
end
