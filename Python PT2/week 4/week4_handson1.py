#Complete Chapter 10 Programming Exercise: 1

class Pet:
     def __init__(self):
          self._name = "name"
          self._animal_type = "animal_type"
          self._age = "age"

     @property
     def name(self):
          return self._name
     @name.setter
     def name(self, value):
          self._name = value

     @property
     def animal_type(self):
          return self._animal_type
     @animal_type.setter
     def animal_type(self, value):
          self._animal_type = value

     @property
     def age(self):
          return self._age
     @age.setter
     def age(self, value):
          self._age = value

     def update_pet(self):
          self.name = input("Enter your pet's information: \nName: ")
          self.animal_type = input("Type: ")
          self.age = input("Age: ")
          print("\n")
     
     def __str__(self):
          return "\n".join([
               f"Confirm information: ",
               f"Name: {self.name}",
               f"Type: {self.animal_type}",
               f"Age: {self.age}"
          ]) 

#main function
if __name__ == "__main__":
     new_pet = Pet()
     new_pet.update_pet()
     print(new_pet)
