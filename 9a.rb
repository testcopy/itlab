puts "enter n"
n = gets.to_i
t = []

for i in 1..n
	x = gets.to_i
	t.push(x)
end

t = t.sort()

puts "median -"+t[n/2].to_s
