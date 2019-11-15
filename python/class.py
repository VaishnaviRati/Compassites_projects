class Person:
	def __init__(self,name,age):
		self.name = name
		self.age = age
#creating object		
P1 = Person("Vaishu",23)
print(P1.name)
print(P1.age)

#----------------------------------------------------------
#object method
class Person:
  def __init__(self, name, age):
    self.name = name
    self.age = age

  def myfunc(self):
    print("Hello my name is " + self.name + " and  i am " + str(self.age) + "old." )

p1 = Person("John", 36)
p1.myfunc()

#----------------------------------------------------------		
#self naming, we can change the self and we can give whatever we want
class Person():
	"""docstring for Person"""
	def __init__(obj, name, age):
		obj.name = name
		obj.age = age
	def myfunction(func):
		print("hi " + str(func.age))
p2 = Person("sony",22)
p2.myfunction()
# you can change the value of the variables
p2.age = 30

p2.myfunction()

#----------------------------------------------------------
# Inheritance
#Parent class : is same like other classes

class School():
	def __init__(self,fname,lname):
		self.fisrtname = fname
		self.lastname = lname
	def student_name(self):
		print("Student Name is " + self.fisrtname + " " + self.lastname )

s1 = School("vaishnavi","Raghu")
s1.student_name()