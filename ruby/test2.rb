require 'json'

hash = { record: [
         { id: 1, value: 'xxx' },
         { id: 2, value: 'xxx' },
         ] 
       }

print 'put something: '
string = gets.chomp!
puts "you put '#{string}'"

hash.each do |key, value|
  puts "#{key}:#{JSON.pretty_generate(value)}"
end
