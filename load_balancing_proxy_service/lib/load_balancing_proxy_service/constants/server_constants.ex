defmodule ServerConstants do
  defmacro list_of_server_to_be_balanced do
    ["http://localhost:3002/", "http://localhost:3003/", "http://localhost:3004/"]
  end

  defmacro current_server_index_environment_variable_name do
    "current_server_index"
  end

  defmacro first_server_index do
    "0"
  end

  defmacro pokemon_id_map_key do
    "id"
  end

  defmacro index_router do
    "/"
  end

  defmacro not_found_error_message do
    "404 Error: Page Not Found"
  end

  defmacro not_existing_route do
    "/dsada/dsadasda/"
  end
end
