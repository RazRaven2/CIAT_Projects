# After reading the instructions, utilize user-defined functions and function calls by completing the coding assignments listed below.
# Write a class definition named Car. The Car class should have data attributes for a car’s model, year, speed, and color. 
#  The class should also have the following:
# An _ _init_ _ method for the class. The method should accept an argument for each of the data attributes.
# Accessor and mutator methods for each data attribute.
# Create my_car is the name of a variable that references an object.
# Write a statement that uses the my_car variable to call the accessor and mutator methods. 

class Car:
     def __init__(self):
          self._make = "make"
          self._modle = "modle"
          self._year = "year"

     @property
     def make(self):
          return self._make
     @make.setter
     def make(self, value):
          self._make = value
     
     @property
     def modle(self):
          return self._modle
     @modle.setter
     def modle(self, value):
          self._modle = value
     
     @property
     def year(self):
          return self._year
     @year.setter
     def year(self, value):
          self._year = value

     def __str__(self):
          return "\n".join([
               f"Confirm information: ",
               f"Make: {self.make}",
               f"Modle: {self.modle}",
               f"Year: {self.year}"
          ])


#main function
if __name__ == "__main__":
     my_car = Car()
     my_car.make = input("Enter the car's make: ")
     my_car.modle = input("Enter the car's modle: ")
     my_car.year = input("Enter the car's year: ")

     print(my_car)