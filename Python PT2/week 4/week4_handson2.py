#Complete Chapter 10 Programming Exercise: 3

class Personaldata:
     def __init__(self):
          self._name = "name"
          self._address = "address"
          self._age = "age"
          self._phone = "phone"

     @property
     def name(self):
          return self._name
     @name.setter
     def name(self, value):
          self._name = value
     
     @property
     def address(self):
          return self._address
     @address.setter
     def address(self, value):
          self._address = value

     @property
     def age(self):
          return self._age
     @age.setter
     def age(self, value):
          self._age = value

     @property
     def phone(self):
          return self._phone
     @phone.setter
     def phone(self, value):
          self._phone = value

     def update_data(self):
          self.name = input("Enter your information: \nName: ")
          self.address = input("Address: ")
          self.age = input("Age: ")
          self.phone = input("Phone: ")
          print("\n")     

     def __str__(self):
          return "\n".join([
               f"Confirm information: ",
               f"Name: {self.name}",
               f"Address: {self.address}",
               f"Age: {self.age}",
               f"Phone: {self.phone}"
          ])


if __name__ == "__main__":
     my_data = Personaldata()
     friend_data = Personaldata()
     family_data = Personaldata()

     my_data.update_data()
     friend_data.update_data()
     family_data.update_data()

     print(my_data)
     print(friend_data)
     print(family_data)



