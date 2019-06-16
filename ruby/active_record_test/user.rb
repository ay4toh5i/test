require './connector.rb'

class User < Connector
  scope :id, -> (id) { where(id: id) if id.present? }
end
