require 'pp'

pp __FILE__
pp __LINE__
pp __ENCODING__

pp [1, 2, 3].prepend(4)
pp [1, 2, 3].append(4)

person =  { a: { a: 1, b: 2 },
            b: { a: 3, b: 4 } }

pp person

a = <<~TEXT
  これはヒアドキュメントです。
  インデントが無視されます。
    インデント
  インデント
  TEXT

puts a

#range object
pp (1..5).to_a
pp (1...5).to_a
pp [*1..5]

pp a[1..5]

# show methods that the class includes
# pp String.methods
# 継承したメソッドを含めない
# pp String.methods(false)
# etc..
# pp String.instance_methods
# pp String.public_methods

# &. can call methods safe
pp nil&.upcase!

begin
  nil.upcase!
rescue => error
  puts $!
  puts $@
  puts error
end
