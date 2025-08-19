defmodule LoadBalancingProxyService.Repo do
  use Ecto.Repo,
    otp_app: :load_balancing_proxy_service,
    adapter: Ecto.Adapters.SQLite3
end
