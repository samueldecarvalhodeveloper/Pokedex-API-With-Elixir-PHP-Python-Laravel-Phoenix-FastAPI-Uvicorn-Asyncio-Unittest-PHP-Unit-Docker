import Config

# Configure your database
#
# The MIX_TEST_PARTITION environment variable can be used
# to provide built-in test partitioning in CI environment.
# Run `mix help test` for more information.
config :load_balancing_proxy_service, LoadBalancingProxyService.Repo,
  database: Path.expand("../load_balancing_proxy_service_test.db", __DIR__),
  pool_size: 1,
  pool: Ecto.Adapters.SQL.Sandbox

# We don't run a server during test. If one is required,
# you can enable the server option below.
config :load_balancing_proxy_service, LoadBalancingProxyServiceWeb.Endpoint,
  http: [ip: {0, 0, 0, 0}, port: 4002],
  secret_key_base: "vPiOqHRhhPRqMdaiesx3owp0+zAzqB1cmy4mRzucsR734aneMJ79pRuElWZhclvG",
  server: false

# Print only warnings and errors during test
config :logger, level: :warning

# Initialize plugs at runtime for faster test compilation
config :phoenix, :plug_init_mode, :runtime
