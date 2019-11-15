# Printing the any oject
print("Hi world")

# Identation is importent in python
if 5>2 :
	print("Five is greater than two!!!")

# Variable declearation and to find the type of the variables
x = 5
y = "Hi"
z = 3+6j
print(type(x),type(y),type(z))

#Type conversion

X = 6
Y = 3.23
Z = 3+5j

a = float(X)
b = int(Y)
c = complex(Y)
print(a,type(a))
print(b,type(b))
print(c,type(c))

#Random random()
import random
print(random.randrange(1,10))

# String declearation
"""Lorem ipsum dolor sit amet,
consectetur adipiscing elit,
sed do eiusmod tempor incididunt
ut labore et dolore magna aliqua."""

a = """Lorem ipsum dolor sit amet,
consectetur adipiscing elit,
sed do eiusmod tempor incididunt
ut labore et dolore magna aliqua."""
b = '''Lorem ipsum dolor sit amet,
consectetur adipiscing elit,
sed do eiusmod tempor incididunt
ut labore et dolore magna aliqua.'''
print(a)
print(b)

# Substring. Get the characters from position 2 to position 5 (not included):
sub = "Hello, World!"
print(sub[2:5])

#The strip() method removes any whitespace from the beginning or the end:

st = "  end  "
print(st.strip())

#len() is to find out the length of the string
print(len(st))
#lower() is write the string is the lower case
print(sub.lower())
#upper() is write the string in the upper case
print(sub.upper())
#he replace() method replaces a string with another string:
print(sub.replace("o","X"))
#The split() method splits the string into substrings if it finds instances of the separator:
print(sub.split("o"))

#we can combine strings and numbers by using the format() method!
age = 23
# txt = "Vaishnavi's age is"+age   we can't do that
txt = 'Vaishnavi is {} years old' 
print(txt.format(age))

quantity = 3
itemno = 567
price = 49.95
#myorder = "I want {} pieces of item {} for {} dollars."
myorder = "I want {0} pieces of item {2} for {1} dollars."
#myorder = "I want {2} pieces of item {1} for {0} dollars."
print(myorder.format(quantity, itemno, price))





