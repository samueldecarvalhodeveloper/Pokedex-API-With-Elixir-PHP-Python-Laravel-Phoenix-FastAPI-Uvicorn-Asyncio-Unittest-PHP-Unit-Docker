import Config

# Do not print debug messages in production
config :logger, level: :info

# Runtime production configuration, including reading
# of environment variables, is done on config/runtime.exs.
config :load_balancing_proxy_service, LoadBalancingProxyServiceWeb.Endpoint,
  http: [ip: {0, 0, 0, 0}, port: System.get_env("PORT") || 4000],
  server: true
