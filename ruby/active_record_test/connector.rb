require 'bundler/setup'
require 'active_record'

class Connector < ActiveRecord::Base
  self.abstract_class = true
  con = {
    adapter: 'mysql2',
    host:    '127.0.0.1',
    username: 'root',
    password: 'password',
    database: 'laravel_todo'
  }
  establish_connection(con)
end
